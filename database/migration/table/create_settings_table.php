<?php

namespace Database\migration\table;

use Database\migration\BaseMigration;

class create_settings_table extends BaseMigration
{

    public string $table = "settings";

    /**
     * @inheritDoc
     */
    public function create()
    {
        // TODO: Implement create() method.

        $data = [];
        $data['id'] = 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY';
        $data['name'] = 'varchar(255)';
        $data['icon'] = 'varchar(255)';
        $data['email'] = 'varchar(255)';
        $data['addresses'] = 'varchar(255)';
        $data['mobile_no'] = 'varchar(255)';
        $data['twitter_link'] = 'varchar(255)';
        $data['instagram_link'] = 'varchar(255)';
        $data['linkedin_link'] = 'varchar(255)';
        return $data;
    }
}