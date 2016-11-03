<?php

if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$link = $_POST['link'];
$join= $_POST['join'];
$expe = $_POST['exp'];
$other = $_POST['other'];

if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}



if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
$to = "haydenbsmith@gmail.com,kinsula@gmail.com";//<== update the email address
$email_from = "contact@endeavour.ml";//<== update the email address
$email_subject = "$name Guild Application";
$email_body =
"New Guild application!\nQ1. Character Name: $name.\nQ2. Email adresss:$visitor_email.\nQ3. Why join Endeavor? $join\nQ4.What is your experience? $exp\nQ5. Other information: $other";

//Send the email!
mail($to,$email_subject,$email_body);
//done. redirect to thank-you page.
header('Location: index.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
