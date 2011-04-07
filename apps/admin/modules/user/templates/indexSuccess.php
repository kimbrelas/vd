<h1>Administration - Users</h1>

<ul>
<?php foreach ($sf_guard_users as $sf_guard_user): ?>
  <li>
    <a href="<?php echo url_for('user_edit', $sf_guard_user) ?>"><?php echo $sf_guard_user->last_name.', '.$sf_guard_user->first_name; ?></a>
  </li>
<?php endforeach; ?>
</ul>

<div>
  <a href="<?php echo url_for('user_new') ?>">New User</a>
</div>

<div class="clearfix"></div>