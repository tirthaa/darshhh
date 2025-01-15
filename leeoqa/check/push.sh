#!/bin/sh
cd /home/u787416989/domains/leeoqa.com/public_html/TestEnv
git add -A
git config --global user.email "tirtha@leeoqa.com"
git config --global user.name "tirthaa"
git commit -a "READ_AUto_2 from Server Darshh"
git remote add origin https://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@github.com/tirthaa/darshhh.git
git remote set-url origin https://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@github.com/tirthaa/darshhh.git
git config --global  pull.ff true
git pull origin master --allow-unrelated-histories
git commit --amend
git push -u origin master