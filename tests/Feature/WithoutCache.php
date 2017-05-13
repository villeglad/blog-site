<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WithoutCache extends TestCase
{
    use DatabaseMigrations;

    public function testPostsAreReturned()
    {
        $posts = factory(Post::class, 100)->create();
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
