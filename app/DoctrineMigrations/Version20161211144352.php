<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161211144352 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE place CHANGE created_at created_at DATETIME  NULL, CHANGE updated_at updated_at DATETIME  NULL');
        $this->addSql('UPDATE place SET created_at = NULL WHERE CAST(created_at AS CHAR(20)) = "0000-00-00 00:00:00"');
        $this->addSql('UPDATE place SET updated_at = NULL WHERE CAST(updated_at AS CHAR(20)) = "0000-00-00 00:00:00"');
        $this->addSql('ALTER TABLE place CHANGE info_address address LONGTEXT NOT NULL, CHANGE info_address_1 address_1 LONGTEXT NOT NULL, CHANGE info_address_2 address_2 LONGTEXT NOT NULL, CHANGE schedule_notes notes LONGTEXT NOT NULL, CHANGE schedule_eucharist eucharist LONGTEXT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE place CHANGE address info_address TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE address_1 info_address_1 TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE address_2 info_address_2 TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE notes schedule_notes TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE eucharist schedule_eucharist TEXT NOT NULL COLLATE latin1_swedish_ci');
    }
}
