# Local Development

`/Applications/MAMP/conf/apache/extra/httpd-vhosts.conf`

```
<VirtualHost *:80>
    ServerAdmin amy@pork-chop.org
    DocumentRoot "/Users/adalrymple/Sites/amydalrymple.dev/" 
    ServerName amydalrymple.dev
    ServerAlias www.amydalrymple.dev

    <Directory "/Users/adalrymple/Sites/amydalrymple.dev">
        Options All
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
```