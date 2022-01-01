<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    public $timestamp = true;

    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'category_id'];

    // default query from the database to fetch post with category and author fields
    protected $with = ['category', 'author'];

    // Replaces get post items from table by $id with $slug which was default.
    public function getRouteKeyName() {
        return 'slug';
    }

    public function scopeFilter($query, array $filters) {
        // filter posts by search request
        $query->when($filters['search'] ?? false, function($query, $search) {
            $query->where(function($query){
               $query 
                ->where('title', 'like', '%' . $search . '%')  
                ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        // filter posts by category
        $query->when($filters['category'] ?? false, function($query, $category) {
            $query->whereHas('category', function($query){
                    $query ->where('slug', $category);
                }
            );   
        });

        // filter posts by author
        $query->when($filters['author'] ?? false, function($query, $author) {
            $query->whereHas('author', function($query){
                    $query ->where('username', $author);
                }
            );   
        });
    }

    // show category associated with the post.
    public function category() { // this function will fetch all posts with the category_id
        return $this->belongsTo(Category::class);
    }

    // show posts associted with the author_id
    public function author() { // this function will fetch posts with the author_id foreign key.
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments() { // this function will fetch posts with the comment_id foreign key.
        return $this->hasMany(Comment::class);
    }

}
