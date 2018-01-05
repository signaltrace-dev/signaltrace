<?php
if( isset($_POST) ){

    //form validation vars
    $formok = true;
    $errors = array();

    //submission data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');

    //form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

	$response = $_POST["g-recaptcha-response"];
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LcFaz8UAAAAAAeBGtBMDIIu86GfKSToKZE6sp-j',
		'response' => $_POST["g-recaptcha-response"]
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);
	if ($captcha_success->success==false) {
		$errors[] = "Nothing against robots, but could you check the 'I'm not a robot' checkbox?";
	}

    //validate form data

    //validate name is not empty
    if(empty($name)){
        $error_fields['name'] = TRUE;
        $errors[] = "You haven't entered a name! Come on, don't be shy!";
    }

    //validate email address is not empty
    if(empty($email)){
        $errors[] = "Hey, I need an email address so I can get back to you!";
    //validate email address is valid
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_fields['email'] = TRUE;
        $errors[] = "Oops, that doesn't look like a valid email address!";
    }

    //validate message is not empty
    if(empty($message)){
        $error_fields['message'] = TRUE;
        $errors[] = "I know that all of this is super exciting, but I need some details on what kind of project you're needing help with!";
    }
    $formok = sizeof($errors) == 0;

    //send email if all is ok
    if($formok){
        $headers = "From: noreply@signaltrace.net" . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $emailbody = "<p>Hey look! Somebody got in touch with you!</p>
                      <p><strong>Name: </strong> {$name} </p>
                      <p><strong>Email Address: </strong> {$email} </p>
                      <p><strong>Message: </strong> {$message} </p>
                      <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";

        mail("jeff@signaltrace.net","New request from signaltrace.net",$emailbody,$headers);

    }

    //what we need to return back to our form
    $returndata = array(
        'posted_form_data' => array(
            'name' => $name,
            'email' => $email,
            'message' => $message
        ),
        'form_ok' => $formok,
        'errors' => $errors,
        'error_fields' => $error_fields,
    );


    //if this is not an ajax request
    //if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
        //set session variables
        session_start();
        $_SESSION['cf_returndata'] = $returndata;

        //redirect back to form
        $url = $_SERVER['HTTP_REFERER'] . '#contact';
        header('location: ' . $url);
    //}
}
