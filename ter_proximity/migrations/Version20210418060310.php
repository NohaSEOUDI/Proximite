<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210418060310 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notes CHANGE probleme_rdv probleme_rdv TINYINT(1) NOT NULL, CHANGE prix_service prix_service TINYINT(1) NOT NULL, CHANGE utiliszer_service utiliszer_service TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notes CHANGE probleme_rdv probleme_rdv INT NOT NULL, CHANGE prix_service prix_service INT NOT NULL, CHANGE utiliszer_service utiliszer_service INT NOT NULL');
    }
}
