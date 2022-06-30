<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220630195541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE shoe_order_detail (shoe_id INT NOT NULL, order_detail_id INT NOT NULL, INDEX IDX_12FD5AD52AD16370 (shoe_id), INDEX IDX_12FD5AD564577843 (order_detail_id), PRIMARY KEY(shoe_id, order_detail_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE shoe_order_detail ADD CONSTRAINT FK_12FD5AD52AD16370 FOREIGN KEY (shoe_id) REFERENCES shoe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE shoe_order_detail ADD CONSTRAINT FK_12FD5AD564577843 FOREIGN KEY (order_detail_id) REFERENCES order_detail (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_detail ADD orderdetail_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE order_detail ADD CONSTRAINT FK_ED896F46C2925BBC FOREIGN KEY (orderdetail_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_ED896F46C2925BBC ON order_detail (orderdetail_user_id)');
        $this->addSql('ALTER TABLE review ADD review_shoe_id INT NOT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6B13FD787 FOREIGN KEY (review_shoe_id) REFERENCES shoe (id)');
        $this->addSql('CREATE INDEX IDX_794381C6B13FD787 ON review (review_shoe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE shoe_order_detail');
        $this->addSql('ALTER TABLE order_detail DROP FOREIGN KEY FK_ED896F46C2925BBC');
        $this->addSql('DROP INDEX IDX_ED896F46C2925BBC ON order_detail');
        $this->addSql('ALTER TABLE order_detail DROP orderdetail_user_id');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6B13FD787');
        $this->addSql('DROP INDEX IDX_794381C6B13FD787 ON review');
        $this->addSql('ALTER TABLE review DROP review_shoe_id');
    }
}
