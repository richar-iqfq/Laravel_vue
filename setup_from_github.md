# Setup project from Github
___
## Dependences
We need to have installed the following dependences:
+ php
+ composer
+ node js
+ npm
___
## Dependences Installation on Ubuntu
### PHP >= 8.1

Add Ondrej PPA to system
```
sudo add-apt-repository ppa:ondrej/php
```
Update apt
```
sudo apt update
```
Install php (By default is the newest version -> 8.2)
```
sudo apt install php
```
To assure that php is installed:
```
php -v
```
___
### PHP extensions

Laravel needs the following extensions:

+ Ctype PHP Extension
+ cURL PHP Extension
+ DOM PHP Extension
+ Fileinfo PHP Extension
+ Filter PHP Extension
+ Hash PHP Extension
+ Mbstring PHP Extension
+ OpenSSL PHP Extension
+ PCRE PHP Extension
+ PDO PHP Extension
+ Session PHP Extension
+ Tokenizer PHP Extension
+ XML PHP Extension

Create a *extensions.txt* file with the following content:
```
zip
unzip
php8.2-common
php8.2-curl
php8.2-xml
php8.2-mbstring
php8.2-zip
```
And execute the following command
```
xargs sudo apt-get install <extensions.txt
```
___
### Composer

The Composer's official page gives us this script for programatically installation:

```
#!/bin/sh

EXPECTED_CHECKSUM="$(php -r 'copy("https://composer.github.io/installer.sig", "php://stdout");')"
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_CHECKSUM="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"

if [ "$EXPECTED_CHECKSUM" != "$ACTUAL_CHECKSUM" ]
then
    >&2 echo 'ERROR: Invalid installer checksum'
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --quiet
RESULT=$?
rm composer-setup.php
exit $RESULT
```
We need to save the code into a file *get_composer.sh* and give execution permissions:
```
sudo chmod 701 get_composer.sh
```
And execute
```
sudo bash get_composer.sh
```
Now we have the file *composer.phar*, a php archive. To perform a globally installation we need to move this file to PATH
```
sudo mv composer.phar /usr/local/bin/composer
```
To execute composer, you only need to run:
```
composer
```
___
### NodeJS
To install the most recent version, we need to run:
```
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash - &&\
sudo apt-get install -y nodejs
```
To assure that NodeJS in installed:
```
node -v
```
___
### npm
To install npm, we need to run the following line:
```
sudo npm install -g npm@latest
```
To assure that npm is installed:
```
npm -v
```
___
### Extra
We need some extra components:
* Apache2
* MySQL

For more information, please check in google how to install on ubuntu each of these.
___
## Cloning repository

```
git clone https://github.com/chemicalScienceForStudents/fennexCSS.git
```
When the folder project has been created, we need to change to the personal branch
```
git checkout -t origin/branch-name
```
___
## Installing Laravel dependences
When all the dependences are installed, inside the project folder we should execute the following lines:

### Creating .env
First of all, we need to crete the .env file from the .env.example file that is already inside the folder project.
```
cp .env.example .env
```
Next, we have to edit the environment variables for the mysql database connection:
```
DB_DATABASE=database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password
```
And finally, we can install the dependences:
```
composer i
npm install
```
It is important to set the application key with the command:
```
php artisan key:generate
```
___
## Running laravel local server
To execute the laravel project, we run:
```
php artisan serve
```
___
## Runing Vite
### Server
For real time refreshing
```
npm run dev
```
### Build
For compiling assets
```
npm run build
```
___
## Seeders and migrations
For preparing the database we run:
```
php artisan migrate:fresh --seed
```