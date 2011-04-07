<h1>Administration - Groups</h1>

<ul>
<?php foreach ($sf_guard_groups as $sf_guard_group): ?>
  <li>
    <a href="<?php echo url_for('group_edit', $sf_guard_group) ?>"><?php echo $sf_guard_group->name; ?></a>
  </li>
<?php endforeach; ?>
</ul>

<div>
  <a href="<?php echo url_for('group_new') ?>">New User</a>
</div>

<div class="clearfix"></div>