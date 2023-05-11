<?php

namespace Database\migration\table;

use Database\migration\BaseMigration;

class create_users_table extends BaseMigration
{

    public string $table = "users";

    /**
     * @inheritDoc
     */
    public function create()
    {
        // TODO: Implement create() method.

        $data = [];
        $data['id'] = 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY';
        $data['name'] = 'varchar(255)';
        $data['email'] = 'varchar(255)';
        $data['password'] = 'varchar(255)';
        return $data;
    }
}