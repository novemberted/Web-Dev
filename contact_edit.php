<?php
include "connection.php";
include "Contact.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
//$id = mysql_real_escape_string($id);
$name = mysql_real_escape_string($name);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

$contact = Contact::Get($id);
$contact->setValue("name",$name);
$contact->setValue("email", $email);
$contact->setValue("password", $password);
$contact->Save();

$conn->close();

//echo $contact->getValue('id');
//echo $contact->getValue('name');

header("Location: contact_list.php");