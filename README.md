**How to install this shit :)**

First make sure that **Apache2**, **PHP** and **MySQL** is installed.

Fixing DB settings:

    1. Create a user with all permissions. Password should be "test" and username "test"
    2. Create a database with "Stack" as name

Configuring apache2:

    1. Enter the config file by entering this in your terminal "sudo vim /etc/apache2/sites-enabled/000-default.conf"
    2. Replace all the content in the conf file with the content in "apache.conf.template" thats in this repo.
    3. Replace "/Path/To/Project/Folder/" with the full path to this Project
    4. Run this in your terminal "sudo a2enmod rewrite"
    5. Then run "service apache2 restart" to restart apache2

Now you can open "http://localhost:8080"
Do what the website tells you to do

To edit themes go to **qa-themes** add a new folder and create a theme. LUL
