<?php

namespace PHPSTORM_META;

expectedArguments(\Kessam\Toastr\ToastrBuilder::showMethod(), 0, 'fadeIn', 'fadeOut', 'slideDown', 'show');
expectedArguments(\Kessam\Toastr\ToastrBuilder::hideMethod(), 0, 'fadeIn', 'fadeOut', 'slideDown', 'show');
expectedArguments(\Kessam\Toastr\ToastrBuilder::showEasing(), 0, 'swing', 'linear');
expectedArguments(\Kessam\Toastr\ToastrBuilder::hideEasing(), 0, 'swing', 'linear');
expectedArguments(\Kessam\Toastr\ToastrBuilder::positionClass(), 0, 'toast-top-right', 'toast-top-center', 'toast-bottom-center', 'toast-top-full-width', 'toast-bottom-full-width', 'toast-top-left', 'toast-bottom-right', 'toast-bottom-left');

$mapping = map([
    'toastr' => \Flasher\Toastr\Prime\ToastrFactory::class
]);

override(\Flasher\Prime\FlasherInterface::create(), map($mapping));
override(\Flasher\Prime\FlasherInterface::using(), map($mapping));
