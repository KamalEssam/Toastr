<?php

namespace PHPSTORM_META;

expectedArguments(\Kamal\Toastr\ToastrBuilder::showMethod(), 0, 'fadeIn', 'fadeOut', 'slideDown', 'show');
expectedArguments(\Kamal\Toastr\ToastrBuilder::hideMethod(), 0, 'fadeIn', 'fadeOut', 'slideDown', 'show');
expectedArguments(\Kamal\Toastr\ToastrBuilder::showEasing(), 0, 'swing', 'linear');
expectedArguments(\Kamal\Toastr\ToastrBuilder::hideEasing(), 0, 'swing', 'linear');
expectedArguments(\Kamal\Toastr\ToastrBuilder::positionClass(), 0, 'toast-top-right', 'toast-top-center', 'toast-bottom-center', 'toast-top-full-width', 'toast-bottom-full-width', 'toast-top-left', 'toast-bottom-right', 'toast-bottom-left');

$mapping = map([
    'toastr' => \Flasher\Toastr\Prime\ToastrFactory::class
]);

override(\Flasher\Prime\FlasherInterface::create(), map($mapping));
override(\Flasher\Prime\FlasherInterface::using(), map($mapping));
