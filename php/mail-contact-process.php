<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';


    $errors = array(); // array to hold validation errors
    $data   = array(); // array to pass back data

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // required
    $message = $_POST['message']; // required
    $message = stripslashes(trim($_POST['message']));
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email is invalid.';
    }
    if (empty($phone)) {
        $errors['phone'] = 'Phone is required.';
    }
    if (empty($message)) {
        $errors['message'] = 'Message is required.';
    }


    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    }
    else{
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'makersitesdcx@gmail.com';                 // SMTP username
            $mail->Password = 'makersites@2019';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('tech-holds@tech-holds.com', 'TECH-HOLDS');     // Add a recipient
            $mail->addAddress('rogerio.alves@tech-holds.com', 'Rogério - TECH-HOLDS');     // Add a recipient
            $mail->addAddress('david.cabral@tech-holds.com', 'David - TECH-HOLDS');     // Add a recipient
            $mail->addAddress('luciana.viegas@tech-holds.com', 'Luciana - TECH-HOLDS');     // Add a recipient
            $mail->addAddress('rsa.techholds@gmail.com', 'TECH-HOLDS');     // Add a recipient
            $mail->addReplyTo($email, $name);
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            $email_title = "Contact from TECH-HOLDS site";

            $email_message = "CONTACT FROM SITE<br><br>";
            $email_message .= "Reply to: ".$email." <br><br>";
            $email_message .= "Phone: ".$phone." <br><br>";
            $email_message .= $message;

            $name = ""; // required
            $email = ""; // required
            $subject = ""; // required
            $message = ""; // required

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $email_title;
            $mail->Body    = $email_message;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


            //send the message, check for errors
            if (!$mail->send()) {
//                    $result = array('status'=>"error", 'message'=>"Mailer Error: ".$mail->ErrorInfo);//
//                    echo json_encode($result)
                $data['success'] = false;
                $data['message'] = "Mailer Error: ".$mail->ErrorInfo;
            } else {
//                    $result = array('status'=>"success", 'message'=>"Message sent jotinha.");
//                    echo json_encode($result);
                $data['success'] = true;
                $data['message'] = 'Congratulations. Your message has been sent successfully';
            }

        } catch (Exception $e) {
            $data['success'] = false;
            $data['message'] = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
//                var_dump(http_response_code(422));
//                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }


    echo json_encode($data);

?>
