<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> x-data="appState">

    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <h1>a new wp site</h1>
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
