<h1>Administration - Permissions</h1>

<ul>
<?php foreach ($sf_guard_permissions as $sf_guard_permission): ?>
  <li>
    <a href="<?php echo url_for('permission_edit', $sf_guard_permission) ?>"><?php echo $sf_guard_permission->name; ?></a>
  </li>
<?php endforeach; ?>
</ul>

<div>
  <a href="<?php echo url_for('permission_new') ?>">New User</a>
</div>

<div class="clearfix"></div>