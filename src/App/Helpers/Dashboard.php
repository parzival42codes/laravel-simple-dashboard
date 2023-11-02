<?php

use parzival42codes\LaravelSimpleDashboard\App\Services\DashboardService;

if (! function_exists('dashboard')) {
    function dashboard(): DashboardService
    {
        return new DashboardService();
    }
}
