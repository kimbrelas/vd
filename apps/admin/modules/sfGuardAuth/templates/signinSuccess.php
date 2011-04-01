<?php use_helper('I18N') ?>

<div class="clearfix"></div>

<div class="adminloginwrapper">
  <div class="adminloginbox">
    <div style="height:85px; text-align:center;">
      <img src="/images/logo_header.png" />
    </div>

		<form class="adminloginform" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
      <?php echo $form->renderHiddenFields() ?>
      <?php echo $form->renderGlobalErrors() ?>
      
      <label>email</label>
      <?php echo $form['username']->renderError() ?>
      <?php echo $form['username']->render() ?>
      
      <div class = "clearfix"></div>
      
      <label>password</label>
      <?php echo $form['password']->renderError() ?>
      <?php echo $form['password']->render() ?>
      
      <input type="submit" value="<?php echo __('Log In') ?>" />
    </form>
    
		<div class = "clearfix"></div>
	</div>
</div>