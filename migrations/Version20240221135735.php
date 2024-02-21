<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221135735 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offre ADD type_id INT DEFAULT NULL, DROP type');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866FC54C8C93 FOREIGN KEY (type_id) REFERENCES type_offre (id)');
        $this->addSql('CREATE INDEX IDX_AF86866FC54C8C93 ON offre (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866FC54C8C93');
        $this->addSql('DROP INDEX IDX_AF86866FC54C8C93 ON offre');
        $this->addSql('ALTER TABLE offre ADD type VARCHAR(255) NOT NULL, DROP type_id');
    }
}
