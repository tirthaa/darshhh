#!/bin/sh
cd /home/u787416989/domains/leeoqa.com/public_html/TestEnv
git add TestEnv/leeoqa/QA/*.xls
git config --global user.email "tirtha@leeoqa.com"
git config --global user.name "tirthaa"
git commit -m "READ_AUto_2 from Server Darshh" TestEnv/leeoqa/*.xls
git remote add origin https://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@github.com/tirthaa/darshhh.git
git remote set-url origin https://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@github.com/tirthaa/darshhh.git
git config --global  pull.ff true
git pull origin master --allow-unrelated-histories
git commit --amend
git push -u origin master