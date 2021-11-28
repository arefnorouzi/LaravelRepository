<?php

namespace Tests\Unit;
use Tests\TestCase;
class PostRepositoryTest extends TestCase
{
    public function testGetAll()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testShow()
    {
        $response = $this->get('/2');
        $response->assertStatus(200);
    }
}
