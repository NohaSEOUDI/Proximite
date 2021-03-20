<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210312031210 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(25) NOT NULL, nom VARCHAR(25) NOT NULL, prenom VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_service (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, valide_par_admin TINYINT(1) DEFAULT NULL, titre VARCHAR(100) NOT NULL, telephone INT NOT NULL, adresse VARCHAR(50) NOT NULL, creneau_base INT NOT NULL, tarif DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE service CHANGE creneau_base creneau_base TIME NOT NULL');
        $this->addSql('CREATE TABLE calendrier (id INT AUTO_INCREMENT NOT NULL, service_id INT DEFAULT NULL, lundi_debut TIME DEFAULT NULL, lundi_fin TIME DEFAULT NULL, mardi_debut TIME DEFAULT NULL, mardi_fin TIME DEFAULT NULL, mercredi_debut TIME DEFAULT NULL, mercredi_fin TIME DEFAULT NULL, jeudi_debut TIME DEFAULT NULL, jeudi_fin TIME DEFAULT NULL, vendredi_debut TIME DEFAULT NULL, vendredi_fin TIME DEFAULT NULL, samedi_debut TIME DEFAULT NULL, samedi_fin TIME DEFAULT NULL, dimanche_debut TIME DEFAULT NULL, dimanche_fin TIME DEFAULT NULL, UNIQUE INDEX UNIQ_B2753CB9ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE calendrier ADD CONSTRAINT FK_B2753CB9ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE type_service');
        $this->addSql('DROP TABLE service');
        $this->addSql('ALTER TABLE service CHANGE creneau_base creneau_base DATETIME NOT NULL');
        $this->addSql('DROP TABLE calendrier');
    }

}
