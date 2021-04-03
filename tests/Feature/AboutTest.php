<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase
{
    // use RefreshDatabase;

    private $response;

    /**
     * Setup for the test
     * 
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $this->response = $this->get('about');
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

    /**
     * Check the photname is populated correctly
     * 
     * @return void
     */
    public function testViewHasPhotoName()
    {
        $key = 'photoName';
        $expected = 'Pen-Y-Fan';
        $this->response->assertViewHas($key, $expected);
    }

    public function testPcSpecsPopulated()
    {
        $key = 'pcSpecs';
        $this->response->assertViewHas($key);
    }
}
