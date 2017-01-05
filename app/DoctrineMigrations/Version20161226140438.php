<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161226140438 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE place CHANGE pic_credits pic_credits LONGTEXT DEFAULT NULL, CHANGE pics pics LONGTEXT DEFAULT NULL, CHANGE pics_list pics_list LONGTEXT DEFAULT NULL, CHANGE vids vids LONGTEXT DEFAULT NULL, CHANGE vids_list vids_list LONGTEXT DEFAULT NULL, CHANGE address_2 address_2 LONGTEXT DEFAULT NULL, CHANGE url url LONGTEXT DEFAULT NULL, CHANGE telephone telephone LONGTEXT DEFAULT NULL, CHANGE history history LONGTEXT DEFAULT NULL, CHANGE notes notes LONGTEXT DEFAULT NULL, CHANGE eucharist eucharist LONGTEXT DEFAULT NULL, CHANGE geo_point geo_point POINT NOT NULL COMMENT \'(DC2Type:pointjson)\'');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE place CHANGE pic_credits pic_credits TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE pics pics TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE pics_list pics_list TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE vids vids TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE vids_list vids_list TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE address_2 address_2 LONGTEXT NOT NULL COLLATE utf8_general_ci, CHANGE url url LONGTEXT NOT NULL COLLATE utf8_general_ci, CHANGE telephone telephone LONGTEXT NOT NULL COLLATE utf8_general_ci, CHANGE history history LONGTEXT NOT NULL COLLATE utf8_general_ci, CHANGE notes notes TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE eucharist eucharist TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE geo_point geo_point POLYGON DEFAULT NULL COMMENT \'(DC2Type:polygonjson)\'');
    }
}
