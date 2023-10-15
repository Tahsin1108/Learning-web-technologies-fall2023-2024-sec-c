<?php
if (isset($_POST['submit'])) {
    $error_messages = [];

    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $retype_password = $_POST['retype_password'];

    
    if ($new_password === $current_password) {
        $error_messages[] = "New Password should not be the same as the Current Password.";
    }

    if ($new_password !== $retype_password) {
        $error_messages[] = "New Password must match with the Retyped Password.";
    }

    if (empty($error_messages)) {
        echo "Password changed successfully!";
    } else {
        
        foreach ($error_messages as $error_message) {
            echo '<font color="black">' . $error_message . '</font><br>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <table align="center">
        <tr>
            <td height="150px" align="center"><table width="500px">
           
           <form method="post" action="#">
                   <fieldset>
                       <legend>Change Password</legend>
                       <label for="Curent Password">Curent Password:</label>
                            <input type="text" name="current_password" id="Curent Password" value=""><br><br>
                            <label for="New Password">New Password:</label>
                            <input type="New Password" name="new_password" id="New Password" value=""><br><br>
                            <label for="Retype New Password">Retype New Password:</label>
                            <input type="Retype New Password" name="retype_password" id="Retype New Password" value=""><hr><br><br>
                       <input type="submit" name="submit" value="Submit">
                   </fieldset>
               </form>
               </table>
           </td>
        </tr>
       
    </table>
</body>
</html>