<?php

namespace Tests\Unit;


use App\Services\ShortLink\ShortLink;
use PHPUnit\Framework\TestCase;

class ShortLinkTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGenerate()
    {
        $generate = new ShortLink();
        $shortLink1 = $generate->generate();
        $shortLink2 = $generate->generate();

        $this->assertNotNull($shortLink1);
        $this->assertNotNull($shortLink2);
        $this->assertNotEquals($shortLink1, $shortLink2);
        $this->assertEquals(10, strlen($shortLink1));
        $this->assertEquals(10, strlen($shortLink2));
    }
}
