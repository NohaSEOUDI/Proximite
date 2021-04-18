<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210418060420 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE notes (id INT AUTO_INCREMENT NOT NULL, probleme_rdv TINYINT(1) NOT NULL, prix_service TINYINT(1) NOT NULL, niveau_satisfaction INT NOT NULL, utiliszer_service TINYINT(1) NOT NULL, commentaire VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notes_fournisseur (notes_id INT NOT NULL, fournisseur_id INT NOT NULL, INDEX IDX_DC1344FAFC56F556 (notes_id), INDEX IDX_DC1344FA670C757F (fournisseur_id), PRIMARY KEY(notes_id, fournisseur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notes_user (notes_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_C5C8C0C8FC56F556 (notes_id), INDEX IDX_C5C8C0C8A76ED395 (user_id), PRIMARY KEY(notes_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE notes_fournisseur ADD CONSTRAINT FK_DC1344FAFC56F556 FOREIGN KEY (notes_id) REFERENCES notes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notes_fournisseur ADD CONSTRAINT FK_DC1344FA670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notes_user ADD CONSTRAINT FK_C5C8C0C8FC56F556 FOREIGN KEY (notes_id) REFERENCES notes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notes_user ADD CONSTRAINT FK_C5C8C0C8A76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notes_fournisseur DROP FOREIGN KEY FK_DC1344FAFC56F556');
        $this->addSql('ALTER TABLE notes_user DROP FOREIGN KEY FK_C5C8C0C8FC56F556');
        $this->addSql('DROP TABLE notes');
        $this->addSql('DROP TABLE notes_fournisseur');
        $this->addSql('DROP TABLE notes_user');
    }
}
