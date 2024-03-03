<?php

/*
 * This file is part of the Kamal/toastr package.
 * (c) Kamal Essam <kessam1@outlook.com>
 */

namespace Kamal\Toastr;

use Flasher\Prime\Factory\NotificationFactory;
use Flasher\Prime\Notification\Notification;

/**
 * @mixin ToastrBuilder
 */
final class ToastrFactory extends NotificationFactory
{
    /**
     * {@inheritdoc}
     */
    public function createNotificationBuilder()
    {
        return new ToastrBuilder($this->getStorageManager(), new Notification(), 'toastr');
    }
}
