
<?php
include("./config.php");

include("./class/officer_data.php");

if (isset($_POST['DOC_TYPE'])) {
   
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
    

  $officer_data = new OfficerData($db);

    $officer_data->setDoc_type($doc_type);
    $officer_data->setDoc_categ($doc_categ);
        $officer_data->setDoc_title($doc_title);
        $officer_data->setDoc_desc($doc_desc);
        $officer_data->setAttach($attach);
        $officer_data->setCreated_desig($created_desig);
        $officer_data->setCreated_role($created_role);
        $officer_data->setCreate_email($create_email);
        $officer_data->setUp_name($up_name);
        $officer_data->setUp_des($up_des);
        $officer_data->setUp_role($up_role);
        $officer_data->setUp_email($up_email);
        $officer_data->setDate_created($date_created);
        $officer_data->setDate_up($date_up);
        $officer_data->setForw_name($forw_name);
        $officer_data->setForw_role($forw_role);
        $officer_data->setForw_desig($forw_desig);
        $officer_data->setForw_email($forw_email);
        $officer_data->setForw_act($forw_act);
        $officer_data->setForw_mess($forw_mess);


      // determine if success or not

    if ($officer_data->save())
      
        header('Location: ./index.php?status=success');

    else
        header('Location: ./index.php?status=error');

    
} else 
    die("error");
