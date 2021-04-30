<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210429224600 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE UserFournisseur (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, address VARCHAR(100) NOT NULL, tel VARCHAR(100) NOT NULL, open_hour TIME NOT NULL, open_hour2 TIME NOT NULL, post VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE villes_france_free (ville_id INT AUTO_INCREMENT NOT NULL, ville_nom VARCHAR(255) NOT NULL, ville_date DATE NOT NULL, ville_departement VARCHAR(255) NOT NULL, ville_slug VARCHAR(255) NOT NULL, ville_nom_simple VARCHAR(255) NOT NULL, ville_nom_reel VARCHAR(255) NOT NULL, ville_nom_soundex VARCHAR(255) NOT NULL, ville_nom_metaphone VARCHAR(255) NOT NULL, ville_code_postal VARCHAR(255) NOT NULL, ville_commune VARCHAR(255) NOT NULL, ville_code_commune VARCHAR(255) NOT NULL, ville_arrondissement VARCHAR(255) NOT NULL, ville_canton VARCHAR(255) NOT NULL, ville_amdi INT NOT NULL, PRIMARY KEY(ville_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE service ADD city VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE UserFournisseur');
        $this->addSql('DROP TABLE villes_france_free');
        $this->addSql('ALTER TABLE service DROP city');
    }
}
