<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class ThemeOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Options | Options';

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $themeOptions = Builder::make('theme_options');

        $themeOptions
            ->addImage( 'logo', ['label' => 'Logo', 'return_format' => 'id'])
            ->addLink ('ctabutton-1', ['label' => 'CTA button 1'])
            ->addLink ('ctabutton-2', ['label' => 'CTA button 2']);

        return $themeOptions->build();
    }
}
