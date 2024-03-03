<?php

/*
 * This file is part of the Kamal/toastr package.
 * (c) Kamal Essam <kessam1@outlook.com>
 */

namespace Kamal\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Kamal\Toastr\Toastr error(string $message, string $title = '', array $options = [])
 * @method static \Kamal\Toastr\Toastr info(string $message, string $title = '', array $options = [])
 * @method static \Kamal\Toastr\Toastr success(string $message, string $title = '', array $options = [])
 * @method static \Kamal\Toastr\Toastr warning(string $message, string $title = '', array $options = [])
 * @method static \Kamal\Toastr\Toastr addNotification(string $type, string $message, string $title = '', array $options = [])
 */
class Toastr extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}
