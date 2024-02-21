<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221015037 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type_offre (id INT AUTO_INCREMENT NOT NULL, nom_offre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE categorie_type DROP FOREIGN KEY FK_FBF7D07E30C3875B');
        $this->addSql('DROP TABLE categorie_type');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_type (id INT AUTO_INCREMENT NOT NULL, nom_type_id INT DEFAULT NULL, INDEX IDX_FBF7D07E30C3875B (nom_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE categorie_type ADD CONSTRAINT FK_FBF7D07E30C3875B FOREIGN KEY (nom_type_id) REFERENCES offre (id)');
        $this->addSql('DROP TABLE type_offre');
    }
}
