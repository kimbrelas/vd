<?php if($sf_user->isAuthenticated()): ?>
  <div>
    <a href="<?php echo url_for('sf_guard_user') ?>">Edit Users</a>
    <a href="<?php echo url_for('sf_guard_permission') ?>">Edit Permissions</a>
    <a href="<?php echo url_for('sf_guard_group') ?>">Edit Groups</a>
  </div>
<?php endif ?>