<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Models\Posts;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {

        $post = Posts::first();
        $view = $this->view('single', compact('post'));
        $view->assertSee('Posts');
    }
}
