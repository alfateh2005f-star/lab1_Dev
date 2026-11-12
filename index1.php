                <?php

 
            
    echo " name of server : " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
    echo "رابط أو اسم النطاق الحالي: " . $_SERVER['HTTP_HOST'] . "<br>";
    echo "مسار الملف الحالي على السيرفر: " . $_SERVER['PHP_SELF'] . "<br>";

echo phpversion();

$courseName = "أساسيات الويب";
    echo  "<br>" . $courseName ;
        
?>
