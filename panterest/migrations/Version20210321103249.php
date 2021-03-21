<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210321103249 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendrier (id INT AUTO_INCREMENT NOT NULL, service_id INT DEFAULT NULL, lundi_debut TIME DEFAULT NULL, lundi_fin TIME DEFAULT NULL, mardi_debut TIME DEFAULT NULL, mardi_fin TIME DEFAULT NULL, mercredi_debut TIME DEFAULT NULL, mercredi_fin TIME DEFAULT NULL, jeudi_debut TIME DEFAULT NULL, jeudi_fin TIME DEFAULT NULL, vendredi_debut TIME DEFAULT NULL, vendredi_fin TIME DEFAULT NULL, samedi_debut TIME DEFAULT NULL, samedi_fin TIME DEFAULT NULL, dimanche_debut TIME DEFAULT NULL, dimanche_fin TIME DEFAULT NULL, UNIQUE INDEX UNIQ_B2753CB9ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, pseudo_client VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(25) NOT NULL, nom VARCHAR(25) NOT NULL, prenom VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, service_id INT DEFAULT NULL, client_id INT DEFAULT NULL, fournisseur_id INT DEFAULT NULL, validee_par_fournisseur TINYINT(1) DEFAULT NULL, jour DATE DEFAULT NULL, heure TIME DEFAULT NULL, duree TIME DEFAULT NULL, UNIQUE INDEX UNIQ_42C84955ED5CA9E6 (service_id), INDEX IDX_42C8495519EB6921 (client_id), INDEX IDX_42C84955670C757F (fournisseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, fournisseur_id INT DEFAULT NULL, valide_par_admin TINYINT(1) DEFAULT NULL, titre VARCHAR(100) NOT NULL, telephone INT NOT NULL, adresse VARCHAR(50) NOT NULL, creneau_base INT NOT NULL, tarif DOUBLE PRECISION NOT NULL, INDEX IDX_E19D9AD2C54C8C93 (type_id), UNIQUE INDEX UNIQ_E19D9AD2670C757F (fournisseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_service (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, uuid VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password2 VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE calendrier ADD CONSTRAINT FK_B2753CB9ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495519EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2C54C8C93 FOREIGN KEY (type_id) REFERENCES type_service (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495519EB6921');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955670C757F');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2670C757F');
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB9ED5CA9E6');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955ED5CA9E6');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2C54C8C93');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE calendrier');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE type_service');
        $this->addSql('DROP TABLE users');
    }
}
