# Web server with Apache, PHP and MariaDB (MySQL)

This is a simple to setup, easy to use web server running on Windows.

Tested with the following versions:
* Apache 2.4.63
* PHP 8.3.20 (phpMyAdmin does not seems to work on 8.4 or higher)
* MariaDB 11.4.5
* phpMyAdmin 5.2.2

## Installation

The web server relies on third party packages. Those need to be downloaded and added to the web server folder.

Start by cloning this repo to your PC:

git clone https://github.com/dannyvanderpol/web_server.git

## Add Apache

Download the binaries from: https://www.apachelounge.com/download

* Extract the files to `web_server/apache`.
* Delete the `web_server/apache/htdocs` folder.
* Delete all files in the `web_server/apache/conf` folder.
* Copy the file 'web_server/config/httpd.conf' to the `web_server/apache/conf` folder.
* Set in the file `web_server/apache/conf` the correct server root for the Apache web server. This must be an absolute path starting with a '/'.
  So if your web server is on `C:\my_projects\web_server`, the server root is: `/my_projects/web_server/apache`.

## Add PHP

Be sure to download the thread safe version. Only this version contains the Apache module.
Download the PHP binaries from: https://windows.php.net/download

* Extract the file to `web_server\php`.

The configuration should already be set up.

Now the web server should be working.
Run the file `test_web_server.bat`.
This should show a simple HTML web page.
Check if PHP works by opening the PHP info link.

## Add MariaDB (MySQL)

MariaDB is a clone of MySQL and has some advantages over MySQL. We will not discuss that now here.

Download MariaDB from: https://mariadb.org/download

* Extract the file to: `web_server/mariadb`.
* Create the data folder for the databases: `web_server\mariadb\data`
* Run `web_server/mariadb/bin/mariadb-install-db.exe` to create all required tables and ini file.

The webserver can be moved to another location. In that case you need to updated the paths in the my.ini file.

Run the file `test_mariadb.bat`. It starts MariaDB and connects to the server.
Now you can execute SQL queries (e.g.: `show databases;`).
Quit by typing `exit`.

Close the MariaDB server and run the file `start_server.bat`. This starts Apache and MariaDB and opens the web page.
Open the link for testing the MariaDB.

The server is now fully operational.

## Add phpMyAdmin (optional)

The application phpMyAdmin provides access to the database using a web interface.

Download phpMyAdmin from: https://www.phpmyadmin.net/downloads

* Extract the file to: `web_server/htdocs/phpmyadmin`.
* Copy the file `web_server/config/config.inc.php` to `web_server/htdocs/phpmyadmin`.

Start the server and open a browser and go to: http:\\localhost:8080/phpmyadmin.
Check if everyhting works as expected.

## Add services

Apache and MariaDB can be added to the Windows Services.
After installation, the services can be managed through the Windows Services application.
Note that before uninstalling a service, the service must be stopped first.
Note that administrator rights are required for installing and uninstalling services.
Note that after installing and running the services, the batch file for starting the server might not work.

### Apache:

* Install service: `web_server/apache/bin/httpd.exe -k install`
* Remove service: `web_server/apache/bin/httpd.exe -k uninstall`

### MariaDB:

* Install service: `web_server/mariadb/bin/mariadbd.exe --install`
* Remove service: `web_server/mariadb/bin/mariadbd.exe --remove`
