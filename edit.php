<?php
include("./config.php");
include("./class/officer_data.php");

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


    $officer_data = new OfficerData($db);
    $officer_data->setId($id);
    $officer_data->setDoc_type($doc_type);
    $officer_data->setDoc_categ($doc_categ);
    $officer_data->setDoc_title($doc_title);
    $officer_data->setDoc_desc($doc_desc);
    $officer_data->setAttach($attach);
    $officer_data->setCreated_desig($created_desig);
    $officer_data->setCreated_role($created_role);
    $officer_data->setCreate_email($created_email);
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

    if ($officer_data->update())
        header('Location: ./index.php?update=success');
    else
        header('Location: ./index.php?update=error');
} else
    die("error");
