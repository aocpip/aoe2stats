@echo off
:: powershell -ExecutionPolicy ByPass -File dev-shell.ps1
for /f %%i in ('docker-compose run -d dev tail -f /dev/null') do set INSTANCE_NAME=%%i
docker exec -it %INSTANCE_NAME% /bin/ash
docker stop %INSTANCE_NAME% >NUL
docker rm %INSTANCE_NAME% >NUL