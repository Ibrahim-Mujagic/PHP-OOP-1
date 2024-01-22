<?php
  include './class/Genre.php';
  include './class/Actors.php';
  include './class/Movie.php';

  $movies = [$wonka,$enea];
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <title>Movies</title>
</head>
<body>
  <header class="text-center mb-3">
    <h1>MOVIES</h1>
  </header>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Actors</th>
          <th scope="col">Release Date</th>
          <th scope="col">Genre</th>
          <th scope="col">Age Wachers</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($movies as $movie): ?>
          <tr>
            <th><?php echo $movie->title ?></th>
            <td>
              <?php echo $movie->actors->actor_protagonist.','.$movie->actors->actor_antagonist.' ',$movie->actors?->actor_extra ?>
            </td>
            <td><?php echo $movie->release_date ?></td>
            <td>
              <?php echo $movie->genre->genre.','.$movie->genre->secondary_genre.' '.$movie->genre->tertiary_genre ?>
            </td>
            <td>
              <p class="<?php echo $movie->checkAgeWacher() ? 'alert alert-success text-success' : 'alert alert-danger text-danger' ?>">
                <?php echo $movie->age_wachers ?>
              </p>
            </td>
            <td>
              <img src="<?php echo $movie->image?>" alt="">
            </td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</body>
</html>