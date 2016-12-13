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

### Update accents

```
UPDATE place SET name = REPLACE(name, 'Ã©', 'é'), address = REPLACE(address, 'Ã©', 'é'), address_1 = REPLACE(address_1, 'Ã©', 'é'), address_2 = REPLACE(address_2, 'Ã©', 'é'), city = REPLACE(city, 'Ã©', 'é'), history = REPLACE(history, 'Ã©', 'é'), schedule_notes = REPLACE(schedule_notes, 'Ã©', 'é'), schedule_eucharist = REPLACE(schedule_eucharist, 'Ã©', 'é');
UPDATE place SET name = REPLACE(name, 'Ã¨', 'è'), address = REPLACE(address, 'Ã¨', 'è'), address_1 = REPLACE(address_1, 'Ã¨', 'è'), address_2 = REPLACE(address_2, 'Ã¨', 'è'), city = REPLACE(city, 'Ã¨', 'è'), history = REPLACE(history, 'Ã¨', 'è'), schedule_notes = REPLACE(schedule_notes, 'Ã¨', 'è'), schedule_eucharist = REPLACE(schedule_eucharist, 'Ã¨', 'è');
UPDATE place SET name = REPLACE(name, 'Ã§', 'ç'), address = REPLACE(address, 'Ã§', 'ç'), address_1 = REPLACE(address_1, 'Ã§', 'ç'), address_2 = REPLACE(address_2, 'Ã§', 'ç'), city = REPLACE(city, 'Ã§', 'ç'), history = REPLACE(history, 'Ã§', 'ç'), schedule_notes = REPLACE(schedule_notes, 'Ã§', 'ç'), schedule_eucharist = REPLACE(schedule_eucharist, 'Ã§', 'ç');
UPDATE place SET name = REPLACE(name, 'Å“', 'œ'), address = REPLACE(address, 'Å“', 'œ'), address_1 = REPLACE(address_1, 'Å“', 'œ'), address_2 = REPLACE(address_2, 'Å“', 'œ'), city = REPLACE(city, 'Å“', 'œ'), history = REPLACE(history, 'Å“', 'œ'), schedule_notes = REPLACE(schedule_notes, 'Å“', 'œ'), schedule_eucharist = REPLACE(schedule_eucharist, 'Å“', 'œ');
UPDATE place SET name = REPLACE(name, 'Ã¢', 'â'), address = REPLACE(address, 'Ã¢', 'â'), address_1 = REPLACE(address_1, 'Ã¢', 'â'), address_2 = REPLACE(address_2, 'Ã¢', 'â'), city = REPLACE(city, 'Ã¢', 'â'), history = REPLACE(history, 'Ã¢', 'â'), schedule_notes = REPLACE(schedule_notes, 'Ã¢', 'â'), schedule_eucharist = REPLACE(schedule_eucharist, 'Ã¢', 'â');
UPDATE place SET name = REPLACE(name, 'Ã‰', 'É'), address = REPLACE(address, 'Ã‰', 'É'), address_1 = REPLACE(address_1, 'Ã‰', 'É'), address_2 = REPLACE(address_2, 'Ã‰', 'É'), city = REPLACE(city, 'Ã‰', 'É'), history = REPLACE(history, 'Ã‰', 'É'), schedule_notes = REPLACE(schedule_notes, 'Ã‰', 'É'), schedule_eucharist = REPLACE(schedule_eucharist, 'Ã‰', 'É');
UPDATE place SET name = REPLACE(name, 'Ã´', 'ô'), address = REPLACE(address, 'Ã´', 'ô'), address_1 = REPLACE(address_1, 'Ã´', 'ô'), address_2 = REPLACE(address_2, 'Ã´', 'ô'), city = REPLACE(city, 'Ã´', 'ô'), history = REPLACE(history, 'Ã´', 'ô'), schedule_notes = REPLACE(schedule_notes, 'Ã´', 'ô'), schedule_eucharist = REPLACE(schedule_eucharist, 'Ã´', 'ô');
UPDATE place SET name = REPLACE(name, 'Ã®', 'î'), address = REPLACE(address, 'Ã®', 'î'), address_1 = REPLACE(address_1, 'Ã®', 'î'), address_2 = REPLACE(address_2, 'Ã®', 'î'), city = REPLACE(city, 'Ã®', 'î'), history = REPLACE(history, 'Ã®', 'î'), schedule_notes = REPLACE(schedule_notes, 'Ã®', 'î'), schedule_eucharist = REPLACE(schedule_eucharist, 'Ã®', 'î');
UPDATE place SET name = REPLACE(name, 'Ì‚', 'â'), address = REPLACE(address, 'Ì‚', 'â'), address_1 = REPLACE(address_1, 'Ì‚', 'â'), address_2 = REPLACE(address_2, 'Ì‚', 'â'), city = REPLACE(city, 'Ì‚', 'â'), history = REPLACE(history, 'Ì‚', 'â'), schedule_notes = REPLACE(schedule_notes, 'Ì‚', 'â'), schedule_eucharist = REPLACE(schedule_eucharist, 'Ì‚', 'â');
UPDATE place SET name = REPLACE(name, 'aâ', 'â'), address = REPLACE(address, 'aâ', 'â'), address_1 = REPLACE(address_1, 'aâ', 'â'), address_2 = REPLACE(address_2, 'aâ', 'â'), city = REPLACE(city, 'aâ', 'â'), history = REPLACE(history, 'aâ', 'â'), schedule_notes = REPLACE(schedule_notes, 'aâ', 'â'), schedule_eucharist = REPLACE(schedule_eucharist, 'aâ', 'â');
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

