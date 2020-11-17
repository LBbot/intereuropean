Recreating a webpage design from Adobe XD served with Laravel and styled using Tailwind CSS.

# Steps to run locally
- Clone or download the git repository.
- ```composer install``` to install dependencies
- ```npm install``` to install dependencies
- Duplicate .env-example and rename it .env
- ```php artisan key:generate```
- ```php artisan serve``` and go to Laravel development server URL provided.

# Enabling Contact form emails
The Contact form is currently set up to simply return a 'thank you' message on post, but there's a short and simple mail class and view that can handle sending the submitted information to one specified email address.
- Uncomment the mail function in routes/web.php
- Set up your personal SMTP auth and settings in .env to act as sender.
- Write in MAIL_TO_ADDRESS in .env for the reciever. (E.g. a personal email address for testing, or the company email if in production.)
