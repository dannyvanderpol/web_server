@echo off
setlocal

set start_apache_cmd=start "Apache" /min apache\bin\httpd.exe
set start_mariadb_cmd=start "MariaDB" /min mariadb\bin\mariadbd.exe

echo 1: Start Apache
echo 2: Start MariaDB
echo 3: Start all

choice /C 123

if %errorlevel% == 1 goto start_apache
if %errorlevel% == 2 goto start_mariadb
if %errorlevel% == 3 goto start_all

goto end

:start_apache
%start_apache_cmd%
goto end

:start_mariadb
%start_mariadb_cmd%
goto end:

:start_all
%start_mariadb_cmd%
%start_apache_cmd%
goto end

:end
endlocal
