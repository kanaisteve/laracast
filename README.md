# Laravel Blog Demo Project

## Project Description
1. Simple Blog System Project
2. Posts, Categories, Tags, Comments and User Registration System
3. Admin Dashboard for admins, editors(authors) and other roles.
4. Each Rule has it own permission as admin specified.
5. Contact page to contact with your visitors and full controll inside admin dashboard.
6. About page for visitors and full control for admin to edit it.
7. TinyMCE Editor will be included to work with posts.

## Further Ideas

Of course we only had time in the Laravel From Scratch series to review the essentials of a blogging platform. You can certainly take this many 
steps further. Here are some quick ideas that you might play with.

1. Add a `status` column to the posts table to allow for posts that are still in a "draft" state. Only when this status is changed to "published" should they show up in the blog feed. 
2. Update the "Edit Post" page in the admin section to allow for changing the author of a post.
3. Add an RSS feed that lists all posts in chronological order.
4. Record/Track and display the "views_count" for each post.
5. Allow registered users to "follow" certain authors. When they publish a new post, an email should be delivered to all followers.
6. Allow registered users to "bookmark" certain posts that they enjoyed. Then display their bookmarks in a corresponding settings page.
7. Add an account page to update your username and upload an avatar for your profile.
8. Complete API for Blog to use it on Mobile Application or other website.
9. Chat system between registered users.
10. Enhancing the frontend a little and working with Livewire.

## Building Complete Blog System with Laravel 8

### Database Migration, Models and Relationships

- User & Role Models and Relationships
- Fixing users migration Foreign Key
- Post Model and Relationsip with User Model
- Category Model and Relationship with Post Model
- Tag Model and Relationship with  Post Model
- Comment Model and Relationship with Post Model
- Image Model and (Polymorphic) Relationship Between Image, Post and User
- Profile Model and Relationship with User Model

### Generationg Dummy Data Using Models Factories and Database Seeder

- User and Role Factories.
- Post and Category Factories
- Comment Factory
- Tag Factory
- Image Factory

### Admin Dashboard - Overview

- Intro to Admin Dashboard
- Setup Admin Dashboard
- Merge Dashboard Page to our Project and Fixing CSS and JS links
- Prevent users from accessing admin pages using middlewares

### Admin Dashboard - Posts

- Create New Post Form.
- Uploading Images on TinyMCE Editor on the Post Form.
- Validate data and inserting posts.
- Edit post.
- Update and Delete Posts.
- View all posts.
- Commit to Git.

### Admin Dashboard - Categories

- Create New Category Form
- Validate Data & Store New Category
- Edit and Update Category.
- Delete Category and Show all categories.

### Admin Dashboard - Tags

- Insert and Update Tags inside Post Form.
- Detach Related Tags after deleting post and fix post thumbnail.
- Update Tags in Post Form.
- View All Tags.

### Admin Dashboard - Comments

- Create Comment Form
- Store Comment
- Edit, Update and Delete Comment.
- View all comments.

### Admin Dashboard - Roles & Permissions

- Introduction to Roles and Permissions
- Dynamically store all permissions
- Attach Roles with permission.
- Create Role Form.
- Store Role.
- View All Roles

### Admin Dashboard - Users

- Create and store Users.
- Edit and update Users.
- Middleware.
- User password update.
- Image (Avatar) Update.
- View all Users and Related Posts for one User.

### Admin Dashboard - Conatact Page

- View all contacts.
- Delete contact.

### Admin Dashboard - Setting (About Page)

- Let's make About Page Dynamic.
- Setting (About Page) Form.
- Update setting (About page).

### Setup Blog Template

- Template overview
- Create project with setup Breeze Package for Authentication.
- Building Home Page and Fixing CSS and JS links.
- Build Master Layout (layouts.frontend) and Single Post Page.
- Build contact and about pages.
- Implementing logout and login.

### Let's Make it Dynamic Using Contollers

- Get all posts on the Home Page.
- Get post images dynamically.
- Get sidebar recent posts dynamically.
- Home Posts pagination.
- Single post.
- Implement Post Comment button in single post.
- Show flash message when posting comment.
- Working on About Controller.
- Working on Contact Controller (Sending contact email)
- Sending contact Markdown email.
- Implementing send contact Email with AJAX (Part 1)
- Implementing send contact Email with AJAX (Part 2)
- Category posts pages.
- Tag posts page.
- Categories Page.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
