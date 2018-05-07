#!/bin/bash

# Checking to make sure file exit 

file1=$1

if [ -e "backend.$file1.tgz" ]
then
  echo "Tar file already downloaded!"
  tar -xzf backend.$file1.tgz --strip-components=3 -C /home/chris/rabbitmqphp_example

else 
  echo "$0: File '{$file1}' not found"

  scp -r -p carlos@172.20.10.10:/home/carlos/deployment/backend/backend.$file1.tgz /home/chris/packages/

  tar -xzf backend.$file1.tgz --strip-components=3 -C /home/chris/rabbitmqphp_example

fi
