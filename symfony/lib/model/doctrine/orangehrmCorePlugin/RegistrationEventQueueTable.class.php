<?php

/**
 * RegistrationEventQueueTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class RegistrationEventQueueTable extends PluginRegistrationEventQueueTable
{
    /**
     * Returns an instance of this class.
     *
     * @return RegistrationEventQueueTable The table instance
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('RegistrationEventQueue');
    }
}