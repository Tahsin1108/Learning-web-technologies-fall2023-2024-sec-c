<?php
    $dob = $_REQUEST["dob"];
    //echo  $dob ;
?>
<html>
<head>
    <title></title>
</head>
<body>

    <form method="" action="#" enctype="">

        <table border="1">
          
           <fieldset style="height:100px;width: 100px;" >
                <legend>Date of Birth</legend> 
                <input type="date" name="dob" value="<?php if(isset($dob)){echo $dob;}?>" /> 
          
           </fieldset>
                
         </table>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>