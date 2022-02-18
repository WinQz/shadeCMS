# shadeCMS
 The HabboCMS that does the heavy lifting.
 <br>
 Easy to configure with HTML5 Clients.
 <br>
 Better Nitro Support Under Development.

# Installation
 You first need some information on what you need to install and configurate.
 #### 1. MySQL Server
 ###### I use MySQL Windows 5.5 Server. After installation configurate the server.
 #### 2. WebServer 
 ###### ENVIRONMENT CHECK: I suggest using IIS when running on windows and use Nginx when running on Linux.
 #### 3. PHP Manager
 ###### You want the PHP Manager (IIS) for switching PHP versions easily.
 #### 4. PHP
 ###### I use PHP 7.4.13 (x64), maybe you need php 8.0.0. Because it could throw an Composer error when using php 7.4.13!
 #### 5. Composer
 ###### Get composer at <a href="https://getcomposer.org/">Composer Installation</a>
 #### 6. Text Editor
 ###### For a fast Text Editor I suggest using <a href="https://notepad-plus-plus.org/downloads/">Notepad++ Installation</a>
 #### 7. Database Management GUI
 ###### I suggest <a href="https://www.heidisql.com/">HeidiSQL Installation</a>

 ### Now the Installation Self
 1. Install the project from github.
 2. Move the files in the root folder.
 3. Then you must run ```composer install``` in the windows powershell / command prompt.
(In the folder containing the ```composer.json```)
 4. Open Database Management Gui and create a connection.
 5. Import the SQL from arcturus.dev in the database.
 6. Go to the ```.env``` file and configurate your credentials with the MySQL server.
 7. You need to specify your baseUrl in App/Config/App.php
 ```
 public $baseURL = 'http://127.0.0.1';
 ```
 9. (OPTIONAL) You might need to install Url Rewrite 2.1 in order to fix the error 500.
 10. (OPTIONAL) Maybe for DDoS / DoS Security, install IP & Domain restrictions for IIS limiting.
 #### You're done!


# Information About The Project
 I use CodeIgniter 4.15, it's a cool, small and stable PHP Framework.
 <br>
 I developed this habboCMS for starters that want to learn habboCMS's written in MVC structure.
