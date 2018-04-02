#! /usr/bin/env python

import pika

connection = pika.BlockingCONnection(pika.ConnectionParameter('localhost'))
channel=connection.channel() #connect to rabbitMQ server

channel.queue_declare(queue='hello') #This creates a queue

#receving message from a queue is more comples so it is works by subscribing to callback function

def callback(ch, method, properties, body):
print(" [x] Received %r" % body)

channel.basic_consume(callback, queue='hello',no_ack=True) #Tells rabbimq that this particular function should receive messages from the hello queue

print(' [*] Waiting for messages. To exit press CTRL+C')
channel.start_consuming()
