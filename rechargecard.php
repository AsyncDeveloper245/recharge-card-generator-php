<?php
#page header
echo '<h1>Welcome to Fortunates Mobile Tech</h1>';

#using a for loop on the rand inbuilt function
for ($index=0;$index<200;$index++){
    #using the rand function
    $recharge = rand(10000000000000,90000000000000);
    echo $index +1 . '.  ';
    echo  'PIN : ' . $recharge."<br>";
    echo '    serial no : '. rand(111000000000000,222222222222222).'<br>';
    echo "<hr>";
}


?>