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

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus est nisl, eget commodo nulla placerat in. Sed tincidunt at purus eget pretium. Suspendisse non urna eros. Pellentesque a finibus lectus. Vivamus lorem dolor, consectetur quis laoreet vel, facilisis in eros. Etiam non risus sed lorem cursus faucibus id quis purus. Donec at ligula magna. Sed non pellentesque eros, in feugiat nulla. Proin ornare arcu turpis, efficitur facilisis tortor efficitur sit amet. Morbi id pretium dui. In hac habitasse platea dictumst. Praesent sed fringilla est. Quisque ornare nisl at dictum cursus. Curabitur auctor felis et enim elementum porta. Etiam quis rhoncus eros. Donec fermentum egestas neque in fermentum.

## References

+ lorem
+ ipsum
+ dolor
+ sit
+ amet
