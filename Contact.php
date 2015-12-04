<?php
//include "connection.php";

$connection = mysql_connect('localhost', 'root', ''); 
mysql_select_db('final_project');

class Contact 
{
    private $id;

    private $name;
	
    private $email;

    private $password;

    public function __construct(){
        $this->name = NULL;
        $this->email = NULL;
        $this->password = NULL;
    }


public function setValue($value1, $value2) {
    switch($value1){
        case 'name':
            $this->name = $value2;
            break;

        case 'email':
            $this->email = $value2;
            break;

        case 'password':
            $this->password = $value2;
            break;
    }
    /*
    if($value1 == 'name'){
        $this->name = $value2;
    }
    if($value1 == 'email'){
        $this->email = $value2;
    }
    if($value1 == 'password'){
        $this->password = $value2;
    }
    */
}

public function getValue($value) {
    switch($value){
        case 'id':
            return $this->id;
            break;

        case 'name':
            return $this->name;
            break;

        case 'email':
            return $this->email;
            break;

        case 'password':
            return $this->password;
            break;
    }
    /*
    if($value == 'id'){
       return $this->id;
    }
     if($value == 'name'){
       return $this->name;
    }
    if($value == 'email'){
       return $this->email;
    }
    if($value == 'password'){
       return $this->password;
    }
    */
}

public Static function Get($value){
    $query = "SELECT `id`, `name`, `email`, `password` FROM `contacts` WHERE `id` = '$value'"; 
    $result = mysql_query($query);
     
    $contact = new Contact();

    while($row = mysql_fetch_array($result)){
    $contact->id = $row['id'];
    $contact->name = $row['name'];
    $contact->email = $row['email'];  
    $contact->password = $row['password'];
    }

    return $contact;
}

public function Save(){
    //$query = "SELECT `id` FROM `contacts` WHERE `id` = '$this->id'"; 
    //$result = mysql_query($query);
    if ($this->id != NULL){
        echo 'hello';
        $query = "UPDATE `contacts` SET `name` = '$this->name', `email` = '$this->email', `password` = '$this->password' WHERE `id` = '$this->id'";
        $result = mysql_query($query);
     }
    else{
        $query = "INSERT INTO contacts(name, email, password) VALUES('$this->name', '$this->email', '$this->password')";
         $result = mysql_query($query);
    }
}

public function Delete(){
    $query = "DELETE FROM `contacts` WHERE `id` = '$this->id'"; 
    $result = mysql_query($query);
}

}


/*
$contact = new Contact();
$contact->setValue("name","Brad");
$contact->setValue("email", "samfengyuwang@gmail.com");
$contact->setValue("password", "WS1258080bgsn");
$contact->Save();
echo $contact->getValue('name');

$contact1 = Contact::Get(6);
//$contact1->setValue('name', "Jason");
$contact1->Delete();
//echo $contact1->getValue('name');
*/
