<?php
//可変関数のテスト

function hello($name) {
    echo "Hello $name !";
}

// hello("太郎");

'hello'("太郎");

$func = 'hello';
$func("次郎");

?>
