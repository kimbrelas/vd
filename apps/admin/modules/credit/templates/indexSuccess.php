<h1>Credits List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($credits as $credit): ?>
    <tr>
      <td><a href="<?php echo url_for('credit/edit?id='.$credit->getId()) ?>"><?php echo $credit->getId() ?></a></td>
      <td><?php echo $credit->getName() ?></td>
      <td><?php echo $credit->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('credit/new') ?>">New</a>
