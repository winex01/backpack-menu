<?php

namespace Winex01\BackpackMenu;

use Illuminate\Support\ServiceProvider;

class BackpackMenuServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'winex01';
    protected $packageName = 'backpack-menu';
    protected $commands = [];
}
