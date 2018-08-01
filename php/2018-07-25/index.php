<?php
// echo "<h1 style='color:red;'>Xin chao PHP 13</h1>";
// $so = 'ABC';
// echo $so;
// echo "<br>";
// $so = 543;
// echo $so;

// $firstName = "Nguyen";
// $lastName = "Nam";

// $fullName = $firstName . " " . $lastName;

// echo $fullName;


// $four = null;
// $check = $five === $four ? 10 : 5;
// echo $check;

// $four = 4;
// // $five = 5;
// $five = $five + $four;
// echo $five;
// $dungAge = 20;

// if ($dungAge >= 18) {

//   echo "Co CMND";

//   if ($dungAge >= 21) {
//     echo "Co the uong ruou";
//   }
// } else {

//   echo "K co CMND";

// }
// Diem < 4 la diem Yeu
// Diem >=4  && <6 la diem Trung Binh
// Diem >= 6 && <8 la diem Kha
// Diem >=8 && < 10 la diem Gioi
// $diem = 12;

// if ($diem < 4) {
//   echo 'YEU';
// } else if ($diem >= 4 && $diem < 6) {
//   echo 'TB';
// } else if ($diem >= 6 && $diem < 8) {
//   echo 'Kha';
// } else if ($diem >= 8 && $diem <= 10) {
//   echo 'Gioi';
// }



$language = 'JS';
switch (strtolower($language)) {
  case 'PHP':
    echo "PHP: Hypertext Preprocessor";
    break;
  case 'js':
    echo "JavaScript";
    break;
  default:
    echo "can not find meaning your language";
}
 




