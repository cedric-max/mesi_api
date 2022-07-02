<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220702145258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shoe ADD CONSTRAINT FK_C1B7A84960E5AF8F FOREIGN KEY (shoe_color_id) REFERENCES color (id)');
        $this->addSql('CREATE INDEX IDX_C1B7A84960E5AF8F ON shoe (shoe_color_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shoe DROP FOREIGN KEY FK_C1B7A84960E5AF8F');
        $this->addSql('DROP INDEX IDX_C1B7A84960E5AF8F ON shoe');
    }
}
