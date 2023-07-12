<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form

    $id = $_POST['EDIT_ID'];
    $doc_type = $_POST['EDIT_DOC_TYPE'];
    $doc_categ = $_POST['EDIT_DOC_CATEG'];
    $doc_title = $_POST['EDIT_DOC_TITLE'];
    $doc_desc = $_POST['EDIT_DOC_DESC'];
    $attach = $_POST['EDIT_ATTACH'];
    $created_desig = $_POST['EDIT_CREATED_BY_DESIG'];
    $created_role = $_POST['EDIT_CREATED_BY_ROLE'];
    $created_email = $_POST['EDIT_CREATED_BY_EMAIL'];
    $up_name = $_POST['EDIT_UPDATED_BY_NAME'];
    $up_des = $_POST['EDIT_UPDATED_BY_DESIG'];
    $up_role = $_POST['EDIT_UPDATED_BY_ROLE'];
    $up_email = $_POST['EDIT_UPDATED_BY_EMAIL'];
    $date_created = $_POST['EDIT_DATE_CREATED'];
    $date_up = $_POST['EDIT_DATE_UPDATED'];
    $forw_name = $_POST['EDIT_FORWARD_TO_NAME'];
    $forw_role = $_POST['EDIT_FORWARD_TO_ROLE'];
    $forw_desig = $_POST['EDIT_FORWARD_TO_DESIG'];
    $forw_email = $_POST['EDIT_FORWARD_TO_EMAIL'];
    $forw_act = $_POST['EDIT_ACTION'];
    $forw_mess = $_POST['EDIT_MESSAGE'];


    // query
  //  $sql = "UPDATE officer_record SET nama='$nama', NIM='$NIM', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', agama='$agama', IPK='$IPK' WHERE id = '$id'";
    
  $sql = "UPDATE `officer_record` SET `DOC_TYPE`=' $doc_type',`DOC_CATEG`='$doc_categ',`DOC_TITLE`='$doc_title',`DOC_DESC`='$doc_desc',`ATTACH`='$attach',`CREATED_BY_DESIG`='$created_desig',`CREATED_BY_ROLE`='$created_role',`CREATED_BY_EMAIL`='$created_email',`UPDATED_BY_NAME`='$created_email',`UPDATED_BY_DESIG`='$up_des',`UPDATED_BY_ROLE`='$up_role',`UPDATED_BY_EMAIL`='$up_email',`DATE_CREATED`='$date_created',`DATE_UPDATED`='$date_up',`FORWARD_TO_NAME`='$forw_name',`FORWARD_TO_ROLE`='$forw_role',`FORWARD_TO_DESIG`='$forw_desig',`FORWARD_TO_EMAIL`='$forw_email',`ACTION`='$forw_act',`MESSAGE`='$forw_mess' WHERE ID = '$id'";
  $query = mysqli_query($db, $sql);


    
       // determine if success or not

    if ($query)
        header('Location: ./index.php?update=success');
    else
        header('Location: ./index.php?update=error');
} else
die("error");
