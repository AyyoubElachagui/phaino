<?php
        $email = $send = null;
        if(!empty($_POST["email"])) $email = $_POST['email'];
        require 'php-mailer-master/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        if($email != null){
                        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'test.phaino@gmail.com';                 // SMTP username
                        $mail->Password = '1234567890AZE';                           // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, ssl also accepted
                        $mail->Port = 587;                                    // TCP port to connect to
            
                        $mail->setFrom($email, 'Attestation Covid Permanente');
                        $mail->addAddress($email);     
                        $mail->isHTML(true);                                  // Set email format to HTML
            
                        $mail->Subject = "subject";
                        $mail->Body    = 'Voila lien pour telecharger votre attestation :  localhost'.$_POST["link"];
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                            if(!$mail->send()) {
                                $send ='Message could not be sent <a href="../index.php">Retour</a>';
                            } else {
                                $send ='bad';
                                header( "Location: ../index.php" );
                            }
                            
        }echo $send;
        ?>