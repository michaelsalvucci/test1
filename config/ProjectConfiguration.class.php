<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('ioEditableContentPlugin');
    $this->enablePlugins('ioMenuPlugin');
    $this->enablePlugins('npAssetsOptimizerPlugin');
    $this->enablePlugins('ioPagePlugin');
    $this->enablePlugins('ioBlogPlugin');
    $this->enablePlugins('sfDoctrineActAsTaggablePlugin');
    $this->enablePlugins('vjCommentPlugin');
/*
    $this->enablePlugins(array(
      'sfDoctrinePlugin',
      'sfDoctrineGuardPlugin',
      'ioEditableContentPlugin',
      'ioMenuPlugin',
      'npAssetsOptimizerPlugin',
      'ioPagePlugin',
      'ioBlogPlugin',
      'sfDoctrineActAsTaggablePlugin',
      'vjCommentPlugin',
    ));
*/
  }
}
