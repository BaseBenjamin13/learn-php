<?php 

// for($x = 0; $x <= 10; $x++){ 
//     echo $x;
// }

$x = 2;
// while($x < 10) {
//     echo $x;
//     $x++;
// }

// do {
//     echo $x;
//     $x++;
// } while ($x < 12);

$data = array('sefsef','se','dfth');

// for ($i = 0; $i < count($data); $i++) {
//     echo $data[$i] . '<br>';
// }

// foreach($data as $value) {
//     echo $value . '<br>';
// }
// with index
// foreach($data as $index => $value) {
//     echo $index . ' - ' . $value . '<br>';
// }

$person = [
    'first_name' => 'ben',
    'last_name' => 'morg',
    'age_name' => '21',
];

foreach($person as $key => $value) {
    echo "$key -- $value <br>";
}