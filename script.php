<pre>

<?php

// echo "Hello, {$_GET['firstname']}";

// if ($_GET['username'] == "admin") {
//    echo 'Access';
// } else {
//    echo 'warning';
// }

/* switch ($_GET['username']) {
    case "admin": 
        echo 'Access';
        break;
    case "moderator": 
        echo 'Access';
        break;
    default:
        echo 'not';
} */

// switch ($_GET['username']) {
//    case "admin":
//    case "moderator":     
//        echo 'Access';
 //       break;
//    default:
 //       echo 'not';
//}

/* echo match ($_GET['username']) {
    "admin" => 'Access',
    "moderator" => 'Access',
    default => 'not',
}; */

/* echo match ($_GET['username']) {
    "admin", "moderator" => 'Access',
    default => 'not',
}; */

/* $i = 0;
while ($i <= 100) {
    echo $i . "\n";
    $i = $i + 10;
} */
/* 
for ($i = 0; $i <= 100; $i += 5) {
    echo $i . "\n";
}
 */

$array = ["a", "b", "c"];

foreach ($array as $key => $letter) {
    echo $key . ": " . $letter . "\n";
};


?>
</pre>