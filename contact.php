<meta charset="utf-8">
<style>
   body,
   table,
   td,
   a {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
   }

   table,
   td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
   }

   img {
      -ms-interpolation-mode: bicubic;
   }

   img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
   }

   table {
      border-collapse: collapse !important;
   }

   body {
      height: 100% !important;
      margin: 0 !important;
      padding: 0 !important;
      width: 100% !important;
   }

   a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
   }

   div[style*="margin: 16px 0;"] {
      margin: 0 !important;
   }
</style>
<?php


if (isset($_POST['submit'])) {
   require 'phpmailer/PHPMailerAutoload.php';
   //$salutation = $_POST['salutation'];
   $subject = $_POST['subject'];
   $lname = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   //$title = $_POST['title'];
   $messages = $_POST['message'];
   $message = "";

   //$message = 'Title : ' . $title . "\r\n <br>";
   $message .= "My first name is : " . $lname . "\r\n <br>";
   //$message .= 'And my last name us: ' . $lname . "\r\n <br> ";
   $message .= 'This is my Email  : ' . $email . "\r\n <br>";
   // $message .= 'and my phone is : ' . $phone . "\r\n <br>";
   //$message .= 'Titre : ' . $title . "\r\n";
   //$message .= 'Number Of Dependants : ' . $number_of_dependants . "\r\n";

   // $message .= 'House Status : ' . $house_status . "\r\n";
   //$message .= 'Employment Industry : ' . $employment_industry . "\r\n";
   //$message .= 'Employer Name : ' . $employer_name . "\r\n";
   //$message .= 'Employer Work Phone : ' . $employer_work_phone . "\r\n";
   $message .= 'Here is my message : ' . $messages . "\r\n <br>";
   // reciever mail address
   $message_body = '
	<body style="background-color: #f7f5fa; margin: 0 !important; padding: 0 !important;">
	
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td bgcolor="#426899" align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="480" >
						<tr>
							<td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
								<div style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px;" border="0">Robert Farhat</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td bgcolor="#426899" align="center" style="padding: 0px 10px 0px 10px;">
					<table border="0" cellpadding="0" cellspacing="0" width="480" >
						<tr>
							<td bgcolor="#ffffff" align="left" valign="top" style="padding: 30px 30px 20px 30px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">
								<h1 style="font-size: 32px; font-weight: 400; margin: 0;">E-Mail von Robert Farhat</h1>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
					<table border="0" cellpadding="0" cellspacing="0" width="480" >
						<tr>
							<td bgcolor="#ffffff" align="left">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="2" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                      <p>' . $messages . '</p>
                    </td>
                  </tr>
									<tr>
										<th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">E-Mail</th>
										<td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">' . $email . '</td>
									</tr>
                  <tr>
										<th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">Nom</th>
										<td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">' . $lname . '</td>
									</tr>
                           
                  <tr>
										<th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:30px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">Téléphone</th>
										<td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">' . $phone . '</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" align="center">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td bgcolor="#ffffff" align="center" style="padding: 30px 30px 30px 30px; border-top:1px solid #dddddd;">
											<table border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td align="left" style="border-radius: 3px;" bgcolor="#426899">
														<a href="mailto:'.$email.'" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 11px 22px; border-radius: 2px; border: 1px solid #426899; display: inline-block;">Contactez-le</a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;"> <table border="0" cellpadding="0" cellspacing="0" width="480">
					<tr>
						<td bgcolor="#f4f4f4" align="left" style="padding: 30px 30px 30px 30px; color: #666666; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;" >
							<p style="margin: 0;">Ce e-mail provient de  "<a href="https://robert-farhat.fr" target="_blank" style="color: #111111; font-weight: 700;">robert-farhat.com<a>".</p>
						</td>
					</tr>
				</td>
			</tr>
		</table>
	
	</body>';
   $subject = $subject;




   $mail = new PHPMailer;

   $mail->isSMTP();

   $mail->Host = 'smtp.hostinger.com';

   $mail->Port = 465;

   $mail->SMTPSecure = 'tls';

   $mail->SMTPAuth = true;

   //$mail->Username = "suportteams99@gmail.com";
   $mail->Username = "orders@holistic-massages.com";
   //$mail->Password = "JE@dois@94@94";
   $mail->Password = "Test@send1";

   $mail->setFrom($email, $lname);

   $mail->addReplyTo($email, $lname);

   $mail->addAddress("abyssinie97@gmail.com", "abyssinie");
   $mail->Subject = $subject;

   $mail->msgHTML($message_body);

   if (!$mail->send()) {
              /**  $error = "Erreur : " . $mail->ErrorInfo;
         ?><script>
         alert('<?php echo $error ?>');
      </script><?php **/
               header("Location: contact/?error=false");
            } else {
               //echo '<script>alert("Thanks for your message, our team will contact you soon!!!");</script>';

               //echo ($send_email) ? 'success' : 'error';
               $mail->clearAddresses();
               $mail->addAddress("abyssinie97@gmail.com");
               $send_email = $mail->send();
               echo ($send_email) ? 'success' : 'error';
               header("Location: contact/?success=true");
            }
         }

         if (isset($_POST['contact'])) {
            require 'phpmailer/PHPMailerAutoload.php';
            $name = $_POST['nom'];
            $tel = $_POST['tel'];

            $email = $_POST['email'];
            $messages = $_POST['message'] . " <hr> E-mail :" . $email . " <br> Téléphone : " . $tel;
            $subject = 'Contacs ';

            $mail = new PHPMailer;

            $mail->isSMTP();

            $mail->Host = 'smtp.gmail.com';

            $mail->Port = 587;

            $mail->SMTPSecure = 'tls';

            $mail->SMTPAuth = true;

            $mail->Username = "portables9494@gmail.com";

            $mail->Password = "JE@dois@94@94";


            $mail->setFrom($email, $name);

            $mail->addReplyTo($email, $name);

            $mail->addAddress("hanscredit@gmail.com");

            $mail->Subject = $subject;

            $mail->msgHTML($messages);

            if (!$mail->send()) {
               $error = "Erreur : " . $mail->ErrorInfo;
               ?><script>
         alert('<?php echo $error ?>');
      </script><?php
            } else {
               echo '<script>alert("Ihre Anfrage wurde berücksichtigt! Wir werden uns in Kürze bei Ihnen melden!.!");</script>';
            }
         }
               ?>