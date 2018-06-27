<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180627032208 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        // $this->addSql('DROP TABLE zone');
        // $this->addSql('DROP TABLE planet');
        // $this->addSql('DROP TABLE user');
        // $this->addSql('DROP TABLE booking');
        $this->addSql('CREATE TABLE planet (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, description VARCHAR(400) NOT NULL, img VARCHAR(200) DEFAULT NULL, color_start VARCHAR(50) DEFAULT NULL, color_end VARCHAR(50) DEFAULT NULL, video VARCHAR(300) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zone (id INT AUTO_INCREMENT NOT NULL, planet_id INT NOT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(100) NOT NULL, price INT NOT NULL, temperature DOUBLE PRECISION NOT NULL, gravity DOUBLE PRECISION NOT NULL, distance VARCHAR(100) NOT NULL, INDEX IDX_A0EBC007A25E9820 (planet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(200) NOT NULL, password VARCHAR(50) NOT NULL, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE booking (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, zone_id_id INT NOT NULL, day DATE NOT NULL, hour TIME NOT NULL, end_hour TIME NOT NULL, INDEX IDX_E00CEDDE9D86650F (user_id_id), INDEX IDX_E00CEDDED96A31F1 (zone_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDED96A31F1 FOREIGN KEY (zone_id_id) REFERENCES zone (id)');
        $this->addSql('ALTER TABLE zone ADD CONSTRAINT FK_A0EBC007A25E9820 FOREIGN KEY (planet_id) REFERENCES planet (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE zone DROP FOREIGN KEY FK_A0EBC007A25E9820');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE9D86650F');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDED96A31F1');
        $this->addSql('DROP TABLE booking');
        $this->addSql('DROP TABLE planet');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE zone');
    }
}
