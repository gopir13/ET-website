<?php

if (isset($_POST['submit'])) {
    $to = "jasmine.glory@truetechsolutions.in"; // this is your Email address
    $from = "enquiry@enterprisetouch.com"; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobilenumber'];
    $subject = $_POST['subject'];
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "From:" . $from;
    $message = '<html><body>Name :<b>' . $name . '</b><br/>Email : <b> ' . $email . '</b><br/>Mobile Number :<b> ' . $mobno . '</b><br/>Message :<b> ' . $_POST['message'] . '</b></br></body></html>';
    mail($to, $subject, $message, $headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>