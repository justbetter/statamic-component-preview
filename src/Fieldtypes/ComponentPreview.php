<?php

namespace JustBetter\StatamicComponentPreview\Fieldtypes;

use Illuminate\Support\Facades\File;
use Statamic\Fields\Fieldtype;

class ComponentPreview extends Fieldtype
{
    protected $categories = ['special'];
    protected $selectableInForms = false;
    protected $defaultValue = '';

    protected function configFieldItems(): array
    {
        $imageFolder = config('statamic-component-preview.image_folder');
        $previewsPath = public_path($imageFolder);

        $images = File::files($previewsPath);
        $images = collect($images)->mapWithKeys(fn($image) => [$imageFolder . '/' . $image->getRelativePathname() => $image->getRelativePathname()]);

        return [
            [
                'display' => __('Preview image'),
                'fields' => [
                    'image' => [
                        'display' => __('Image'),
                        'instructions' => '',
                        'type' => 'select',
                        'default' => '',
                        'options' => $images->toArray() ?? [],
                    ],
                ],
            ],
        ];
    }
}
