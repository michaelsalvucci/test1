<?php


# this line may not be needed


 $blog = $sf_data->getRaw('blog') ?>


Hello World

<?php echo editable_content_tag('h1', $blog, 'title') ?>

