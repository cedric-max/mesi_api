<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220702140141 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shoe ADD CONSTRAINT FK_C1B7A8495ECA6032 FOREIGN KEY (shoe_brand_id) REFERENCES brand (id)');
        $this->addSql('CREATE INDEX IDX_C1B7A8495ECA6032 ON shoe (shoe_brand_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shoe DROP FOREIGN KEY FK_C1B7A8495ECA6032');
        $this->addSql('DROP INDEX IDX_C1B7A8495ECA6032 ON shoe');
    }
}
