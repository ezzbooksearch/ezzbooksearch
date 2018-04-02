#! /usr/bin/env python

import pika

connection = pika.BlockingCONnection(pika.ConnectionParameter('localhost'))
channel=connection.channel()

channel.queue_declare(queue='hello')

channel.basic_publish(excahnge='', routing_key='hello',body='Hello World!')
print(" [x] Sent 'Hello WOrld!' ")

connection.close() #To make sure the network buffers were flushed and our message was actually delivered to RabbitMQ. We can do it by gently closely the connection which we already did.
