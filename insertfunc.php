
<?php
include("./config.php");

if (isset($_POST['submitadd'])) {
   
    $doc_type = $_POST['DOC_TYPE'];
    $doc_categ = $_POST['DOC_CATEG'];
    $doc_title = $_POST['DOC_TITLE'];
    $doc_desc = $_POST['DOC_DESC'];
    $attach = $_POST['ATTACH'];
    $created_desig = $_POST['CREATED_BY_DESIG'];
    $created_role = $_POST['CREATED_BY_ROLE'];
    $create_email = $_POST['CREATED_BY_EMAIL'];
    $up_name = $_POST['UPDATED_BY_NAME'];
    $up_des = $_POST['UPDATED_BY_DESIG'];
    $up_role = $_POST['UPDATED_BY_ROLE'];
    $up_email = $_POST['UPDATED_BY_EMAIL'];
    $date_created = $_POST['DATE_CREATED'];
    $date_up = $_POST['DATE_UPDATED'];
    $forw_name = $_POST['FORWARD_TO_NAME'];
    $forw_role = $_POST['FORWARD_TO_ROLE'];
    $forw_desig = $_POST['FORWARD_TO_DESIG'];
    $forw_email = $_POST['FORWARD_TO_EMAIL'];
    $forw_act = $_POST['ACTION'];
     $forw_mess = $_POST['POST_MESSAGE'];
     
    // query in inserting
  

  $query = mysqli_query($db,"INSERT INTO officer_record(DOC_TYPE, DOC_CATEG, DOC_TITLE, DOC_DESC, ATTACH, CREATED_BY_DESIG, CREATED_BY_ROLE, CREATED_BY_EMAIL, UPDATED_BY_NAME, UPDATED_BY_DESIG, UPDATED_BY_ROLE, UPDATED_BY_EMAIL, DATE_CREATED, DATE_UPDATED, FORWARD_TO_NAME, FORWARD_TO_ROLE, FORWARD_TO_DESIG, FORWARD_TO_EMAIL, ACTION,MESSAGE) VALUES  ('$doc_type','$doc_categ','$doc_title','$doc_desc','$attach','$created_desig','$created_role','$create_email','$up_name','$up_des','$up_role','$up_email','$date_created','$date_up','$forw_name','$forw_role','$forw_desig','$forw_email','$forw_act','$forw_mess')");






      // determine if success or not

    if ($query)
        header('Location: ./index.php?status=success');
    else
        header('Location: ./index.php?status=error');
} else
    die("error");
