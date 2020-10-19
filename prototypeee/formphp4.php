<?php 


include './config.php';
 
if(isset($_POST['fname'])){
    $data= $mysqli->query("INSERT INTO `htu`.`formt4` (`fname`, `sname`, `tname`,
     `lname`, `phone` , `email`, `option`, `hosp`, `txtar`) 

    VALUES ('$_POST[fname]', '$_POST[sname]','$_POST[tname]', '$_POST[lname]','$_POST[phone]', 
    '$_POST[email]','$_POST[option]',  '$_POST[hosp]','$_POST[txtar]');  ");
    if($data)
    
        echo "<script>alert('تم تقديم الشكوى/الاقتراح بنجاح');</script>";


    else
    {echo 'ERORRRRRRRRRRRRRRR';
    echo $mysqli->error;
    }
};
?>

