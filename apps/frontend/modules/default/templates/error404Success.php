<?php
//  $sf_response->setTitle(kimConfig::getPageTitle('error404'), false);
//  $sf_response->addMeta('description', kimConfig::getPageDescription('error404'));
?>
<?php // $breadcrumbs->setRoot('Error 404 - Page not found', url_for('homepage')) ?>

<div id="content">
  <h1 class="border-bottom">Error 404 - Page not found</h1>
  
  <h3 class="italic">We're sorry, but the content you requested can not be found.</h3>
  
  <p>
    You may have followed an old link or typed in the address incorrectly.
  </p>
  
  <p>
    <a href="<?php echo url_for('homepage') ?>">Return to the Homepage</a>
  </p>
</div>
