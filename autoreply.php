<?php

/* Prepare autoresponder subject */
$respond_subject = "Thank you for your inquiry!";

//Change from address
$headers = 'From: dtermine@iogproducts.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

/* Prepare autoresponder message */
$respond_message = "

We will be in touch with you shortly.

Regards,
Darryl L. Termine
VP Sales
www.impactograph.com
";
/* Send the message using mail() function */
mail($Email, $respond_subject, $respond_message, $headers);

?>
