<?php

/**
 * main actions.
 *
 * @package    test1
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
  public function executeAbout(sfWebRequest $request)
  {
    $this->page = $this->getRoute()->getObject();
  }

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
}
