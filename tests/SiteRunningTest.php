<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SiteRunningTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testIsTheSiteRunning()
    {
        $this->visit('/')
             ->see('YES');
    }
}
