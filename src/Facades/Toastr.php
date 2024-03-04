<?php

/*
 * This file is part of the Kamal/toastr package.
 * (c) Kamal Essam <kessam1@outlook.com>
 */

namespace Kessam\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Kessam\Toastr\Toastr error(string $message, string $title = '', array $options = [])
 * @method static \Kessam\Toastr\Toastr info(string $message, string $title = '', array $options = [])
 * @method static \Kessam\Toastr\Toastr success(string $message, string $title = '', array $options = [])
 * @method static \Kessam\Toastr\Toastr warning(string $message, string $title = '', array $options = [])
 * @method static \Kessam\Toastr\Toastr addNotification(string $type, string $message, string $title = '', array $options = [])
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
