<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HotelFormSubmissionsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function homepage_and_all_pages_load_successfully()
    {
        $pages = ['/', '/about', '/properties', '/property-single', '/gallery', '/blog', '/blog-single', '/contact'];
        
        foreach ($pages as $page) {
            $response = $this->get($page);
            $response->assertStatus(200);
        }
    }

    /** @test */
    public function contact_page_loads_and_accepts_submission()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);

        $submitResponse = $this->post('/contact-submit', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Reservation Inquiry',
            'message' => 'Hello, I would like to make a reservation.',
        ]);

        $submitResponse->assertRedirect();
        $submitResponse->assertSessionHas('success');

        $this->assertDatabaseHas('contacts', [
            'email' => 'john@example.com',
        ]);
    }

    /** @test */
    public function newsletter_subscription_works()
    {
        $submitResponse = $this->post('/newsletter-submit', [
            'email' => 'vip.guest@example.com',
        ]);

        $submitResponse->assertRedirect();
        $submitResponse->assertSessionHas('success');

        $this->assertDatabaseHas('newsletters', [
            'email' => 'vip.guest@example.com',
        ]);
    }

    /** @test */
    public function booking_inquiry_submission_works()
    {
        $submitResponse = $this->post('/check-availability', [
            'name' => 'Alice Smith',
            'arrival' => '2026-09-01',
            'departure' => '2026-09-05',
            'rooms' => '2',
            'adults' => '2',
            'children' => '0',
        ]);

        $submitResponse->assertRedirect();
        $submitResponse->assertSessionHas('booking_success');

        $this->assertDatabaseHas('booking_inquiries', [
            'name' => 'Alice Smith',
        ]);
    }

    /** @test */
    public function blog_comment_submission_works()
    {
        $submitResponse = $this->post('/comment-submit', [
            'name' => 'Robert Johnson',
            'email' => 'robert@example.com',
            'message' => 'Great article on luxury gastronomy!',
        ]);

        $submitResponse->assertRedirect();
        $submitResponse->assertSessionHas('comment_success');

        $this->assertDatabaseHas('comments', [
            'email' => 'robert@example.com',
        ]);
    }
}
