<?php

namespace Tests\Feature;

use Tests\TestCase;

class LinkStatisticControllerTest extends TestCase
{
    public function testIndex(): void
    {
        $response = $this->get(route("statistics"));
        $response->assertStatus(200);
    }
}
