#!/bin/bash

# Checking to make sure file exit 

#file="/home/frontend.v1.tgz"

file1=$1

if [ -s "$file1" ]
then
  echo "Tar file exit, now copying files to Deployment"

  
  #scp /home/palabi/frontend.v1.tgz carlos@172.20.10.10:/home/carlos/deployment/frontend

else 
  echo "$0: File '{$file1}' not found"
tar zcvf frontend.$file1.tgz /var/www/html/frontend
scp /home/palabi/frontend.$file1.tgz carlos@172.20.10.10:/home/carlos/deployment/frontend

fi


