<?php
include("./config.php");

include("./class/officer_data.php");


if (isset($_POST['deletedata'])) {
  //get id from index.php
    $id = $_POST['delete_id'];

    // query delete


   $officer_data = new OfficerData($db);

    $officer_data->setId($id);


    // determine if success or not
    if ($officer_data->delete()) {
        header('Location: ./index.php?deletefunc=success');
    } else
        die('Location: ./index.php?deletefunc=error');
} else
die("error");
