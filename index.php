<!-- <?php
include 'connect.php';

?> -->

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
  <nav class="navbar bg-dark ">
    <h1 class="text-dark">                                    

    </h1>
    <h1 class="text-light">Phonebook Contacts !</h1>
    <button type="submit" class="btn btn-light my-5"><a href="create.php" class="text-dark">Add Contact</a></button>
  </nav>



  <div class="container my-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Sno.</th>
          <th scope="col">Name</th>
          <th scope="col">contact number</th>
          <th scope="col">update/delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "select * from contacts";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

          echo '<tr>
                <td>' . $row['sno'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['contact'] . '</td>
                <td>
                <button class="btn btn-dark "><a href="update.php?updateid=' . $row['sno'] . '" class="text-light">Update</a></button>  
                <button class="btn btn-dark "><a href="delete.php?deleteid=' . $row['sno'] . '"class="text-light">Delete</a></button>
                
                </td>
                </tr>';

        }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>