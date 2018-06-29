<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180629043712 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE planet ADD temperature DOUBLE PRECISION NOT NULL, ADD gravity DOUBLE PRECISION NOT NULL, ADD radius VARCHAR(30) DEFAULT NULL, ADD distance VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE zone DROP temperature, DROP gravity, DROP distance, DROP radius');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE planet DROP temperature, DROP gravity, DROP radius, DROP distance');
        $this->addSql('ALTER TABLE zone ADD temperature DOUBLE PRECISION NOT NULL, ADD gravity DOUBLE PRECISION NOT NULL, ADD distance VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, ADD radius VARCHAR(30) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
