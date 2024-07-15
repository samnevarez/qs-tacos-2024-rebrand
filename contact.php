<?php 

if(isset($_POST['btn-send']))
{
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
    $Msg = $_POST['msg'];

    if(empty($UserName) || empty($Email) || empty($Msg))
    {
        header('location:index.php?error#form-message-location');
    }
    else
    {
        $to = "adaptify.design@gmail.com";
        $bcc = "snevarez89@gmail.com";
        $subject = "Q's Tacos - New Form Submission Received!";
        $headers = "From: noreply@qstacos.com\r\n";
        $headers .= "Reply-To: $Email\r\n";
        $headers .= "BCC: $bcc\r\n";
        
        $message = "Name: $UserName\r\n";
        $message .= "Email: $Email\r\n";
        $message .= "Message:\r\n$Msg\r\n";

        if(mail($to, $subject, $message, $headers))
        {
            header("location:index.php?success#form-message-location");
        }
        else
        {
            header("location:index.php?error#form-message-location");
        }
    }
}
else
{
    header("location:index.php");
}
?>
