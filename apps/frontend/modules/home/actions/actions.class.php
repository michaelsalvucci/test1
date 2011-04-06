<?php

/**
 * home actions.
 *
 * @package    test1
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

    $this->blog = new msBlog();

    $menu = new ioMenuItem('My menu');
    $menu->addChild('Home Page', '@homepage');
#    $menu->addChild('comments', '@comments');
    $menu->addChild('Business', '@homepage');
    $menu->addChild('Life', '@homepage');
    $menu->addChild('Sports', '@homepage');
    $menu->addChild('About', '@about');
    echo $menu->render();

#    $this->forward('default', 'module');
  }
}
