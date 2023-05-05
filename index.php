<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="get">
    <div class="input-group mb-3">
      <input type="number" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"
        name="input">
      <button type="submit">Submit</button>
    </div>
  </form>
  <div>
    <?php
    include __DIR__ . '/helpers/generatePassword.php';
    ?>
  </div>
</body>

</html>