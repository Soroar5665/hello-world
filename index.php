<?php
$age = 9;
if($age>=18){
    echo "Adult";
}
else{
    echo "Minor";
}

echo "<br>";
$minority_check = ($age>=18)? "adult":"minor";
echo "$minority_check";
echo "<br>";
$age_checker = ($age<=12)?"Child":(($age<18)?"Minor":"Adult");
echo "$age_checker";
echo "<br>";
$marks = 10;
if($marks<33){
    echo "Grade F";
}
elseif($marks<40){
    echo "Grade D";
}
elseif($marks<50){
    echo "Grade C";
}
elseif($marks<60){
    echo "Grade B";
}
elseif($marks<70){
    echo "Grade A-";
}
elseif($marks<80){
    echo "Grade A";
}
elseif($marks<=100){
    echo "Grade A+";
}
else{
    echo "Unknown Grade";
}

echo "<br>";
$weather = "rainy";
switch($weather){
    case "sunny":
        echo "Its sunny today";
        break;
    case "cloudy":
        echo "Its cloudy";
        break;
    case "rainy":
        echo "Its rainy";
        break;
    default:
        echo "unknown weather";

}



?>