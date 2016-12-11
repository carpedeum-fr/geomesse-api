<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161211121128 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX GEO_LAT ON place');
        $this->addSql('ALTER TABLE place CHANGE geo_lng longitude DOUBLE PRECISION NOT NULL, CHANGE geo_lat latitude DOUBLE PRECISION NOT NULL');

        $this->addSql('ALTER TABLE place ADD geo_point GEOMETRY COMMENT \'(DC2Type:geotext)\'');
        $this->addSql('UPDATE place SET geo_point = ST_GeomFromText(CONCAT("POINT(", longitude, " ", latitude, ")"), 4326)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE place ADD geo_lat DOUBLE PRECISION NOT NULL, ADD geo_lng DOUBLE PRECISION NOT NULL, DROP longitude, DROP latitude, DROP geo_point');
        $this->addSql('CREATE INDEX GEO_LAT ON place (geo_lat, geo_lng)');
    }
}
