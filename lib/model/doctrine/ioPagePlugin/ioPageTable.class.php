<?php

/**
 * ioPageTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ioPageTable extends PluginioPageTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ioPageTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ioPage');
    }
}