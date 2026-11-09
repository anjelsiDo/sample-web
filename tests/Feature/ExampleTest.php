<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_student_dashboard_is_the_homepage(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Welcome back, Alex');
    }

    public function test_the_hello_starter_page_is_removed(): void
    {
        $this->get('/hello')->assertNotFound();
    }

    public function test_sidebar_pages_open_as_blank_pages(): void
    {
        foreach (['courses', 'schedule', 'grades', 'messages'] as $section) {
            $this->get("/students/{$section}")
                ->assertOk()
                ->assertSee('class="blank-page"', false)
                ->assertSee('aria-current="page"', false);
        }
    }
}
