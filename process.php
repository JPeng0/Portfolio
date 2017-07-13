<?php
// process.php
$data = false;
// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array

if (empty($_POST['Message']))
	$errors['message'] = 'Message is required.';

        
            // return a response ===========================================================
            
            // if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {
	$data = false;
}
                // if there are no errors process our form, then return a message
                else {
                $name = $_POST['name'];
  				$email = $_POST['email'];
  				$message = $_POST['message'];
  				$subject = 'Sent by ' . $name. ' from web form';
  				$header = 'From:' . $email;	
                mail('pengx205@umn.edu', $subject, $message, $header);
                // show a message of success and provide a true success variable
                $data = true;
                }
            
            
            // return all our data to an AJAX call
            echo json_encode($data);
            
?>