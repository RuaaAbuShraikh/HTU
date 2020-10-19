<?php 


//include './config.php';
 
//if(isset($_POST['fname'])){
 //   $data= $mysqli->query("INSERT INTO `htu`.`formt1` (`fname`, `tname`, `sname`,
     `lname`, `type`, `notype`, `phone` , `email`, `checkbox`, `txtar`, `checkbox2`, `name`) 
    VALUES ('$_POST[fname]', '$_POST[tname]','$_POST[sname]', '$_POST[lname]','$_POST[type]', 
    '$_POST[notype]','$_POST[phone]', '$_POST[email]' ,'$_POST[checkbox]', 
    '$_POST[txtar]','$_POST[checkbox2]', '$_POST[name]');  ");
    if($data)
        echo 'inserted';
    
    

    else
    {echo 'ERORRRRRRRRRRRRRRR';
    echo $mysqli->error;
    }
};
?>

