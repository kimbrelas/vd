<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('movie/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('movie/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'movie/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['title']->renderLabel() ?></th>
        <td>
          <?php echo $form['title']->renderError() ?>
          <?php echo $form['title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['year']->renderLabel() ?></th>
        <td>
          <?php echo $form['year']->renderError() ?>
          <?php echo $form['year'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['description']->renderLabel() ?></th>
        <td>
          <?php echo $form['description']->renderError() ?>
          <?php echo $form['description'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['can_rent']->renderLabel() ?></th>
        <td>
          <?php echo $form['can_rent']->renderError() ?>
          <?php echo $form['can_rent'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['can_buy']->renderLabel() ?></th>
        <td>
          <?php echo $form['can_buy']->renderError() ?>
          <?php echo $form['can_buy'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['can_stream']->renderLabel() ?></th>
        <td>
          <?php echo $form['can_stream']->renderError() ?>
          <?php echo $form['can_stream'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['film_type']->renderLabel() ?></th>
        <td>
          <?php echo $form['film_type']->renderError() ?>
          <?php echo $form['film_type'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['mpaa']->renderLabel() ?></th>
        <td>
          <?php echo $form['mpaa']->renderError() ?>
          <?php echo $form['mpaa'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['runtime']->renderLabel() ?></th>
        <td>
          <?php echo $form['runtime']->renderError() ?>
          <?php echo $form['runtime'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['active']->renderLabel() ?></th>
        <td>
          <?php echo $form['active']->renderError() ?>
          <?php echo $form['active'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
