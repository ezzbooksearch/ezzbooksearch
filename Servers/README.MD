RabbitMQ server IP: 172.20.10.5

All .ini files are currently set to the above IP address as well as the following changes:
  -Host is now set to "rabbitHost"
  -Exchange is now set to "rabbitExchange"
  -Two queues have been created - "frontend" & "dmz". Each queue is binded with a routing key
  
FrontEnd server will be using testRabbitMQClient.php and will send message to "frontend" queue.
Database server will be using testRabbitMQServer.php and will listen for messages from the FrontEnd server on the "frontend" queue.
