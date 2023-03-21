<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;//se usa para las particularidades de Laravel

class CrudTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_vistas()
    {
        $response = $this->get('/');
        $response->assertStatus(200);


        $response = $this->get('/create');
        $response->assertStatus(200);

        $response = $this->get('/show/2');
        $response->assertStatus(200);
    }
}
