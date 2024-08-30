<?php

namespace JustBetter\StatamicComponentPreview;

use Statamic\Providers\AddonServiceProvider;
use JustBetter\StatamicComponentPreview\Fieldtypes\ComponentPreview;

class ServiceProvider extends AddonServiceProvider
{
    protected $vite = [
        'input' => [
            'resources/js/component-preview.js',
            'resources/css/component-preview.css'
        ],
        'publicDirectory' => 'resources/dist',
    ];

    public function bootAddon()
    {
        $this
            ->bootConfig()
            ->bootCustomFieldTypes();
    }

    public function bootConfig(): self
    {
        $this->mergeConfigFrom(__DIR__.'/../config/statamic/component-preview.php', 'statamic-component-preview');

        return $this;
    }

    public function bootCustomFieldTypes(): self
    {
        ComponentPreview::register();

        return $this;
    }
}
