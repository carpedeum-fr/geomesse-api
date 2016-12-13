<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Switch to small caps
 */
class Version20161206154036 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql('RENAME TABLE PLACES to place');
        $this->addSql('RENAME TABLE PLACESCHEDULE to time');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('RENAME TABLE place to PLACES');
        $this->addSql('RENAME TABLE time to PLACESCHEDULE');
    }
}
