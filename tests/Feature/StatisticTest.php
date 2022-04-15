<?php

namespace Tests\Feature;

use App\Models\Link;
use App\Services\Statistic\Statistic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class StatisticTest extends TestCase
{
    private Link $link;

    protected function setUp(): void
    {
        parent::setUp();
        $this->link = Link::factory()->create();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetStatistic() : void
    {
        $statistic = New Statistic();
        $request = new Request();
        $statisticData = $statistic->getStatistic($request, $this->link);
        $this->assertIsArray($statisticData);
        $this->assertArrayHasKey("link_id", $statisticData);
        $this->assertEquals(3, count($statisticData));
    }
}
