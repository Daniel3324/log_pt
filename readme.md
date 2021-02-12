

## Features

With this Restfull api you will be able to create a user in the database, update its records, show the detail of a user,
show the list of all the users that are in the database and delete a user, it was done with unitatios tests TDD and the CRUD 
registration treatment was implemented, you can get the documentation of the tests in the /test/report folder and the api documentation 
in the /public/documentation.pdf folder.


## Requirements

- PHP >= 7.2
- Laravel 6
- Database Mysql 5.7
- Server web Apache >=2.*


## Getting started

1. Download the project and place it in your DocumentRoot folder on your web server.
2. Create a database in mysql with the name of log_ptBD, user userlog_pt, password UrX24 + T31. You can modify this information in the .env file found in the root of the app.
3. Through the shell of your computer, go to the root folder of the API and proceed to run the migrations of the app with the following command.
    
    php artisan migrate:install
    and later
    php artisan migrate

4. Verify that the tables were created in your database

5. To access the endpoints, you can go to the documentation found in the / public folder of the API or you can also access it through the URL http: //yourdomain/log_pt/public/documentation.pdf
