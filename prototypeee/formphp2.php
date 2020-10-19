<?php 


include './config.php';
 
if(isset($_POST['submit'])) {
    $gender = isset($_POST['gender']) ? $_POST['gender']: 0;
    $height = (int)$_POST['height'];
    $weight = (int)$_POST['weight'];

    switch ($gender) {
        case 1:
            $substract = 100;
            break;
        case 0:
            $substract = 110;
            break;
    }

    $data= $mysqli->query("INSERT INTO `htu`.`formt2` (`weight`, `height` ,`gender` ,`result` ) 
   VALUES ('$_POST[weight]', '$_POST[height]' , '$_POST[gender]'    );  ");



    $result = $height - $substract;
    echo " الطول " . $height;
    echo "<br>";
    echo " الوزن" . $weight;
    echo "<br>";
    echo " الوزن المثالي " . $result;
    echo "<br>";

 if ($result > $weight)
 {   $ideal=$result-$weight;
     echo "  حتى تصل الى الوزن المثالي تحتاج الى  زيادة" . $ideal . "كغ " ;
 }
 else
 {
    {   $ideal=$weight-$result;
        echo "  حتى تصل الى الوزن المثالي تحتاج الى نقصان " . $ideal . "كغ " ;

 }}
    //Do whatever you want to do with $result
};
?>