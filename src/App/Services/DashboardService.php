<?php

namespace parzival42codes\LaravelSimpleDashboard\App\Services;

class DashboardService
{
    private array $dashboards = [];

    private string $template = 'simple-dashboard::dashboardItem';

    public function addDashboard(string $class): DashboardService
    {
        $this->dashboards[] = $class;

        return $this;
    }

    public function render(): string
    {
        $dashboardContent = '';

        foreach ($this->dashboards as $dashboardClass) {
            $dashboard = new $dashboardClass();

            $dashboardContent .= view($this->template, compact([
                'dashboard',
            ]))->render();
        }

        return $dashboardContent;
    }

    public function template(string $template): DashboardService
    {
        $this->template = $template;

        return $this;
    }
}
