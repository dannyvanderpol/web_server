@echo off
cd mariadb\bin
start "MariaDB" /min mariadbd.exe

mariadb.exe -uroot
