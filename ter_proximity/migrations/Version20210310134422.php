<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210310134422 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(25) NOT NULL, nom VARCHAR(25) NOT NULL, prenom VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jour_service (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, num_jour INT NOT NULL, heure_debut_am TIME DEFAULT NULL, heure_fin_am TIME DEFAULT NULL, heure_debut_pm TIME DEFAULT NULL, heure_fin_pm TIME DEFAULT NULL, INDEX IDX_445E21B1ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, fournisseur_id INT NOT NULL, type_id INT NOT NULL, valide_par_admin TINYINT(1) DEFAULT NULL, titre VARCHAR(100) NOT NULL, telephone INT NOT NULL, adresse VARCHAR(50) NOT NULL, creneau_base INT NOT NULL, tarif DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_E19D9AD2670C757F (fournisseur_id), INDEX IDX_E19D9AD2C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_service (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE jour_service ADD CONSTRAINT FK_445E21B1ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2C54C8C93 FOREIGN KEY (type_id) REFERENCES type_service (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2670C757F');
        $this->addSql('ALTER TABLE jour_service DROP FOREIGN KEY FK_445E21B1ED5CA9E6');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2C54C8C93');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE jour_service');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE type_service');
    }
}
