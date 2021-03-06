<?php

namespace Speicher210\MonsumBundle\Event;

/**
 * Event when a subscription is changed.
 */
class SubscriptionChangedEvent extends AbstractNotificationEvent
{
    /**
     * {@inheritdoc}
     */
    public static function getNotificationType()
    {
        return 'subscription.changed';
    }
}
