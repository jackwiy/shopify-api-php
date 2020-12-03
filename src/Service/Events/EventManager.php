<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Events;

use Slince\Shopify\Resource\Events\Event;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class EventManager extends GeneralCurdManager implements EventManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Event::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'event';
    }
}