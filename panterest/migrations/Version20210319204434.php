<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319204434 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, uuid VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password2 VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE service ADD type_id INT NOT NULL, ADD fournisseur_id INT DEFAULT NULL, CHANGE creneau_base creneau_base INT NOT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2C54C8C93 FOREIGN KEY (type_id) REFERENCES type_service (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('CREATE INDEX IDX_E19D9AD2C54C8C93 ON service (type_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E19D9AD2670C757F ON service (fournisseur_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2C54C8C93');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2670C757F');
        $this->addSql('DROP INDEX IDX_E19D9AD2C54C8C93 ON service');
        $this->addSql('DROP INDEX UNIQ_E19D9AD2670C757F ON service');
        $this->addSql('ALTER TABLE service DROP type_id, DROP fournisseur_id, CHANGE creneau_base creneau_base TIME NOT NULL');
    }
}
