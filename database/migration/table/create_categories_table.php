<?php

namespace Database\migration\table;

use Database\migration\BaseMigration;

/**
 *
 */
class create_categories_table extends BaseMigration
{


    /**
     * @var string
     */
    public string $table = "categories";

    /**
     * @return array
     */
    public function create(): array
    {
        $data = [];
        $data['id'] = 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY';
        $data['name'] = 'varchar(255)';
        $data['slug'] = 'varchar(255)';
        return $data;
    }

}