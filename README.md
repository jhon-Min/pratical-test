# API Documentation

#### 1.Authentication:
*All API requests require authentication using Sanctum authentication system. In order to authenticate, you should first send a POST request to the 'v1/login' endpoint with a JSON payload containing the email and password of the user. The server will respond with an access token, which should be sent in the Authorization header of each subsequent request using the Bearer scheme.*
<br>

- Endpoint: POST /v1/login
- Request Payload:
<br>
{
"email": "string",
"password": "string"
}
<br>
Response:
"data": 
{
    "id": 1,
    "name": "string",
    "email": "string",
    "created_at": "timestamp",
    "token": "token",
    "token_type": "Bearer"
}

#### 2.Registration:
*To create a new user, send a POST request to the 'v1/register' endpoint with a JSON payload containing the user's name, email, and password.*

- Endpoint: POST /v1/register
- Request Payload:
<br>
{
"name": "string",
"email": "string",
"password": "string|min:6"
"password_confirmation": "string|min:6"
}
<br>
- Response:
"data": 
{
    "id": 1,
    "name": "string",
    "email": "string",
    "created_at": "timestamp",
    "token": "token",
    "token_type": "Bearer"
}
<br>

#### 3.Control UI:
*This endpoint is used to submit control form inputs. The endpoint requires the user to be authenticated using the access token obtained during the login process.*
<br>
- Endpoint: POST /v1/control_ui
- Request Headers:
- Authorization: Bearer {access_token}
<br>
Request Payload:
{
"name": boolean,
"phone": boolean,
"date_of_birth": boolean,
"gender" : boolean
}
<br>
Note - Please provide at least one payload in the request.
<br>

#### App Testing Tools

* API Testing
  * [Thunder Client, Http Client Extension for VS Code](https://www.thunderclient.io/)
  * [Postman, API platform](https://www.postman.com/)

<br>

### DataBase Connections

Make sure that you've created the database in advance and added the configuration to the .env file in your application directory.

<br>

# Note for Developer

**Deploy**

* Make sure your enviroment meet Laravel 10 requirements.
* Install all package via composer package manage.


**Installation**
* Clone the repo and cd into it
* composer install
* Rename or copy .env.example file to .env
* php artisan key:generate
* Set your database credentials in your .env file
* php artisan migrate
* php artisan db:seed
* Set your mailtrap smtp service credential in your .env file.
* Attention! Google's Gmail service will not be supported by Google starting May 30th, 2022. Therefore, you will need to integrate your Mailtrap account credentials.
