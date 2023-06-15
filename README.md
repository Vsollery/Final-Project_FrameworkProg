<p align="center">
  <img src="Logo.png">
</p>

---------------------------------------

<p align="center">
  <!-- <img height="200" src=""> -->
  <i>[Add application screenshots here later]</i>
</p>

<p align="center">
  A 2023 Framework Programming Final Project IUP Class 2020, on the topic of creating a framework based application based on Laravel about To Do List with a twist.
</p>


<p align="center">
    <img alt="Contributors" src="https://img.shields.io/github/contributors/Vsollery/Final-Project_FrameworkProg" />
    <img alt="Commit Activity" src="https://img.shields.io/github/commit-activity/w/Vsollery/Final-Project_FrameworkProg" />
    <img alt="File Count" src="https://img.shields.io/github/directory-file-count/Vsollery/Final-Project_FrameworkProg" />
    <img alt="Awesome" src="https://img.shields.io/badge/badges-awesome-green.svg" />
    <br>
    <img alt="HTML5 Support" src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white" />
    <img alt="CSS3 Support" src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=whit" />
    <img alt="Javascript Support" src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E" />
    <img alt="Javascript Support" src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" />
    <img alt="Laravel Support" src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white" />
</p>

<p align="center">
    <small>Venia Sollery Aliyya Hasna · Muhammad Fatih Akbar · Rangga Aulia Pradana · Erlangga Wahyu Utomo · Teuku auli azhar</small>
</p>

<p align="center">
    <b>[ Important Links ]</b>
    <br>
    <small><a href="https://trello.com/b/UGtVdHdj">Trello Board</a> · <a href="">Figma Prototype</a></small>
</p>

<p align="center">
    <b>[ Table of Content ]</b>
    <br>
    <small><a href="##Installation">Installation</a> · <a href="##Using the app">Usage</a> · <a href="##References">References</a></small>
</p>

## Installation

First makes sure Node.js are installed, then in the app directory run the command below in a new terimal window.

```sh
npm install && npm run dev
```

Secondly, open up a second terminal and to install all of the needed dependencies, make sure you have Composerly installed and run the following command

```sh
composer install
```

Then create an `.env` file by creating manually. Copy the contents of `.env.examples` into the created file. Inside of the .env file, change the `DB_DATABASE`, into `DB_DATABASE=to_do`. This will prevent the app from using the default database.

Run you database server, as an example the MySQL server in XAMPP, then migrate and seed the database by running the following commands

```sh
php artisan key:generate
php artisan migrate
php artisan migrate:fresh --seed
```

To start and run the app, run the following command

```sh
php artisan serve
```

## Usage

Tambahin Screenshot Serta jelasin fungsi page tersebut
### home
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/794f9b57-dd3b-4804-b83d-216221b633dc)
### register
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/48b1fea2-2722-4492-9ea1-42bb8ae839c8)
### login
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/75980eac-1cf6-4d25-991f-820a3f0e3460)
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/6b98c3a2-6180-46b1-b058-c5fec79271ea)
### adding new task
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/834c81d4-b3d1-41e7-8d92-cb2b937db85a)
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/0a378f95-6312-4276-9246-38312c8aff14)
### task details + edit
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/a107face-24f6-4e4b-a16a-f1b66892309d)
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/ed06d9d2-8e3e-4781-aa57-a11a9b9645ce)


### complete the task
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/c5f4539b-f705-49ae-8e98-327edcf08d8f)

![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/73044b4d-d25a-4ea9-b823-885a5ef6ef52)

### dashboard updated
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/1388d5ae-840d-49dc-a699-6711ba6aa424)

### account details
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/54c97a0f-6bca-4d9e-bdfe-0bb6a3a6c739)

### discover page
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/40aaa03b-9a65-4efb-ad2d-a11a00ddf530)

### admin page
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/b8c6eed8-b248-40d3-8dd4-fd09372f3973)
### admin changing role of user
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/cdae984c-1e94-4735-a042-0594cd810c88)

### admin delete user
![image](https://github.com/Vsollery/Final-Project_FrameworkProg/assets/81525850/4efae180-fb8a-4d2c-8b7a-5c5ca601f33a)












### Roles Use Case

- **Admins** are able to view all users, delete users, and change the roles of users.
- **Logged In User** are able to create, edit, delete, and show details. In additon, they can also discover other users' tasks.
- **Guest**  are able to only view other users' tasks and they can also register. 

## Breakdown


### Entities

This project contains two entities/models, which as below. You can also click on the hyperlinks to see the code a closer look.

- [**User**](/blog/app/Models/User.php)<br>
This entity contains datas relating to authentication such as name, email, and password. This entity also has role attribute which used to differentiate role between users for different permissions.

```
protected $fillable = [
        'name',
        'email',
        'password',
    ];
```
Using protected function, the name, email, and password can’t accessed externally. This code is used in register.

```
protected $hidden = [
        'password',
        'remember_token',
```
It had the same function in above. But, the password is hidden. So, it will replace with dots in order to get protected

```
protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed'
```
When the email verified, it has date time for timestamp. The password is hashed.

```
public function tasks(){
        return $this->hasMany(Task::class);
```
For the function in tasks, the user can have task more than one

- [**Product**](/blog/app/Models/Product.php)<br>
This entity contains the name and detail of a product that interchangeable. Not much else goes here.

```
protected $guarded =['id'];
    protected $fillable = ['title', 'description', 'user_id'];
```
Protected function to use in ID with the guarded statement that executes code in a body only.
You can fill the title, description. And it added by user_id

```
public function user(){
        return $this->belongsTo(User::class);
```
The function in user that has belongsTo relation. belongsTo reaction is to sent back into user

### Controllers

Overall this project contains four controllers, which are all an extension of [**Controller**](/app/Http/Controllers/Controller.php), an extension of the BaseController with additional Middlewares such as `AuthorizeRequests` and `ValidateRequests`. The controllers are as follows:

- [**AdminController**](/app/Http/Controllers/AdminController.php)<br>
This controller functions to check wether the user is an authorized administrator using  the `\App\Http\Middleware\isAdmin.php` middleware whenever a user try to access the Admin page, providing access to all user with the administrator role. This Controller also provides administrative actions for the admins such as manipulating the **User** entity to change its admin role status and delete users.

- [**GeneralController**](/app/Http/Controllers/GeneralController.php)<br>
This controller handle requests regarding to general pages, which are pages that anyone one can seee such as **Homepage, About Page, Discover Page, and Show Page**. Overall, it control which page is currently active and change texts & strings accordingly.

- [**TodoController**](/app/Http/Controllers/TodoController.php)<br>
This controller handles actions and requests relating to the  **Task** entity as in its manipulations such as **creation, storing, showing, editing, updating, deletion, and checklisting** of a task from a given request, and controlling pages such as **Dashboard page, Finished Tasks Page, and Unfinished Tasks Page**. This controller contains the use of `\App\Http\Middleware\Authenticate.php` middleware that checks the user is authenticated to view the pages.

- [**UserController**](/app/Http/Controllers/UserController.php)<br>
This controller handles actions relating to the manipulation and validation regarding to the **User** entity such as the **creation, storing, authentication, logging in, and logging out** of it from a given request.

### Middlewares

Though there are a lot of middlewares that are used in this project, the three main ones are as follows:

```php
...
protected $middlewareAliases = [
    ...
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    'admin' => \App\Http\Middleware\isAdmin::class,
];
...
```

- **verified**
  ...
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
  ```
  >  it used to make sure that email is registered
- **admin**
  ```
  'admin' => \App\Http\Middleware\isAdmin::class
  ```
  > is Admin, the middleware will allow the request to proceed further into the application.

these middlewares handle the multirole and permision management capability of the project.

### Database

Overall the main database used in this project consist of 2 tables. The tables Are as follows:

#### 1. users

The users table stores the attributes of the **User** entity. Contains 9 attributes.

| Name              | Type         | Description                          |
| ----------        | ------------ | ------------------------------------ |
| id                | bigint(20)   | The user id number             |
| name              | varchar(255) | The user name                  |
| email             | varchar(255) | The user's email address             |
| email_verified_at | timestamp    | When was the email verified          |
| password          | varchar(255) | The user's password                  |
| is_admin          | tinyint(1)   | When was the permission last updated |
| remember_token    | varchar(100) | The user's remember token            |
| created_at        | timestamp    | When was the user created            |
| updated_at        | timestamp    | When was the permission last updated |

#### 2. task

The task table stores the attributes of the task entity. Contains 7 attributes.

| Name              | Type         | Description                          |
| ----------        | ------------ | ------------------------------------ |
| id                | bigint(20)   | The permission id number             |
| user_id           | bigint(20)   | the user id number                   |
| title             | varchar(255) | The task title                       |
| description       | text         | The task description                 |
| is_completed      | tinyint(1)   | The task completed or not            |
| created_at        | timestamp    | When was the task created            |
| updated_at        | timestamp    | When was the task last updated       |

### External Interfaces

#### Data Access Interface
This refers to the database mentioned earlier.

#### User Interfaces
These are the views located in the resources folder. The project includes multiple different views, including:

```
    layouts
        main.blade.php
    partials  
        navbar.blade.php
    tasks
      admin
         index.blade.php
       layouts
          header.blade.php
          main.blade.php
          sidenav.blade.php
      todos
          create.blade.php
          edit.blade.php
          finished.blade.php
          index.blade.php
          show.blade.php
          unfinished.blade.php
       index.blade.php
  users
     login.blade.php
     register.blade.php
   about.blade.php
   discover.blade.php
   home.blade.php
   show.blade.php
   welcome.blade.php
```
