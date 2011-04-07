<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('user/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if(!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
      
  <?php echo $form->renderHiddenFields() ?>
  <?php echo $form->renderGlobalErrors() ?>
  
  <div>
    <?php echo $form['first_name']->renderLabel() ?>
    <?php echo $form['first_name']->renderError() ?>
    <?php echo $form['first_name'] ?>
  </div>
  
  <div>    
    <?php echo $form['last_name']->renderLabel() ?>
    <?php echo $form['last_name']->renderError() ?>
    <?php echo $form['last_name'] ?>
  </div>
  
  <div>
    <?php echo $form['username']->renderLabel() ?>
    <?php echo $form['username']->renderError() ?>
    <?php echo $form['username'] ?>
  </div>
  
  <div>
    <?php echo $form['password']->renderLabel() ?>
    <?php echo $form['password']->renderError() ?>
    <?php echo $form['password'] ?>
  </div>
  
  <div>
    <?php echo $form['is_active']->renderLabel() ?>
    <?php echo $form['is_active']->renderError() ?>
    <?php echo $form['is_active'] ?>
  </div>
  
  <div>
    <?php echo $form['groups_list']->renderLabel() ?>
    <?php echo $form['groups_list']->renderError() ?>
    <?php echo $form['groups_list'] ?>
  </div>
  
  <div>
    <?php echo $form['permissions_list']->renderLabel() ?>
    <?php echo $form['permissions_list']->renderError() ?>
    <?php echo $form['permissions_list'] ?>
  </div>
      
  <input type="submit" value="Save" />
  <?php if (!$form->getObject()->isNew()): ?>
    &nbsp;<?php echo link_to('Delete', 'user/delete?id='.$form->getObject()->id, array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
  <?php endif; ?>
</form>