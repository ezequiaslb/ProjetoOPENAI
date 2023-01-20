<?php

include("conecta.php");

// handle form submission

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $publisher = $_POST['publisher'];
  $year = $_POST['year'];

  // insert book into database
  $sql = "INSERT INTO books (title, author, publisher, release_year)
          VALUES ('$title', '$author', '$publisher', '$year')";
  if (mysqli_query($conn, $sql)) {
      echo "New book added successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// close connection
mysqli_close($conn);

?>
