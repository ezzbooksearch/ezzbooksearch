RabbitMQ server IP: 172.20.10.5

All .ini files are currently set to the above IP address as well as the following changes:
  -Host is now set to "rabbitHost"
  -Exchange is now set to "rabbitExchange"
  -Two queues have been created - "frontend" & "dmz". Each queue is binded with a routing key
  
FrontEnd server will be using testRabbitMQClient.php and will send message to "frontend" queue.
Database server will be using testRabbitMQServer.php and will listen for messages from the FrontEnd server on the "frontend" queue.


<!--ezzBooks-->

ezzBooks is an online book search website, where authenticated users can have full access to search for any book of thier choice. Also, users get to see the prices of the books searched and incase they decides to make a purchase, it will then redirect them to the appropriate site. We were more focus on just showcasing the book and the idea of prices on our webpage.
 
<!--platform udes--> 

PHP was heavily used in this project, to make it functional and communicate with the RMQ server.

Following are the 4 roles: 

1) Frontend: webpage styling, functionallity was done here
2) RabbitMQ: MIddle man. COmmunicate betweenservers, from front end to the database and also the DMZ.	
3) Database:  Processes all CRUD operations to the database. Uses SQLAlchemy Core and ORM to process queries
4) DMZ: Handles request between frontend & databse. Pulls API to display results to the client

<!-- core dependencies-->

. PHP 7.0
. MySQL
. js


<!-- Server entry-->:

DMZ/scriptsmz.js

database/

frontend/index.html
