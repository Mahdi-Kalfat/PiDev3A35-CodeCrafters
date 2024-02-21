<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219162407 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE typeoffre (id INT AUTO_INCREMENT NOT NULL, nom_id INT DEFAULT NULL, INDEX IDX_25AC337CC8121CE9 (nom_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE typeoffre ADD CONSTRAINT FK_25AC337CC8121CE9 FOREIGN KEY (nom_id) REFERENCES offre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE typeoffre DROP FOREIGN KEY FK_25AC337CC8121CE9');
        $this->addSql('DROP TABLE typeoffre');
    }
}
