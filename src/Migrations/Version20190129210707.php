<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190129210707 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE abonne (id INT AUTO_INCREMENT NOT NULL, categories_id INT NOT NULL, tarifs_id INT NOT NULL, compteurs_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) NOT NULL, cin INT NOT NULL, date_cin DATE NOT NULL, lieu_cin VARCHAR(255) NOT NULL, profession VARCHAR(255) DEFAULT NULL, telephone INT DEFAULT NULL, reference_client INT NOT NULL, ref_enc INT NOT NULL, INDEX IDX_76328BF0A21214B7 (categories_id), INDEX IDX_76328BF0F5F3287F (tarifs_id), UNIQUE INDEX UNIQ_76328BF0FA6C96D9 (compteurs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, libelle_categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compteur (id INT AUTO_INCREMENT NOT NULL, num_compteur INT NOT NULL, serie VARCHAR(255) DEFAULT NULL, marque VARCHAR(255) DEFAULT NULL, type_compteur VARCHAR(255) DEFAULT NULL, index_compteur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE releve (id INT AUTO_INCREMENT NOT NULL, nouvel_index INT NOT NULL, date_releve DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarif (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) NOT NULL, prix_unitaire_fixe INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonne ADD CONSTRAINT FK_76328BF0A21214B7 FOREIGN KEY (categories_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE abonne ADD CONSTRAINT FK_76328BF0F5F3287F FOREIGN KEY (tarifs_id) REFERENCES tarif (id)');
        $this->addSql('ALTER TABLE abonne ADD CONSTRAINT FK_76328BF0FA6C96D9 FOREIGN KEY (compteurs_id) REFERENCES compteur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE abonne DROP FOREIGN KEY FK_76328BF0A21214B7');
        $this->addSql('ALTER TABLE abonne DROP FOREIGN KEY FK_76328BF0FA6C96D9');
        $this->addSql('ALTER TABLE abonne DROP FOREIGN KEY FK_76328BF0F5F3287F');
        $this->addSql('DROP TABLE abonne');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE compteur');
        $this->addSql('DROP TABLE releve');
        $this->addSql('DROP TABLE tarif');
    }
}
