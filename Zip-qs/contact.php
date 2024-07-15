<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error#form-message-loction');
       }
       else
       {
           $to = "qstacos@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success#form-message-loction");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>