<?php

namespace CrucialDeveloper\CrucialBlog\Tests;

use Orchestra\Testbench\TestCase;
use CrucialDeveloper\CrucialBlog\CrucialBlogServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CrucialBlogServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
