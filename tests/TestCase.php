<?php

    namespace checkoutweb\sdk\Tests;

    use checkoutweb\sdk\PacoteTeste\PacoteTesteBaseServiceProvider;

    class TestCase extends \Orchestra\Testbench\TestCase  {
        protected function setUp(): void
        {
            parent::setUp();
            $this->loadMigrationsFrom(__DIR__ . '/migrations');
            $this->artisan('migrate', ['--database' => 'testing'])->run();
        }

        protected function getEnvironmentSetUp($app)
        {
            $app['config']->set('database.default', 'testing');
        }

        protected function getPackageProviders($app)
        {
            return [
                PacoteTesteBaseServiceProvider::class
            ];
        }
    }


