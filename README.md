AMI Exam
============================

INSTALLATION
------------

### Install 

Before you using, please run `composer install` to generate a required files.

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://testsibisnis.test/
~~~


CONFIGURATION
-------------

### Database

Database filename is `testsibisnis.sql` and locate in root folder. 

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=testsibisnsi',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```
