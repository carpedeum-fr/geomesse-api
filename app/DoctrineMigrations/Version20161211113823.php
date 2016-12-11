<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161211113823 extends AbstractMigration
{
    public function preUp(Schema $schema)
    {
        parent::preUp($schema);

        $this->addSql('UPDATE time SET day_of_week = 1 WHERE day_of_week = "MONDAY"');
        $this->addSql('UPDATE time SET day_of_week = 2 WHERE day_of_week = "TUESDAY"');
        $this->addSql('UPDATE time SET day_of_week = 3 WHERE day_of_week = "WEDNESDAY"');
        $this->addSql('UPDATE time SET day_of_week = 4 WHERE day_of_week = "THURSDAY"');
        $this->addSql('UPDATE time SET day_of_week = 5 WHERE day_of_week = "FRIDAY"');
        $this->addSql('UPDATE time SET day_of_week = 6 WHERE day_of_week = "SATURDAY"');
        $this->addSql('UPDATE time SET day_of_week = 7 WHERE day_of_week = "SUNDAY"');
    }

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX IMPORT_SOURCE ON place');
        $this->addSql('ALTER TABLE place ADD created_at DATETIME NOT NULL, DROP import_source, DROP import_id, DROP import_modified, DROP nb_comments, DROP nb_likes, DROP nb_checkins, CHANGE modified updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE time ADD created_at DATETIME, ADD updated_at DATETIME, DROP kind, CHANGE day_of_week day_of_week INT NOT NULL');
        $this->addSql('ALTER TABLE time RENAME INDEX idx_6f949845d6328574 TO IDX_6F949845DA6A219');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE place ADD modified DATETIME NOT NULL, ADD import_source VARCHAR(100) NOT NULL COLLATE utf8_general_ci, ADD import_id VARCHAR(100) NOT NULL COLLATE utf8_general_ci, ADD import_modified DATETIME DEFAULT NULL, ADD nb_comments BIGINT UNSIGNED NOT NULL, ADD nb_likes BIGINT UNSIGNED NOT NULL, ADD nb_checkins BIGINT UNSIGNED NOT NULL, DROP created_at, DROP updated_at');
        $this->addSql('CREATE INDEX IMPORT_SOURCE ON place (import_source, import_id)');
        $this->addSql('ALTER TABLE time ADD kind VARCHAR(255) NOT NULL COLLATE utf8_general_ci, DROP created_at, DROP updated_at, CHANGE day_of_week day_of_week VARCHAR(255) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE time RENAME INDEX idx_6f949845da6a219 TO IDX_6F949845D6328574');
    }
}
