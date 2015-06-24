<?php

if (isset($_POST['submit'])) {
    $to = "naren@enterprisetouch.com"; // this is your Email address
    $from = "enquiry@enterprisetouch.com"; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobilenumber'];
    $subject = $_POST['subject'];
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "From:" . $from;
    $message = '<html><body>NAME </br><b>' . $name . '</b>EMAIL </br><b> ' . $email . '</b>Mobile Number </br><b> ' . $mobno . '</b>Message </br><b> ' . $_POST['message'] . '</b></body></html>';
    if (mail($to, $subject, $message, $headers)) {
        echo "<div id='alert' class='alert alert-success'>Your message has been successfully sent. We will contact you very soon!</div>";
        echo "<script>document.location.href='#alert'</script>";
    } else {
        echo "<div id='alert' class='alert alert-danger'>Mail Not Sent. Please try again later.</div>";
    }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>