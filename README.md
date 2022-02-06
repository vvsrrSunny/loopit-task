## Table of contents
* [General info](#general-info)
* [Technologies](#technologies)
* [Prerequisites](#prerequisites)
* [Setup](#setup)

## General info
This project is to implement the basic authentication and create an api that provides all the cars that are currently in stock with appropriate test cases. 
	
## Technologies
Project is created with:
* Vue js: 3.2.29
* tailwind CSS: 3.0.0
* Vite: 2.7.13
* laravel: 8.82.0
* php: 8.1.1
* MariaDB: 10.4.22

## Prerequisites
* node js
* php: 7.3+ or 8.0+ (I have used 8.1.1)  
* Composer
* MySQL or MariaDB
* Apache Http server or any other http server. (I have used XAAMP to get apache server, MariaDB database, PHP 8.1.1)

## Setup
To run this project:

* Pull this git project from the master branch, or if you already have this project then use it (if using xammp then pull the project in htdocs folder)
* create a database name in MySQL or MariaDB or any SQL server.
* In the root folder of the project, create the .env file or edit if exists. Provide database name, user name, and password of the database in the .env file.
* Get the backend dependencies by the following command 
```
composer install
```
* Run the below command to migrate the tables in to the database
```
php artisan migrate
```
*  Now migrate the CSV file to database by the below command 
```
php artisan db:seed
```
* try this for seeding if the above command could not run
```
php artisan migrate:fresh --seed
```
* Get the frontend dependencies by the following command
```
npm install
```
* Run the backend server 
```
php atrisan serve
```
* Run the frontend vite server
```
npm run dev
``` 
Your aplication is ready to use!


