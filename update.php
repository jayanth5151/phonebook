<?php
include 'connect.php';
$sno = $_GET['updateid'];
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $contact = $_POST["contact"];
  $sql = "UPDATE `contacts` SET `name` = '$name', `contact` = '$contact' WHERE `contacts`.`sno` = $sno;";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "contact updated succesfully<br>";
  } else {
    echo die("unsuccesful" . mysqli_error($conn));
  }

}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>contacts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <form method="post">
      <div class="mb-3">
        <label for="name" class="form-label">name :</label>
        <input type="text" class="form-control" id="name" name="name">

      </div>
      <div class="mb-3">
        <label for="contact" class="form-label">contact number :</label>
        <input type="text" class="form-control" id="contact" name="contact">
      </div>

      <button type="submit" class="btn btn-dark" name="submit">update</button>
    </form>
  </div>


  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>