<?php
    $email = $_POST["email"];
    //echo  $email ;
?>
<html lang="en">
    <head>
       <title>Email</title>
    </head>
    <body>
       <form method="post" action="#" enctype="">
            <legend>Email</legend> 
            <input type="email" id="email" name="email" value="<?php if (isset($email)){echo $email;}?>">
            <input type="button" value="i" title="abc@gmail.com"><br><br> 
            <input type="submit" value="Submit">
       </form>     
    </body>
    </html>