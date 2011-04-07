<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php if($sf_user->isAuthenticated()): ?>
      
      <div id="topBar">
        <h1>Administration Panel</h1>
      </div>
      
      <?php include_partial('global/nav') ?>
      
      <div class = "admin_body">
    <?php endif ?>
    
    <?php echo $sf_content ?>
    
    <?php if($sf_user->isAuthenticated()): ?>
      </div>
      <div class = "footer">
        <p>All information provided in this administration panel is private</p>
      </div>
    <?php endif ?>
  </body>
</html>
