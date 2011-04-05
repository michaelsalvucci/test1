<?php

/**
 * ioBasicPage actions.
 *
 * @package    test1
 * @subpackage ioBasicPage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ioBasicPageActions extends sfActions
{
  $this->page = $this->getRoute()->getObject()

  // load the ioPagePlugin functionality
  $this->getContentLoader($this->page, $this)->load();
}
