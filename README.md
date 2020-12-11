## Messaging App
This service accepts the necessary information and sends a notification to customers.  
It provides an abstraction between at two different messaging service providers. (Pusher and AWS SES).
Messages are sent via AWS SQS service, and in case of failure of one of the service - 
customer won't notice it. And service will be able to resend the message, because all data is stored in queue.
Also service pushed all logs to another queue to keep track of all history

##How To Start
- clone repository to your local machine.
- cd to project directory
- run `php artisan serve` to start local php server
- open(download if you don't have it yet) api testing tool (postman for example)
- send `POST` api request to url `http://127.0.0.1:8000/api/message` with body
```json
{
    "sender":"Oleh",
    "receiver":"oleh.ismaylov@gmail.com",
    "body": "Hello from Ukraine to Lithuania!"
}
```
- all fields are required and have these restrictions
```
'sender' => 'required|string|max:100|min:1',
'receiver' => 'required|email|max:100|min:1',
'body' => 'required|string|max:255|min:1'
```

## Technologies stack
- PHP 7.4.
- Laravel 7.0.
- AWS SQS.
- AWS SES.
- Pusher
