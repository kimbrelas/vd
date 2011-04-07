<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('group/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if(!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
      
  <?php echo $form->renderHiddenFields() ?>
  <?php echo $form->renderGlobalErrors() ?>
  
  <div>
    <?php echo $form['name']->renderLabel() ?>
    <?php echo $form['name']->renderError() ?>
    <?php echo $form['name'] ?>
  </div>
  
  <div>    
    <?php echo $form['description']->renderLabel() ?>
    <?php echo $form['description']->renderError() ?>
    <?php echo $form['description'] ?>
  </div>
      
  <input type="submit" value="Save" />
  <?php if (!$form->getObject()->isNew()): ?>
    &nbsp;<?php echo link_to('Delete', 'group/delete?id='.$form->getObject()->id, array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
  <?php endif; ?>
</form>