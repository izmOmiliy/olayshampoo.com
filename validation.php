<?php
// Initialize variables to null.
$name ="";		//Sender Name
$email =""; 	//Sender's email ID
$purpose ="";	//Subject of mail
$message ="";	//Sender's Message 

$nameError ="";			
$emailError ="";
$purposeError ="";
$messageError ="";
$successMessage ="";
$msg = "";
$msg1 = "";
//On submitting form below function will execute

if(isset($_POST['submit']))
  {
    $header = "header 1 1 5";
  // checking null values in message
    if (empty($_POST["name"])){
        $nameError = "Name is required";
      } 
   else {
       $name = test_input($_POST["name"]);
       // check name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameError = "Only letters and white space allowed"; 
         }
     }
 // checking null values in message  
   if (empty($_POST["email"])) {
       $emailError = "Email is required";
      } 
   else {
      $email = test_input($_POST["email"]);
      }
 // checking null values in message    
   if (empty($_POST["purpose"])) {
      $purposeError = "Purpose is required";
     }
   else { 
	  $purpose = test_input($_POST["purpose"]);  
	 } 
// checking null values in message
   if (empty($_POST["message"])) {
      $messageError = "Message is required";
     } 
   else { 
	  $message = test_input($_POST["message"]);  
	 }
   } 
  // checking null values in all fields  
if( !($name=='') && !($email=='') && !($purpose=='') &&!($message=='') )
  {// checking valid email
    if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      
		$header= $name."<". $email .">";
   
		$msg = "Thank you $name for contacting  us. We will reply you soon.";

$msg1 = " $name Contacted Us.

 Here are some information about $name.

 Name: $name
 E-mail: $email
   Purpose: $purpose
   Message: $message ";
    }
  }

/* Send the message using mail() function */
  /*if(mail($email, $header, $msg ) && mail("receiver_mail_id@xyz.com", $header, $msg1 ))
    {
	$successMessage = "Message sent successfully.......";
    }
  }
else { $emailError = "Invalid Email"; }

 }*/

// function for filtering input values
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>