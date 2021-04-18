<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210418071638 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE notes (id INT AUTO_INCREMENT NOT NULL, fournisseur_id INT DEFAULT NULL, client_id INT DEFAULT NULL, probleme_rdv TINYINT(1) NOT NULL, prix_service TINYINT(1) NOT NULL, niveau_satisfaction INT NOT NULL, utiliszer_service TINYINT(1) NOT NULL, commentaire VARCHAR(255) DEFAULT NULL, INDEX IDX_11BA68C670C757F (fournisseur_id), INDEX IDX_11BA68C19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE notes ADD CONSTRAINT FK_11BA68C670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE notes ADD CONSTRAINT FK_11BA68C19EB6921 FOREIGN KEY (client_id) REFERENCES users (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE notes');
    }
}
