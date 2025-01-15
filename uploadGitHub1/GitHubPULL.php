<?php

$logFile = 'cron_log.txt';
$timestamp = date('Y-m-d H:i:s');
file_put_contents($logFile, "Cron executed at: $timestamp" . PHP_EOL, FILE_APPEND);

$output = `git add . `;
echo $output . "Tirtha 1";
sleep(1);

$output = `git config --global user.email "tirtha@leeoqa.com"`;
echo $output;
sleep(2);

$output = `git config --global user.name "tirthaa"`;
echo $output;
sleep(3);

$output = `git commit -m "READ_AUto_2 from Server Darshh"`;
echo $output;
sleep(4);

$output = `git remote add origin https://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@github.com/tirthaa/darshhh.git`;
echo $output;
sleep(6);

$output = `git remote set-url origin https://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@github.com/tirthaa/darshhh.git`;
echo $output;
sleep(5);

$output = `git config --global  pull.ff true`;
echo $output;
sleep(7);

$output = `git pull origin master --allow-unrelated-histories`;
echo $output;
sleep(8);

?>