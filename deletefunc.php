<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
  //get id from index.php
    $id = $_POST['delete_id'];

    // query delete
    $sql = "DELETE FROM officer_record WHERE ID = '$id'";
    $query = mysqli_query($db, $sql);

    // determine if success or not
    if ($query) {
        header('Location: ./index.php?deletefunc=success');
    } else
        die('Location: ./index.php?deletefunc=error');
} else
die("error");
