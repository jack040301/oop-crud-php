<?php



class OfficerData {
  
    public $db;
    private $id;
    private $doc_type ;
    private $doc_categ ;
    private $doc_title ;
    private $doc_desc ;
    private $attach ;
    private $created_desig ;
    private $created_role;
    private $create_email;
    private $up_name;
    private $up_des ;
    private $up_role ;
    private $up_email ;
    private  $date_created;
    private $date_up;
    private $forw_name ;
    private $forw_role;
    private $forw_desig ;
    private $forw_email ;
    private $forw_act ;
    private  $forw_mess;

    public function __construct($db) {
        $this->db = $db;
    }


    // Constructor
/*     public function __construct($db,$doc_type, $doc_categ, $doc_title, $doc_desc, $attach, $created_desig, $created_role, $create_email, $up_name, $up_des, $up_role, $up_email, $date_created, $date_up, $forw_name, $forw_role, $forw_desig, $forw_email, $forw_act, $forw_mess) {
       $this->db = $db;
        $this->doc_type = $doc_type;
        $this->doc_categ = $doc_categ;
        $this->doc_title = $doc_title;
        $this->doc_desc = $doc_desc;
        $this->attach = $attach;
        $this->created_desig = $created_desig;
        $this->created_role = $created_role;
        $this->create_email = $create_email;
        $this->up_name = $up_name;
        $this->up_des = $up_des;
        $this->up_role = $up_role;
        $this->up_email = $up_email;
        $this->date_created = $date_created;
        $this->date_up = $date_up;
        $this->forw_name = $forw_name;
        $this->forw_role = $forw_role;
        $this->forw_desig = $forw_desig;
        $this->forw_email = $forw_email;
        $this->forw_act = $forw_act;
        $this->forw_mess = $forw_mess;

    } */

    // Getters and setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getDoc_type()
    {
        return $this->doc_type;
    }

    public function setDoc_type($doc_type)
    {
        $this->doc_type = $doc_type;
    }

    public function getDoc_categ()
    {
        return $this->doc_categ;
    }

    public function setDoc_categ($doc_categ)
    {
        $this->doc_categ = $doc_categ;
    }

    public function getDoc_title()
    {
        return $this->doc_title;
    }

    public function setDoc_title($doc_title)
    {
        $this->doc_title = $doc_title;
    }

    public function getDoc_desc()
    {
        return $this->doc_desc;
    }

    public function setDoc_desc($doc_desc)
    {
        $this->doc_desc = $doc_desc;
    }

    public function getAttach()
    {
        return $this->attach;
    }

    public function setAttach($attach)
    {
        $this->attach = $attach;
    }

    public function getCreated_desig()
    {
        return $this->created_desig;
    }

    public function setCreated_desig($created_desig)
    {
        $this->created_desig = $created_desig;
    }

    public function getCreated_role()
    {
        return $this->created_role;
    }

    public function setCreated_role($created_role)
    {
        $this->created_role = $created_role;
    }

    public function getCreate_email()
    {
        return $this->create_email;
    }

    public function setCreate_email($create_email)
    {
        $this->create_email = $create_email;
    }

    public function getUp_name()
    {
        return $this->up_name;
    }

    public function setUp_name($up_name)
    {
        $this->up_name = $up_name;
    }

    public function getUp_des()
    {
        return $this->up_des;
    }

    public function setUp_des($up_des)
    {
        $this->up_des = $up_des;
    }

    public function getUp_role()
    {
        return $this->up_role;
    }

    public function setUp_role($up_role)
    {
        $this->up_role = $up_role;
    }

    public function getUp_email()
    {
        return $this->up_email;
    }

    public function setUp_email($up_email)
    {
        $this->up_email = $up_email;
    }

    public function getDate_created()
    {
        return $this->date_created;
    }

    public function setDate_created($date_created)
    {
        $this->date_created = $date_created;
    }


    public function getDate_up()
    {
        return $this->date_up;
    }

    public function setDate_up($date_up)
    {
        $this->date_up = $date_up;
    }

    public function getForw_name()
    {
        return $this->forw_name;
    }

    public function setForw_name($forw_name)
    {
        $this->forw_name = $forw_name;
    }

    public function getForw_role()
    {
        return $this->forw_role;
    }

    public function setForw_role($forw_role)
    {
        $this->forw_role = $forw_role;
    }

    public function getForw_desig()
    {
        return $this->forw_desig;
    }

    public function setForw_desig($forw_desig)
    {
        $this->forw_desig = $forw_desig;
    }


    public function getForw_email()
    {
        return $this->forw_email;
    }


    public function setForw_email($forw_email)
    {
        $this->forw_email = $forw_email;
    }


    public function getForw_act()
    {
        return $this->forw_act;
    }


    public function setForw_act($forw_act)
    {
        $this->forw_act = $forw_act;
    }

    public function getForw_mess()
    {
        return $this->forw_mess;
    }

    public function setForw_mess($forw_mess)
    {
        $this->forw_mess = $forw_mess;
    }

    public function delete() {
        $stmt = $this->db->prepare("DELETE FROM officer_record WHERE ID = ?");
        $stmt->bind_param("i", $this->id);

        if ($stmt->execute()) {
            return true; // Success
        } else {
            return false; // Failure
        }
    }


 

    public function update() {

            $stmt = $this->db->prepare("UPDATE officer_record SET DOC_TYPE = ?, DOC_CATEG = ?, DOC_TITLE = ?, DOC_DESC = ?, ATTACH = ?, CREATED_BY_DESIG = ?, CREATED_BY_ROLE = ?, CREATED_BY_EMAIL = ?, UPDATED_BY_NAME = ?, UPDATED_BY_DESIG = ?, UPDATED_BY_ROLE = ?, UPDATED_BY_EMAIL = ?, DATE_CREATED = ?, DATE_UPDATED = ?, FORWARD_TO_NAME = ?, FORWARD_TO_ROLE = ?, FORWARD_TO_DESIG = ?, FORWARD_TO_EMAIL = ?, ACTION = ?,MESSAGE = ? WHERE ID = ?");
            $stmt->bind_param("ssssssssssssssssssssi",$this->doc_type, $this->doc_categ,$this->doc_title, $this->doc_desc, $this->attach, $this->created_desig, $this->created_role, $this->create_email, $this->up_name, $this->up_des, $this->up_role, $this->up_email, $this->date_created, $this->date_up, $this->forw_name, $this->forw_role, $this->forw_desig, $this->forw_email, $this->forw_act, $this->forw_mess,$this->id);
     

            if ($stmt->execute()) {
              
                return true;
            } else {
                // Failure
                return false;
            }




    }

   /*  public function read() {

        $result = $this->db->query("SELECT * FROM officer_record");
        $officer_data = [];

        while ($row = $result->fetch_assoc()) {
            $officer_data[] = $row;
        }

        return $officer_data;



    }
 */

    public function save() {

        try {

            $stmt = $this->db->prepare("INSERT INTO officer_record(DOC_TYPE, DOC_CATEG, DOC_TITLE, DOC_DESC, ATTACH, CREATED_BY_DESIG, CREATED_BY_ROLE, CREATED_BY_EMAIL, UPDATED_BY_NAME, UPDATED_BY_DESIG, UPDATED_BY_ROLE, UPDATED_BY_EMAIL, DATE_CREATED, DATE_UPDATED, FORWARD_TO_NAME, FORWARD_TO_ROLE, FORWARD_TO_DESIG, FORWARD_TO_EMAIL, ACTION,MESSAGE) VALUES  (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssssssssssssssss",$this->doc_type, $this->doc_categ,$this->doc_title, $this->doc_desc, $this->attach, $this->created_desig, $this->created_role, $this->create_email, $this->up_name, $this->up_des, $this->up_role, $this->up_email, $this->date_created, $this->date_up, $this->forw_name, $this->forw_role, $this->forw_desig, $this->forw_email, $this->forw_act, $this->forw_mess);
     
            

            if ($stmt->execute()) {
              
                return true;
            } else {
                // Failure
                return false;
            }


        } catch (Exception $e) {
            // Handle the error or throw an exception
            die("Save failed: " . $e->getMessage());
        }
    }
}







?>