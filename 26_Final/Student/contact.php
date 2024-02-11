<?php
define("TITLE", "Contact Us | Frankline's Fine Dining");
include('includes/header.php'); ?>

<div id="contact">
    <hr>
    <h1>Get in touch with us</h1>

    <?php
    //Check for Header Injections
    function has_header_injection($str)
    {
        return preg_match("/[\r\n]/", $str);
    }

    if (isset($_POST['contact_submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg = $_POST['message'];

        //Check if $name or $email has header injection
        if (has_header_injection($name) || has_header_injection($email)) {
            die(); //If true kill the script
        }

        if (!$name || !$email || !$msg) {
            echo '<h4 class="error">All fields required</h4><a href="contact.php" class="button block">Go back and try again</a>';
            exit;
        }

        //Add recipient email to a variable
        $to = "mogayainnocent@gmail.com";

        //create a subject
        $subject = "$name sent you a message via your contact form";

        //construct the message
        $message = "Name: $name\r\n";
        $message .= "Email: $email\r\n";
        $message .= "Message: \r\n$msg";

        //Subscribe checked
        if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {
            //Add a new line to the message
            $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
        }

        $message = wordwrap($message, 72);

        //Set the mail headers into a variable
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$email>\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        //Send the email
        mail($to, $subject, $message, $headers);

    ?>
        <!-- Show success message after email has been sent -->
        <h5>Thanks for contacting Frankline's!</h5>
        <p>Please allow 24 hours for a response</p>
        <p><a href="/final" class="button block">&laquo; Go to Home Page</a></p>

    <?php } else { ?>

        <form action="" method="post" id="contact-form">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name">

            <label for="email">Your email</label>
            <input type="text" id="email" name="email">

            <label for="message">and your message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>

            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
            <label for="subscribe">Subscribe to newsletter</label>

            <input type="submit" class="button next" name="contact_submit" value="Send Message">

        </form>

    <?php } ?>
    <hr>

</div>
<!-- contact -->

<?php include('includes/footer.php') ?>