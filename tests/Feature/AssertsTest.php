<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AssertsTest extends TestCase
{
    
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testCheckLarval()
    {
        $response = $this->get('/');
        $response->assertSeeText('Laravel');
    }
}
