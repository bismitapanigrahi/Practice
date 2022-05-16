<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ResponseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $this->assertTrue(true);

        $response = $this->getJson('/user');

        $response
        ->assertStatus(201)
        ->assertJson([
            'created' => true
        ]);
    }
}
