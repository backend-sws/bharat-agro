<?php

namespace Tests\Feature;

use App\Models\Inquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SitePagesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test Home page renders successfully.
     */
    public function test_home_page_is_accessible(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Bharat Agro');
        $response->assertSee('मुख्यमंत्री उद्यमी योजना');
    }

    /**
     * Test Products catalog page renders successfully.
     */
    public function test_products_page_is_accessible(): void
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
        $response->assertSee('OUR PRODUCTS');
        $response->assertSee('Commercial Aata Chakki Machine');
    }

    /**
     * Test Product detail page renders successfully.
     */
    public function test_product_detail_page_is_accessible(): void
    {
        $response = $this->get('/products/aata-chakki-machine');
        $response->assertStatus(200);
        $response->assertSee('Commercial Aata Chakki Machine');
        $response->assertSee('कमर्शियल आटा चक्की मशीन');
    }

    /**
     * Test About page renders successfully.
     */
    public function test_about_page_is_accessible(): void
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('ABOUT US');
        $response->assertSee('Empowering Entrepreneurs with Trusted Agro & Industrial Machinery');
    }

    /**
     * Test Services page renders successfully.
     */
    public function test_services_page_is_accessible(): void
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
        $response->assertSee('SERVICES');
        $response->assertSee('सरकारी योजना कोटेशन एवं प्रोजेक्ट रिपोर्ट');
    }

    /**
     * Test Schemes page renders successfully.
     */
    public function test_schemes_page_is_accessible(): void
    {
        $response = $this->get('/schemes');
        $response->assertStatus(200);
        $response->assertSee('मुख्यमंत्री उद्यमी योजना');
        $response->assertSee('मुख्यमंत्री लघु उद्यमी योजना');
    }

    /**
     * Test Contact page renders successfully.
     */
    public function test_contact_page_is_accessible(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSee('7061973186');
        $response->assertSee('Aryabhata University');
    }

    /**
     * Test inquiry form submission saves to database.
     */
    public function test_inquiry_submission(): void
    {
        $payload = [
            'name' => 'राजेश कुमार',
            'phone' => '9876543210',
            'email' => 'rajesh@example.com',
            'city' => 'पटना',
            'state' => 'Bihar',
            'machine_name' => 'Commercial Aata Chakki Machine',
            'scheme' => 'मुख्यमंत्री उद्यमी योजना',
            'message' => 'कृपया कोटेशन भेजें।',
        ];

        $response = $this->post('/inquiry', $payload);
        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('inquiries', [
            'name' => 'राजेश कुमार',
            'phone' => '9876543210',
        ]);
    }
}
