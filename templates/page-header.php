<?php use Roots\Sage\Titles; 
use Roots\Sage\Setup;?>

<?php if (! Setup\display_archive_title()) : ?>

<div class="page-header">
  <h1><?= Titles\title(); ?></h1>
</div>

<?php endif;?>