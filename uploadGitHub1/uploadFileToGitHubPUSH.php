<?php

$logFile = 'cron_PUSH_log.txt';
$timestamp = date('Y-m-d H:i:s');
file_put_contents($logFile, "Cron executed at: $timestamp" . PHP_EOL, FILE_APPEND);

$output = `git add . `;
echo $output;
sleep(1);

$output = `git config --global user.email "tirtha@leeoqa.com"`;
echo $output;
sleep(2);

$output = `git config --global user.name "tirthaa"`;
echo $output;
sleep(3);

$output = `git commit -m "Automation 2 to Server Darshh" `;
echo $output;
sleep(4);

$output = `git remote add origin https://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@github.com/tirthaa/darshhh.git`;
echo $output;
sleep(5);

$output = `git remote set-url origin https://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@github.com/tirthaa/darshhh.git`;
echo $output;
sleep(6);

$output = `git config --global  pull.ff true`;
echo $output;
sleep(7);

$output = `git pull origin master --allow-unrelated-histories`;
echo $output;
sleep(8);

$output = `git commit --amend`;
echo $output;
sleep(9);

$output = `git push -u origin master`;
echo $output;
sleep(10);

?>