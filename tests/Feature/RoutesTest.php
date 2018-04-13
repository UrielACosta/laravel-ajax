<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

    	$response = $this->get('/listar-usuarios'); //make GET access to blog route
    	
    $response->assertStatus(200); //assert http status return is 200 
    
}
}
