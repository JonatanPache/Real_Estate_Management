# REAL ESTATE MANAGEMENT

## Screenshots

## Specifications

## Demo

## Setup Locally

- Create your config file with your credentials \n
`cp config/config_sample.php config/config.php`

- Database
Run the file `db/script.sql` on phpmyadmin.

- Packages

`composer install`

## Config Files
#### Basic Linux

- 

#### Fedora 
- Services Restart, Start, etc.

```bash
sudo systemctl restart httpd
```

- Configuration HTTPD 

```bash
sudo nano /etc/httpd/conf/httpd.conf
```

- Log Virtual Host

```bash
sudo cat /var/log/httpd/udemyrealstate_error.log
```

- Config Virtual Host

```bash
sudo nano /etc/httpd/conf/udemyrealestate.conf
```

## Issues

### Config's Virtual Host

#### htaccess

- udemyrealstate.com/select_user   *Error*: **client-denied-by-server-configuration**

Dont find the url for rewrite with htaccess, so I fixed add some lines *<Directory>* after custom error, as like:

``` bash
<VirtualHost *:80>
    ServerName udemyrealstate.com
    ServerAlias www.udemyrealstate.com
    DocumentRoot /var/www/html/php/Real_Estate_Management/
    ErrorLog /var/log/httpd/udemyrealstate_error.log
    CustomLog /var/log/httpd/udemyrealstate_access.log combined
    <Directory /var/www/html/php/Real_Estate_Management/>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
We give the permission for override and require all granted.

Ref
[stackoverflow_client-denied-by-server-configuration](https://stackoverflow.com/questions/18392741/apache2-ah01630-client-denied-by-server-configuration)