file /etc/apache/sites-available/ishop-fw

```xml
<VirtualHost *:80>
        ServerName ishop-fw
        ServerAlias www.ishop-fw
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/ishop-fw/public
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        <Directory /var/www/ishop-fw/public>
                Options Indexes FollowSymLinks
                AllowOverride All
                Require all granted
        </Directory>

        <Directory /var/www/ishop-fw/app>
                Require all denied
        </Directory>

</VirtualHost>
```