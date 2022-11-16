<!-- https://stackoverflow.com/questions/959063/how-to-send-a-get-request-from-php -->
<!-- https://www.php.net/manual/en/datetime.format.php -->

<!-- ignore this file, I just used it for some random testing. it's not part of the app. -->
<?php
$response = file_get_contents("http://luthers-list.herokuapp.com/api/dept/CS/");
$data = json_decode($response, TRUE);
echo '<pre>'; print_r($data[0]); echo '</pre>';
echo $data[0]["instructor"]["name"];

$date = new DateTime('18.15.00.000000-05:00');
$date2 = new DateTime('17.00.00.000000-05:00');
$result = $date->format('g:i'); 
$result2 = $date2->format('g:i');
$result3 =  $result2 . "-" . $result;
echo $result3;
// for ($x = 0; $x < count($data); $x++) {
//     echo $data[$x]["course_number"] . " ";
//   }

$four = "0";
$three = 0;
echo " ";
echo $four == $three;

$currentDate = new DateTime();  
print_r($currentDate);
print_r($currentDate->$date);
?>
