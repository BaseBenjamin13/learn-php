<?php

$age = 21;

// if($age >= 20) {
//     echo"you are over 19";
// } else {
//     echo "you are under 20";
// }

date_default_timezone_set("America/New_York");
$t = date("H");

// if($t < 12) {
//     echo "Good morning!";
// } elseif($t < 17){
//     echo "Good afternoon!";
// } else {
//     echo "Good evening!";
// }

$posts = ['first post', 'second post', 'last post'];
// if(!empty($posts)) {
//     foreach($posts as $post) {
//         echo "$post ";
//     }
// }
// echo !empty($posts) ? json_encode($posts) :'no posts';
// echo json_encode($posts) ?? 'no posts';
// echo $posts[0] ?? ' no posts';

$favcolor = 'red';

switch($favcolor) {
    case 'red':
        echo'fav color is red';
        break;
    case 'blue':
        echo'fav color is blue';
        break;
    case 'green':
        echo'fav color is green';
        break;
    default:
    echo'IDK what your fav color is';
}