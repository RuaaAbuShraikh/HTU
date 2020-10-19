<?php 


include './config.php';
 
if(isset($_POST['submit'])) {
    $age = isset($_POST['age']) ? $_POST['age']: 0;
    $babyname = $_POST['babyname'];
    $babylname = $_POST['babylname'];


   


echo " اسم الطفل  " . $babyname . "   ". $babylname.  "<br>" ;
echo " عمر الطفل  ". $age  . "شهر" ;
echo "<br>";


    switch ($age) {
        case 1:
            echo "مطعوم التدرن أو السل (BCG)";
        break;
        case 3:
            echo "يعطى الجرعة الأولى من مطعوم شلل الأطفال (IPV) والمطعوم الخماسي الذي يتكون من: المطعوم الثلاثي (DPT)، (الدفتيريا والسعال الديكي والكزاز)، مطعوم المستدمية النزلية نوع (ب)، (HiB) المسبب لمرض التهاب السحايا البكتيرية لدى الأطفال وخصوصا دون السنة من العمر، مطعوم التهاب الكبد نوع “ب”(HBV).";
        break;
         case 4:
            echo "الجرعة الثانية من مطعوم شلل الأطفال (IPV + OPV (الفموي)) + الجرعة الثانية من المطعوم الخماسي.";
        break;
         case 5:
            echo "مطعوم الشلل الفموي (OPV) + المطعوم الثلاثي DPT + مطعوم (HiB). ومطعوم التهاب الكبد نوع “ب” (على شكل رباعي أو خماسي).";
        break;
       case 10:
        echo "يعطى الطفل مطعوم الحصبة Measles + مطعوم OPV.";
    break;
        
    case 12:
        echo "يعطى الجرعة الأولى من مطعوم الثلاثي الفيروسي MMR (النكاف “أبوكعب”، الحصبة، والحصبة الألمانية).";
    break;
        
     case 18:
         echo " يعطى الجرعة المدعمة من مطعوم شلل الأطفال (OPV + DPT) والجرعة الثانية من مطعوم MMR.";
     break;
     default :
        echo " لا يوجد مطاعيم لهذا الشهر" ;
    }

 $data= $mysqli->query("INSERT INTO `htu`.`formt3` (`babyname`, `babylname` ,`age`  ) 
   VALUES ('$_POST[babyname]', '$_POST[babylname]' , '$_POST[age]'    );  ");



    //Do whatever you want to do with $result
};
?>