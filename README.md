carpedeum
=========

CarpeDeum DB

Here is [the doc for reverse engineering](http://symfony.com/doc/current/doctrine/reverse_engineering.html). 

— prerequisites :
```
SET sql_mode=(SELECT REPLACE(@@sql_mode,'NO_ZERO_DATE',''));
```

— to generate the engine switch :
```
SELECT CONCAT('ALTER TABLE ',table_schema,'.',table_name,' engine=InnoDB;') 
FROM information_schema.tables 
WHERE engine = 'MyISAM';
```
and run the resulting requests

Allow missing private key : 
- http://stackoverflow.com/questions/6547319/importing-tables-from-external-database-in-symfony2-with-doctrine/15766666#15766666
- https://github.com/albertvolkman/doctrine2/compare/override-primary-key-req.patch

— To generate entities :
```
php bin/console doctrine:mapping:import --force CarpeDeumBundle yml
// Fix plurals and camelCase in yml files
php bin/console doctrine:mapping:convert annotation ./src
php bin/console doctrine:generate:entities CarpeDeumBundle
```
