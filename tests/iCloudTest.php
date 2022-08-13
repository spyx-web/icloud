<?php

namespace Tests;

use Cloud\Icloud\Application;
use PHPUnit\Framework\TestCase;

class iCloudTest extends TestCase
{

    public function testLogin()
    {
        $icloud = \Mockery::mock(Application::class, ['client_id' => '111', 'client_key', 'domain' => 'https://localhost:8080']);
        $icloud->shouldReceive('login')->once()->andReturn([
            'code' => 200,
            'msg' => 'ok',
            'data' => []
        ]);
        $result = $icloud->login('szpengjian@gmail.com','12345678');
        $this->assertIsArray($result);
        $this->assertEquals([
            'code' => 200,
            'msg' => 'ok',
            'data' => []
        ], $result);
    }
}