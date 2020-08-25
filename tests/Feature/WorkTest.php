<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Worktest extends TestCase
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
        $this->response = $this->get('work');
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
     * Test that photoname is populated correctly
     * 
     * @return void
     */
    public function testViewHasPhotoName()
    {
        $key = 'photoName';
        $expected = 'Glentress, Scotland';
        $this->response->assertViewHas($key, $expected);
    }
}
