<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Comment;

class PostComment extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.post-comment', [
            'comment' => Category::all()
        ]);
    }
}
