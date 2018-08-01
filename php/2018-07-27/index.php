<?php
















// $i = 0;
// for (; $i < 5; ) {
//   echo $i . "<br>";
//   $i++;
// }

// $arr = [5, 4, "nam", 8.5];
// var_dump($arr);
// echo $arr[0] . "<br>";
// for ($i = 0; $i < count($arr); $i++) {

//   echo ucfirst($arr[$i]) . "<br>";
// }

// $arr = [
//   "ten" => "Nam",
//   "tuoi" => 99
// ];

// var_dump($arr);
// echo "<br>";

// for ($i = 0; $i < count($arr); $i++) {
//   var_dump($arr[0]);
// }

// foreach ($arr as $key => $value) {
//   echo $key . " and " . $value . "<br>";
// }

// $products = [
//   "iphone" => [
//     "price" => 1099,
//     "size" => 6.4
//   ],
//   "ipad" => [
//     "price" => 2099,
//     "size" => 7.9
//   ]
// ];

// foreach ($products as $productName => $productAttribute) {
//   echo "$productName has ";
//   foreach ($productAttribute as $attribute => $value) {
//     // if (strtolower($attribute) === "price") {
//     echo "$attribute with $value, ";
//     // } else if (strtolower($attribute) === "size") {
//     // echo " and $attribute with $value";
//     // }
//   }
//   echo "<br>";
// }

// function displayYourName($yourName = "Nam NH")
// {
//   echo "Here you are <br>";
//   return $yourName;
// }

// displayYourName();
// echo displayYourName("Smith");
// $name = "Mr " . displayYourName("Smith");
// echo $name;
// echo displayYourName();


// $items = [
//   "1" => ["name" => "phone"],
//   "2" => ["name" => "motorbike"]
// ];

// $name = 'Nam';

// function displayData()
// {
//   foreach ($GLOBALS['items'] as $item) {
//     echo $item['name'] . "<br>";
//   }

//   echo $GLOBALS['name'];
// }


// displayData();
// print_r($items);

?>

<form action="aptech.php" method="POST">
<?php
for ($i = 0; $i < 5; $i++) {
  echo "Name : <input type='text' name='name'>";
}

?>

 <!-- <br> -->
<!-- Password : <input type="text" name="password123"> -->
<button type="submit">Submit</button>
</form> -->