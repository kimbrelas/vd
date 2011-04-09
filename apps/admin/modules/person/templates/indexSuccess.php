<h1>Persons List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>First name</th>
      <th>Last name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($persons as $person): ?>
    <tr>
      <td><a href="<?php echo url_for('person/edit?id='.$person->getId()) ?>"><?php echo $person->getId() ?></a></td>
      <td><?php echo $person->getFirstName() ?></td>
      <td><?php echo $person->getLastName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('person/new') ?>">New</a>
