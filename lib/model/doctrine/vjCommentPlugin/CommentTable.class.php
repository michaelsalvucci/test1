<?php

/**
 * CommentTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CommentTable extends PluginCommentTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CommentTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Comment');
    }
}