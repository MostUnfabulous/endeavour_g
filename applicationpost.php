<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

if(empty($name)||empty($visitor_email))
{
    echo "alert("I am an alert box!")";
    exit;
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$link = $_POST['link'];
$link = $_POST['join'];
$link = $_POST['exp'];
$link = $_POST['other'];

//Validate first



if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
$to = "haydenbsmith@gmail.com";//<== update the email address
$email_from = 'contact@endeavour.ml';//<== update the email address
$email_subject = "$name Guild Application";
$email_body = "New Guild application! .\n".
							"Applicant Name: $name .\n".
							"Applicant Email: $visitor_email .\n".
							"Applicant Armory Link: $link .\n".
							"Q1. Why does the applicant want to join?: $join.\n".
							"Q2. What experiece does the applicant have? $experience.\n".
							"Q3. Other information about applicant: $other.\n".
//Send the email!
mail($to,$email_subject,$email_body);
//done. redirect to thank-you page.
header('Location: roster.html');


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
