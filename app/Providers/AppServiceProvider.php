<?php

namespace App\Providers;
use Illuminate\Database\Eloquent\Relations\Relation;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        Relation::morphMap([
            'post' => \App\Models\Post::class,
            'comment' => \App\Models\Comment::class,
            'cooking' => \App\Models\Cooking::class,
            'travel' => \App\Models\Travel::class,
            'book' => \App\Models\Book::class,
            'helping' => \App\Models\Helpinghand::class,
            'trick' => \App\Models\Trick::class,
        ]);
    }
}
