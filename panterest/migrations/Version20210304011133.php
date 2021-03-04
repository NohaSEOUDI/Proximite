<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210304011133 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE service ADD fournisseur_id INT NOT NULL, ADD type_id INT NOT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2C54C8C93 FOREIGN KEY (type_id) REFERENCES type_service (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E19D9AD2670C757F ON service (fournisseur_id)');
        $this->addSql('CREATE INDEX IDX_E19D9AD2C54C8C93 ON service (type_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2670C757F');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2C54C8C93');
        $this->addSql('DROP INDEX UNIQ_E19D9AD2670C757F ON service');
        $this->addSql('DROP INDEX IDX_E19D9AD2C54C8C93 ON service');
        $this->addSql('ALTER TABLE service DROP fournisseur_id, DROP type_id');
    }
}
