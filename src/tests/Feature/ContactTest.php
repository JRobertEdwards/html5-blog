<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    private $response;

    /**
     * Setup for the test
     * 
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $this->response = $this->get('contact');
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStatusOk()
    {
        $this->response->assertStatus(200);
    }

    public function testViewHasPhotoName()
    {
        $key = 'photoName';
        $expected = 'Madeira, Portugal';
        $this->response->assertViewHas($key, $expected);
    }
}
