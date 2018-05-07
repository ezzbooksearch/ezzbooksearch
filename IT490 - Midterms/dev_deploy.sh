#!/bin/bash

# Checking to make sure file exit 

#file="/home/palabi/frontend.v1.tgz"

file1=$1

if [ -e "backend.$file1.tgz" ]
then
  echo "Tar file already exists... now copying files to Deployment"

  
  scp /home/chris/packages/backend.$file1.tgz carlos@172.20.10.10:/home/carlos/deployment/backend

else 
  echo "$0: File '{$file1}' not found"
tar zcvf backend.$file1.tgz /home/chris/rabbitmqphp_example

scp /home/chris/packages/backend.$file1.tgz carlos@172.20.10.10:/home/carlos/deployment/backend

fi
