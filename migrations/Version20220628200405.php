<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220628200405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6B13FD787 FOREIGN KEY (review_shoe_id) REFERENCES shoe (id)');
        $this->addSql('CREATE INDEX IDX_794381C6B13FD787 ON review (review_shoe_id)');
        $this->addSql('ALTER TABLE shoe DROP shoe_user');
        $this->addSql('ALTER TABLE user DROP shoes');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6B13FD787');
        $this->addSql('DROP INDEX IDX_794381C6B13FD787 ON review');
        $this->addSql('ALTER TABLE shoe ADD shoe_user INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD shoes INT NOT NULL');
    }
}
