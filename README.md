# projet2_Layssar

attention htaccess git ignore

RewriteEngine On
RewriteBase /commerce_2/projet2_kedjo/

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [L]
