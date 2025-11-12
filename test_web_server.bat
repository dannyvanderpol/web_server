@echo off

cd apache\bin
start "Apache" /min httpd.exe

start http://localhost:8080
