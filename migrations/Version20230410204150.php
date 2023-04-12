<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230410204150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit_materieux DROP FOREIGN KEY produit_materieux_ibfk_1');
        $this->addSql('ALTER TABLE produit_materieux DROP FOREIGN KEY produit_materieux_ibfk_2');
        $this->addSql('DROP TABLE produit_materieux');
        $this->addSql('ALTER TABLE actualite CHANGE nomactualite nomactualite VARCHAR(500) NOT NULL, CHANGE image image VARCHAR(500) NOT NULL, CHANGE description description VARCHAR(500) NOT NULL, CHANGE lien lien VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE admin DROP FOREIGN KEY perssonne_admin');
        $this->addSql('DROP INDEX perssonne_admin ON admin');
        $this->addSql('ALTER TABLE admin CHANGE idAdmin idadmin INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE categorie CHANGE nomCategorie nomcategorie VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY perssonne_client');
        $this->addSql('DROP INDEX client_evaluation ON client');
        $this->addSql('ALTER TABLE client CHANGE idClient idclient INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY client_commande');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY commande_livreur');
        $this->addSql('DROP INDEX client_commande ON commande');
        $this->addSql('ALTER TABLE commande DROP idClient');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY evaluation_ibfk_1');
        $this->addSql('DROP INDEX id_personne ON evaluation');
        $this->addSql('ALTER TABLE evaluation DROP id_personne, CHANGE contenu contenu VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE event CHANGE nom nom VARCHAR(500) NOT NULL, CHANGE description description VARCHAR(500) NOT NULL, CHANGE image image VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE livreur DROP FOREIGN KEY perssonne_livreur');
        $this->addSql('DROP INDEX perssonne_livreur ON livreur');
        $this->addSql('ALTER TABLE livreur CHANGE idLivreur idlivreur INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE materiaux MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON materiaux');
        $this->addSql('ALTER TABLE materiaux CHANGE type type VARCHAR(500) NOT NULL, CHANGE taux_recyclage taux_recyclage VARCHAR(500) NOT NULL, CHANGE duree_vie duree_vie VARCHAR(500) NOT NULL, CHANGE condition_utilisation condition_utilisation VARCHAR(500) NOT NULL, CHANGE id idmateriaux INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE materiaux ADD PRIMARY KEY (idmateriaux)');
        $this->addSql('ALTER TABLE offre CHANGE nomoffre nomoffre VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY produit_panier');
        $this->addSql('DROP INDEX id_livreur ON personne');
        $this->addSql('DROP INDEX id_admin ON personne');
        $this->addSql('DROP INDEX id_client ON personne');
        $this->addSql('DROP INDEX id_fournisseur ON personne');
        $this->addSql('ALTER TABLE personne CHANGE email email VARCHAR(500) NOT NULL, CHANGE motdepasse motdepasse VARCHAR(500) NOT NULL, CHANGE nom nom VARCHAR(500) NOT NULL, CHANGE prenom prenom VARCHAR(500) NOT NULL, CHANGE adresse adresse VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE product CHANGE name name VARCHAR(500) NOT NULL, CHANGE description description VARCHAR(500) NOT NULL, CHANGE image image VARCHAR(500) NOT NULL');
        $this->addSql('DROP INDEX idCategorie ON produit');
        $this->addSql('DROP INDEX idCommande ON produit');
        $this->addSql('DROP INDEX idActualite ON produit');
        $this->addSql('DROP INDEX idPanier ON produit');
        $this->addSql('DROP INDEX idFournisseur ON produit');
        $this->addSql('ALTER TABLE produit CHANGE name name VARCHAR(500) NOT NULL, CHANGE prix prix INT NOT NULL, CHANGE desc_p desc_p VARCHAR(500) NOT NULL, CHANGE image image VARCHAR(500) NOT NULL, CHANGE idFournisseur idfournisseur INT NOT NULL, CHANGE idCommande idcommande INT NOT NULL, CHANGE idActualite idactualite INT NOT NULL, CHANGE idPanier idpanier INT NOT NULL, CHANGE idCategorie idcategorie INT NOT NULL');
        $this->addSql('ALTER TABLE visiteur DROP FOREIGN KEY visiteur_client');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produit_materieux (idProduit INT NOT NULL, idMateriel INT NOT NULL, INDEX idMateriel (idMateriel), INDEX IDX_145B9015391C87D5 (idProduit), PRIMARY KEY(idProduit, idMateriel)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE produit_materieux ADD CONSTRAINT produit_materieux_ibfk_1 FOREIGN KEY (idMateriel) REFERENCES materiaux (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit_materieux ADD CONSTRAINT produit_materieux_ibfk_2 FOREIGN KEY (idProduit) REFERENCES product (id_Product) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE actualite CHANGE nomactualite nomactualite VARCHAR(20) NOT NULL, CHANGE image image VARCHAR(100) NOT NULL, CHANGE description description VARCHAR(100) NOT NULL, CHANGE lien lien VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE admin CHANGE idadmin idAdmin INT NOT NULL');
        $this->addSql('ALTER TABLE admin ADD CONSTRAINT perssonne_admin FOREIGN KEY (idAdmin) REFERENCES personne (id_personne)');
        $this->addSql('CREATE INDEX perssonne_admin ON admin (idAdmin)');
        $this->addSql('ALTER TABLE categorie CHANGE nomcategorie nomCategorie VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE client CHANGE idclient idClient INT NOT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT perssonne_client FOREIGN KEY (idClient) REFERENCES personne (id_personne)');
        $this->addSql('CREATE INDEX client_evaluation ON client (idClient)');
        $this->addSql('ALTER TABLE commande ADD idClient INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT client_commande FOREIGN KEY (idClient) REFERENCES client (idClient)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT commande_livreur FOREIGN KEY (idCommande) REFERENCES livreur (idLivreur)');
        $this->addSql('CREATE INDEX client_commande ON commande (idClient)');
        $this->addSql('ALTER TABLE evaluation ADD id_personne INT NOT NULL, CHANGE contenu contenu TEXT NOT NULL');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT evaluation_ibfk_1 FOREIGN KEY (id_personne) REFERENCES personne (id_personne)');
        $this->addSql('CREATE INDEX id_personne ON evaluation (id_personne)');
        $this->addSql('ALTER TABLE event CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE livreur CHANGE idlivreur idLivreur INT NOT NULL');
        $this->addSql('ALTER TABLE livreur ADD CONSTRAINT perssonne_livreur FOREIGN KEY (idLivreur) REFERENCES personne (id_personne)');
        $this->addSql('CREATE INDEX perssonne_livreur ON livreur (idLivreur)');
        $this->addSql('ALTER TABLE materiaux MODIFY idmateriaux INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON materiaux');
        $this->addSql('ALTER TABLE materiaux CHANGE type type VARCHAR(30) NOT NULL, CHANGE taux_recyclage taux_recyclage VARCHAR(30) NOT NULL, CHANGE duree_vie duree_vie VARCHAR(30) NOT NULL, CHANGE condition_utilisation condition_utilisation VARCHAR(30) NOT NULL, CHANGE idmateriaux id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE materiaux ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE offre CHANGE nomoffre nomoffre VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT produit_panier FOREIGN KEY (idPanier) REFERENCES produit (id_produit)');
        $this->addSql('ALTER TABLE personne CHANGE email email VARCHAR(50) NOT NULL, CHANGE motdepasse motdepasse VARCHAR(20) NOT NULL, CHANGE nom nom VARCHAR(20) NOT NULL, CHANGE prenom prenom VARCHAR(20) NOT NULL, CHANGE adresse adresse VARCHAR(50) NOT NULL');
        $this->addSql('CREATE INDEX id_livreur ON personne (id_livreur)');
        $this->addSql('CREATE INDEX id_admin ON personne (id_admin)');
        $this->addSql('CREATE INDEX id_client ON personne (id_client)');
        $this->addSql('CREATE INDEX id_fournisseur ON personne (id_fournisseur)');
        $this->addSql('ALTER TABLE product CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE name name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE produit CHANGE name name VARCHAR(200) NOT NULL, CHANGE prix prix INT DEFAULT NULL, CHANGE desc_p desc_p VARCHAR(300) DEFAULT NULL, CHANGE image image LONGBLOB DEFAULT NULL, CHANGE idfournisseur idFournisseur INT DEFAULT NULL, CHANGE idcommande idCommande INT DEFAULT NULL, CHANGE idactualite idActualite INT DEFAULT NULL, CHANGE idpanier idPanier INT DEFAULT NULL, CHANGE idcategorie idCategorie INT DEFAULT NULL');
        $this->addSql('CREATE INDEX idCategorie ON produit (idCategorie)');
        $this->addSql('CREATE INDEX idCommande ON produit (idCommande)');
        $this->addSql('CREATE INDEX idActualite ON produit (idActualite)');
        $this->addSql('CREATE INDEX idPanier ON produit (idPanier)');
        $this->addSql('CREATE INDEX idFournisseur ON produit (idFournisseur)');
        $this->addSql('ALTER TABLE visiteur ADD CONSTRAINT visiteur_client FOREIGN KEY (idVisiteur) REFERENCES client (idClient)');
    }
}
