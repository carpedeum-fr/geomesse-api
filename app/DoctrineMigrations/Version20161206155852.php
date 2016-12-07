<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161206155852 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql("SET sql_mode=(SELECT REPLACE(@@sql_mode,'NO_ZERO_DATE',''))");
        $this->addSql('ALTER TABLE place CHANGE INFO_ADDRESS_ZIP zip_code LONGTEXT NOT NULL, CHANGE INFO_ADDRESS_CITY city LONGTEXT NOT NULL, CHANGE INFO_ADDRESS_COUNTRY country LONGTEXT NOT NULL, CHANGE INFO_URL url LONGTEXT NOT NULL, CHANGE INFO_TEL telephone LONGTEXT NOT NULL, CHANGE INFO_HISTORY history LONGTEXT NOT NULL, CHANGE NUM_COMMENTS nb_comments BIGINT UNSIGNED NOT NULL, CHANGE NUM_LIKES nb_likes BIGINT UNSIGNED NOT NULL, CHANGE NUM_CHECKINS nb_checkins BIGINT UNSIGNED NOT NULL, DROP ancien_type, DROP ancien_id, CHANGE NAME name VARCHAR(100) NOT NULL, CHANGE TYPE type VARCHAR(255) NOT NULL, CHANGE PIC pic VARCHAR(200) NOT NULL, CHANGE GEO_LAT geo_lat DOUBLE PRECISION NOT NULL, CHANGE GEO_LNG geo_lng DOUBLE PRECISION NOT NULL, CHANGE MODIFIED modified DATETIME NOT NULL, CHANGE IMPORT_SOURCE import_source VARCHAR(100) NOT NULL, CHANGE IMPORT_ID import_id VARCHAR(100) NOT NULL, CHANGE IMPORT_MODIFIED import_modified DATETIME DEFAULT NULL');
        $this->addSql('DROP INDEX PLACE_ID ON time');
        $this->addSql('ALTER TABLE time CHANGE PLACE_ID place_id BIGINT UNSIGNED DEFAULT NULL, CHANGE KIND kind VARCHAR(255) NOT NULL, CHANGE dayofweek day_of_week VARCHAR(255) NOT NULL');
        $this->addSql('DELETE FROM time WHERE id IN (5802, 6142, 16074, 16428, 16429)');
        $this->addSql('ALTER TABLE time ADD CONSTRAINT FK_6F949845D6328574 FOREIGN KEY (place_id) REFERENCES place (id)');
        $this->addSql('CREATE INDEX IDX_6F949845D6328574 ON time (place_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE place ADD ancien_type VARCHAR(100) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, ADD INFO_ADDRESS_ZIP TEXT NOT NULL COLLATE latin1_swedish_ci, ADD INFO_ADDRESS_CITY TEXT NOT NULL COLLATE latin1_swedish_ci, ADD INFO_ADDRESS_COUNTRY TEXT NOT NULL COLLATE latin1_swedish_ci, ADD INFO_URL TEXT NOT NULL COLLATE latin1_swedish_ci, ADD INFO_TEL TEXT NOT NULL COLLATE latin1_swedish_ci, ADD INFO_HISTORY TEXT NOT NULL COLLATE latin1_swedish_ci, ADD ancien_id BIGINT UNSIGNED DEFAULT 0 NOT NULL, ADD NUM_COMMENTS BIGINT UNSIGNED DEFAULT 0 NOT NULL, ADD NUM_LIKES BIGINT UNSIGNED DEFAULT 0 NOT NULL, ADD NUM_CHECKINS BIGINT UNSIGNED DEFAULT 0 NOT NULL, DROP zip_code, DROP city, DROP country, DROP url, DROP telephone, DROP history, DROP nb_comments, DROP nb_likes, DROP nb_checkins, CHANGE name NAME VARCHAR(100) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE type TYPE VARCHAR(255) DEFAULT \'CHURCH\' NOT NULL COLLATE latin1_swedish_ci, CHANGE pic PIC VARCHAR(200) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE geo_lat GEO_LAT DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE geo_lng GEO_LNG DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE modified MODIFIED DATETIME DEFAULT CURRENT_TIMESTAMP NULL, CHANGE import_source IMPORT_SOURCE VARCHAR(100) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE import_id IMPORT_ID VARCHAR(100) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE import_modified IMPORT_MODIFIED DATETIME DEFAULT \'0000-00-00 00:00:00\' NOT NULL');
        $this->addSql('ALTER TABLE time DROP FOREIGN KEY FK_6F949845D6328574');
        $this->addSql('DROP INDEX IDX_6F949845D6328574 ON time');
        $this->addSql('ALTER TABLE time ADD PLACE_ID BIGINT UNSIGNED DEFAULT 0 NOT NULL, DROP place_id_id, CHANGE kind KIND VARCHAR(255) DEFAULT \'WEEKDAY\' NOT NULL COLLATE utf8_general_ci, CHANGE day_of_week DAYOFWEEK VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('CREATE INDEX PLACE_ID ON time (PLACE_ID)');
    }
}
