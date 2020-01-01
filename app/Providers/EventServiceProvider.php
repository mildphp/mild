<?php

namespace App\Providers;

use Mild\Support\ServiceProvider;
use Mild\Contract\Event\EventDispatcherInterface;

class EventServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $listeners = [
        //
    ];

    /**
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * @return void
     */
    public function boot()
    {
        $dispatcher = $this->application->get(EventDispatcherInterface::class);

        foreach ($this->listeners as $event => $listeners) {
            $dispatcher->listen($event, $listeners);
        }
    }
}