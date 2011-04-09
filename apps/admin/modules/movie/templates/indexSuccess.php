<h1>Movies List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Year</th>
      <th>Description</th>
      <th>Can rent</th>
      <th>Can buy</th>
      <th>Can stream</th>
      <th>Rating average</th>
      <th>Rating count</th>
      <th>Film type</th>
      <th>Mpaa</th>
      <th>Runtime</th>
      <th>Active</th>
      <th>Date added</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($movies as $movie): ?>
    <tr>
      <td><a href="<?php echo url_for('movie/edit?id='.$movie->getId()) ?>"><?php echo $movie->getId() ?></a></td>
      <td><?php echo $movie->getTitle() ?></td>
      <td><?php echo $movie->getYear() ?></td>
      <td><?php echo $movie->getDescription() ?></td>
      <td><?php echo $movie->getCanRent() ?></td>
      <td><?php echo $movie->getCanBuy() ?></td>
      <td><?php echo $movie->getCanStream() ?></td>
      <td><?php echo $movie->getRatingAverage() ?></td>
      <td><?php echo $movie->getRatingCount() ?></td>
      <td><?php echo $movie->getFilmType() ?></td>
      <td><?php echo $movie->getMpaa() ?></td>
      <td><?php echo $movie->getRuntime() ?></td>
      <td><?php echo $movie->getActive() ?></td>
      <td><?php echo $movie->getDateAdded() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('movie/new') ?>">New</a>
