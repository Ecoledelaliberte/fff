# Site web école de la liberté

## Développer

### Installer le projet sur windows
```console
Installer xamp et demarer tout puis apuye sur le button explorer 
Aller dans le dossier htdocs, suprimer "index.php" et cloner les fichiers du site dans ce dossier 
Aller dans votre navigateur et taper 'localhost'
```
### Installer le projet sur linux
#### Installer Apache

```console
sudo apt update
sudo apt upgrade
sudo apt update
sudo apt install apache2
sudo chown -R pi:www-data /var/www/html/
sudo chmod -R 770 /var/www/html/
```
#### Installer mysql

```console
sudo apt install php php-mbstring
sudo apt install mariadb-server php-mysql
sudo mysql --user=root
DROP USER 'root'@'localhost';
CREATE USER 'root'@'localhost' IDENTIFIED BY 'MotDePasse';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
```
#### Installer phpmyadmin

```console
sudo apt install phpmyadmin
sudo phpenmod mysqli
sudo /etc/init.d/apache2 restart
```
#### Clonner le code du site
```console
cd /var/www/html
git clone https://github.com/Ecoledelaliberte/site-web.git
```

Et visiter http://localhost/site-web/
