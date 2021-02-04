<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase
{
    use RefreshDatabase;

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
    // public function testStatusOk()
    // {
    //     $this->response->assertStatus(200);
    // }

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

    /**
     * @dataProvider pcSepcsProvider
     */
    public function testPcSpecsTable($expectedKey, $expectedValue)
    {
        $pcSpecs = factory(\App\Models\PcSpecs::class)->make()->toArray();
        $this->assertArrayHasKey($expectedKey, $pcSpecs);
        $this->assertContains($expectedValue, $pcSpecs);
    }

    public function pcSepcsProvider()
    {
        return [
            ['CPU', 'Ryzen 3600'],
            ['Graphics Card', 'RTX 2070 Super'],
            ['Motherboard', 'MSI GamingPlus'],
            ['RAM', 'Corsair Vengeance 3200MHz'],
            ['Case', 'NZXT H510'],
            ['Power Supply', 'EVGA Supernova 650 Watt']   ,
            ['Storage', 'Samsung EVO 970 NVMe 1TB SSD']         
        ];
    }
}
