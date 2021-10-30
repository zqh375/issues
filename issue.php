<?php

require "./vendor/autoload.php";

//Github client
$client= new \Github\Client();
$issues=$client->issues()->all('test1','test1');
foreach ($issues as $issue){
    echo "Issue:{$issue['title']}\n";
}
