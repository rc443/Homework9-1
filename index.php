<?php
//set default values
$name = '';
$email = '';
$phone = '';
$message = 'Enter some data and click on the Submit button.';

//process
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');

        /*************************************************
         * validate and process the name
         ************************************************/
        if (empty($name)) {
		$message = 'You must enter a name.';
		break;
	}
	$name = strtolower($name);
	$name = ucwords($name);
	
	$i = strpos($name, ' ');
	if ($i === false) {
		$first_name = $name;
	} else {
		$first_name = substr($name, 0, $i);
	}

        /*************************************************
         * validate and process the email address
         ************************************************/
        if (empty($email)) {
		$message = 'You must enter an email address.';
		break;
	} else if (strpos($email, '@') === false) {
		$message = 'The email address must contain an @ sign.';
		break;
	} else if(strpos($email, '.') === false {
		$message = 'The email address must contain a dot character.';
		break;
	}
        /*************************************************
         * validate and process the phone number
         ************************************************/
       If (strlen($phone) < 7) {
       		$part1 = substr($phone, 0, 3);
		$part2 = substr($phone, 3);
		$phone = $part1 . '-'. $part2;
	} else {
		$part1 = substr($phone, 0, 3);
		$part2 = substr($phone, 3, 3);
		$part3 = substr($phone, 6);
		$phone = $part1 . '-' . $part2 . '-' . $part3;
	}
	
	// 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890

        /*************************************************
         * Display the validation message
         ************************************************/
        $message = "This page is under construction.\n" .
                   "Please write the code that process the data.";

        break;
}
include 'string_tester.php';
?>
