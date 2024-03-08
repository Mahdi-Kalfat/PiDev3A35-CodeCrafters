<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240308013328 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, idcommande VARCHAR(255) NOT NULL, nbrprod VARCHAR(255) NOT NULL, prixcommande VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, numliv VARCHAR(255) NOT NULL, zoneliv VARCHAR(255) NOT NULL, dateliv DATETIME NOT NULL, etatliv VARCHAR(255) NOT NULL, lat DOUBLE PRECISION NOT NULL, lon DOUBLE PRECISION NOT NULL, commentaire VARCHAR(255) NOT NULL, idlivreur_id INT DEFAULT NULL, INDEX IDX_A60C9F1F35CD7A3B (idlivreur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE livraison_commande (livraison_id INT NOT NULL, commande_id INT NOT NULL, INDEX IDX_CD1650678E54FB25 (livraison_id), INDEX IDX_CD16506782EA2E54 (commande_id), PRIMARY KEY(livraison_id, commande_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE livreur (id INT AUTO_INCREMENT NOT NULL, idlivreur VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, numtel INT NOT NULL, vehicule VARCHAR(255) NOT NULL, disponibilite VARCHAR(255) NOT NULL, zonelivraison VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F35CD7A3B FOREIGN KEY (idlivreur_id) REFERENCES livreur (id)');
        $this->addSql('ALTER TABLE livraison_commande ADD CONSTRAINT FK_CD1650678E54FB25 FOREIGN KEY (livraison_id) REFERENCES livraison (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livraison_commande ADD CONSTRAINT FK_CD16506782EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F35CD7A3B');
        $this->addSql('ALTER TABLE livraison_commande DROP FOREIGN KEY FK_CD1650678E54FB25');
        $this->addSql('ALTER TABLE livraison_commande DROP FOREIGN KEY FK_CD16506782EA2E54');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE livraison_commande');
        $this->addSql('DROP TABLE livreur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
