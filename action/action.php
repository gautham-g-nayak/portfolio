<?php
if(isset($_POST['submit'])){
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    $from = $_POST['Email'];
    $Name = $_POST['Name'];

    $to = 'gauthamg2000@gmail.com';
    $headers = 'From: '.$from;
    $txt = 'You have recieved message from your portfolio website by '.$Name.'\n\n'.$message;

    if(mail($to, $subject, $txt)){
        header("Location: index.php?mailsend");
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }
}
?>