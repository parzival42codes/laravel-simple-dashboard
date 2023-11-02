<?php

namespace parzival42codes\LaravelSimpleDashboard\App\Dashboard;

abstract class Dashboard
{
    public function style(): string
    {
        return '';
    }

    abstract public function ident(): string;

    abstract public function title(): string;

    abstract public function content(): string;
}
