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

    public function Contact(){
        $this->name = NULL;
        $this->email = NULL;
        $this->password = NULL;
    }


public function setValue($key1, $key2) {
    if($key1 == 'name'){
        $this->name = $key2;
    }
    if($key1 == 'email'){
        $this->email = $key2;
    }
    if($key1 == 'password'){
        $this->password = $key2;
    }
}

public function getValue($key) {
    if($key == 'id'){
       return $this->id;
    }
     if($key == 'name'){
       return $this->name;
    }
    if($key == 'email'){
       return $this->email;
    }
    if($key == 'password'){
       return $this->password;
    }
}

public function Get($key){
    $query = "SELECT `id`, `name`, `email`, `password` FROM `contacts` WHERE `id` = '$key'"; 
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
    $query = "SELECT `id` FROM `contacts` WHERE `id` = '$this->id'"; 
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        if ($row['id'] == $this->id){
            $query = "UPDATE `contacts` SET `name` = $this->name, `email` = $this->email, `password` = $this->password";
            $result = mysql_query($query);
        }
        else{
            $query = "INSERT INTO contacts(name, email, password) VALUES('$this->name', '$this->email', '$this->password')";
            $result = mysql_query($query);
        }
    }

}

}

/*
$contact = new Contact();
$contact->setValue("name","Ted");
$contact->setValue("email", "samfengyuwang@gmail.com");
$contact->setValue("password", "WS1258080bgsn");
$contact->Save();

echo $contact->getValue('name');
$contact1 = Contact::Get(1);
echo $contact1->getValue('name');
*/
