<?php

namespace Mori\C2Theme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;

class C2ThemePlugin implements Plugin
{
    public function getId(): string
    {
        return 'c2-theme';
    }

    public function register(Panel $panel): void
    {
        $panel->viteTheme('plugins/c2-theme/resources/css/theme.css');

        $panel->colors([
            'gray' => [
                50 => '#f6f7f8',
                100 => '#eceef0',
                200 => '#d5d9df',
                300 => '#b3b9c3',
                400 => '#8b94a1',
                500 => '#6b7583',
                600 => '#535b68',
                700 => '#434a55',
                800 => '#2a2e35',
                900 => '#1a1d21',
                950 => '#0e1012',
            ],
            'primary' => [
                50 => '#f3faf0',
                100 => '#e4f4dc',
                200 => '#cbebb9',
                300 => '#a7dc8b',
                400 => '#82c95b',
                500 => '#62a939',
                600 => '#4b852a',
                700 => '#3b6523',
                800 => '#315020',
                900 => '#29421d',
                950 => '#13240b',
            ],
            'secondary' => Color::hex('#E5B80B'), 
            'info' => Color::hex('#7B61FF'),   
            'success' => Color::hex('#10B981'), 
            'warning' => Color::hex('#F59E0B'),
            'danger' => Color::hex('#E11D48'),  
        ]);
    }

    public function boot(Panel $panel): void {}
}