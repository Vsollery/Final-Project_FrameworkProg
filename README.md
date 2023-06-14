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

### Roles Use Case

As an example, you can assign the role to the followings for a typical warehouse management system:

| Role             | Permissions                                                                                                |
| ---------------- | ---------------------------------------------------------------------------------------------------------- |
| Admin            | role-list, role-create, role-edit, role-delete, product-list, product-create, product-edit, product-delete |
| Role Manager     | role-list, role-create, role-edit, role-delete                                                             |
| Role Observer    | role-list                                                                                                  |
| Product Manager  | product-list, product-create, product-edit, product-delete                                                 |
| Product Observer | product-list                                                                                               |

More or less each role use cases are as follows:

- **Admins** should have full access to all the system permissions, starting from manipulating user, roles, and products.
- **Role Managers** should have full control over all actions relating to roles in the system.
- **Role Observers** should have access to viewing the types of role in the system, but not action relating to its manipulation.
- **Product Managers** should have full control over all actions relationg to products in the system.
- **Product Observers** should have access to viewing the types of products in the system, but not action relating to its manipulation.

## Breakdown

### Entities

This project contains two entities/models, which as below. You can also click on the hyperlinks to see the code a closer look.

- [**User**](/blog/app/Models/User.php)<br>
This entity contains datas relating to authentication such as name, email, and password. This entity also has role attribute which used to differentiate role between users for different permissions.
> As a new user. create an account with fill the name, email, and password.
![Result1](https://github.com/Vsollery/Final-Project_FrameworkProg/blob/main/Result/Register_User.png)
> Then, Try login with fill the email that registered and the password.
![Result1](https://github.com/Vsollery/Final-Project_FrameworkProg/blob/main/Result/Login_User.png)

- [**Product**](/blog/app/Models/Product.php)<br>
This entity contains the name and detail of a product that interchangeable. Not much else goes here.

### Controllers

Overall this project contains four controllers, which are all an extension of [**Controller**](/blog/app/Http/Controllers/Controller.php), an extension of the BaseController with additional Middlewares such as `AuthorizeRequests` and `ValidateRequests`. The controllers are as follows:

- [**HomeController**](/blog/app/Models/User.php)<br>
This controller functions to check wether the user has been authenticated/logged using the `\App\Http\Middleware\Authenticate` middleware whenever a user try to access the Homepage, providing access to all autheticated users.

- [**ProductController**](/blog/app/Models/User.php)<br>
This controller handles actions relating to the manipulation of the data of a **Product** entity such as the **creation, storing, showing, editing, updating, and deletion** of it from a given request. This controller also contains the use of a couple of `\Spatie\Permission\Middlewares\PermissionMiddleware` middlewares that checks the user's permissions on what action they are allowed to do in the product page.

- [**RoleController**](/blog/app/Models/User.php)<br>
This controller handles actions relating to the manipulation of the data of a **Role** such as the **creation, storing, showing, editing, updating, and deletion** of a role from a given request. Like the previous, this controller also contains the use of a couple of `\Spatie\Permission\Middlewares\PermissionMiddleware` middlewares that checks the user's permissions on what action they are allowed to do in the role manager page.

- [**UserController**](/blog/app/Models/User.php)<br>
Similar to the previous two controllers, this controller handles actions relating to the manipulation of the data of a **User** entity such as the **creation, storing, showing, editing, updating, and deletion** of it from a given request. This controller also contains the use of a couple of `\Spatie\Permission\Middlewares\PermissionMiddleware` middlewares that checks the user's permissions on what action they are allowed to do in the user page.

### Middlewares

Though there are a lot of middlewares that are used in this project, the three main ones are as follows:

```php
...
protected $middlewareAliases = [
    ...
    'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
    'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
    'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class,
];
...
```

- **role**
- **permission**
- **role_or_permission**

these middlewares handle the multirole and permision management capability of the project.

### Database

Overall the main database used in this project consist of 7 tables. The tables Are as follows:

#### 1. users

The users table stores the attributes of the **User** entity. Contains 8 attributes.

| Name              | Type         | Description                    |
| ----------------- | ------------ | ------------------------------ |
| id                | bigint(20)   | The user's id number           |
| name              | varchar(255) | The user's username            |
| email             | varchar(255) | The user's email address       |
| email_verified_at | timestamp    | When was the email verified    |
| password          | varchar(255) | The user's password            |
| remember_token    | varchar(100) | The user's remember token      |
| created_at        | timestamp    | When was the user created      |
| updated_at        | timestamp    | When was the user last updated |

#### 2. roles

The roles table store the attributes for the different types of **roles**. Contains 5 attributes.

| Name       | Type         | Description                    |
| ---------- | ------------ | ------------------------------ |
| id         | bigint(20)   | The role id number             |
| name       | varchar(255) | The role name                  |
| guard_name | varchar(255) | The role user-agent            |
| created_at | timestamp    | When was the role created      |
| updated_at | timestamp    | When was the role last updated |

#### 3. products

The products table stores the attributes of the **Product** entity. Contains 5 attributes.

| Name       | Type         | Description                       |
| ---------- | ------------ | --------------------------------- |
| id         | bigint(20)   | The product's id number           |
| name       | varchar(255) | The product's name                |
| detail     | text         | The product details               |
| created_at | timestamp    | When was the product created      |
| updated_at | timestamp    | When was the user product updated |

#### 4. permissions

The permissions table store the attributes for the different types of **permissions**. Contains 5 attributes.

| Name       | Type         | Description                          |
| ---------- | ------------ | ------------------------------------ |
| id         | bigint(20)   | The permission id number             |
| name       | varchar(255) | The permission name                  |
| guard_name | varchar(255) | The permission user-agent            |
| created_at | timestamp    | When was the permission created      |
| updated_at | timestamp    | When was the permission last updated |

#### 5. roles_has_permissions

The permissions table is an intermediary between the **permissions table** and **role table**, to define what role has what permissions. Contains 2 attributes.

| Name          | Type       | Description              |
| ------------- | ---------- | ------------------------ |
| permission_id | bigint(20) | The permission id number |
| role_id       | bigint(20) | The role's id number     |

### 6. models_has_roles

The permissions table is an intermediary between the **users table** and **role table**, to define what users has what roles. Contains 3 attributes.

| Name       | Type         | Description          |
| ---------- | ------------ | -------------------- |
| role_id    | bigint(20)   | The role's id number |
| model_type | varchar(255) | The model type       |
| model_id   | bigint(20)   | The user's id number |

#### 7. models_has_permissions

The permissions table is an intermediary between the **users table** and **permissions table**, to define what users has what permissions. Contains 3 attributes.

| Name          | Type         | Description              |
| ------------- | ------------ | ------------------------ |
| permission_id | bigint(20)   | The permission id number |
| model_type    | varchar(255) | The model type           |
| model_id      | bigint(20)   | The user's id number     |

### External Interfaces

#### Data Access Interface
This refers to the database mentioned earlier.

#### User Interfaces
These are the views located in the resources folder. The project includes multiple different views, including:

+ **Theme Layout**
  - app.blade.php
+ **User Module**
  - index.blade.php
  - create.blade.php
  - edit.blade.php
  - show.blade.php
+ **Roles Module**
  - index.blade.php
  - create.blade.php
  - edit.blade.php
  - show.blade.php
+ **Product Module**
  - index.blade.php
  - create.blade.php
  - edit.blade.php
  - show.blade.php
