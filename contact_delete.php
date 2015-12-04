<?php
include "connection.php";
include "Contact.php";

$id = $_POST['id'];
//$id = mysql_real_escape_string($id);
$contact = Contact::Get($id);
$contact->Delete();


$conn->close();


header("Location: contact_list.php");