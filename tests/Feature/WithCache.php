<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WithCache extends TestCase
{
    use DatabaseMigrations;

    public function testExample()
    {
        $this->assertTrue(true);
    }
}