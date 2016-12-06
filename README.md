carpedeum
=========

[![CircleCI](https://circleci.com/gh/carpedeum-fr/carpedeum/tree/master.svg?style=svg)](https://circleci.com/gh/carpedeum-fr/carpedeum/tree/master)

## Importing existing schema

### Reverse engineering

Here is [the doc for reverse engineering](http://symfony.com/doc/current/doctrine/reverse_engineering.html).

As explained in the documentation, we can follow these steps:

```
php bin/console doctrine:mapping:import --force CarpeDeumBundle yml
php bin/console doctrine:mapping:convert annotation ./src
```

And `php bin/console doctrine:generate:entities CarpeDeumBundle` can be replaced by PhpStorm Getter/Setter generation.

If `doctrine:mapping:import` fail like that:

```
  [Symfony\Component\Debug\Exception\ContextErrorException]
  Warning: class_parents(): Class Place does not exist and could not be loaded
```

Then you need to comment `SyliusResourceBundle` in `AppKernel.php`.

### Move to InnoDB

To generate the engine switch :

```
SELECT CONCAT('ALTER TABLE ',table_schema,'.',table_name,' engine=InnoDB;') 
FROM information_schema.tables 
WHERE engine = 'MyISAM';
```

and run the resulting requests that look like :

```
ALTER TABLE geomesse.PLACES engine=InnoDB;
ALTER TABLE geomesse.PLACESCHEDULE engine=InnoDB;
```

### Old stuff

— prerequisites :
```
SET sql_mode=(SELECT REPLACE(@@sql_mode,'NO_ZERO_DATE',''));
```

— 

Allow missing private key : 
- http://stackoverflow.com/questions/6547319/importing-tables-from-external-database-in-symfony2-with-doctrine/15766666#15766666
- https://github.com/albertvolkman/doctrine2/compare/override-primary-key-req.patch

