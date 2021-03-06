<?php


namespace UserForce\Scraper\Facade;

use Illuminate\Support\Facades\Facade;
use UserForce\Scraper\ScraperServiceProvider;

class Scraper extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ScraperServiceProvider::COMPONENT_NAME;
    }
}