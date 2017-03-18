<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Migration_Add_tasks extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(
                array(
                    'id' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => true,
                        'auto_increment' => true
                    ),
                    'type' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 255,
                        'null' => FALSE,
                    ),
                    'date_created' => array(
                        'type' => 'datetime',
                        'null' => FALSE,
                    ),
                    'date_modified' => array(
                        'type' => 'datetime',
                        'null' => FALSE,
                    ),
                    'modified_by' => array(
                        'type' => 'int',
                        'constraint' => 11,
                        'null' => FALSE,
                    ),
                )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('tasks');
    }

    public function down() {
        $this->dbforge->drop_table('tasks');
    }

}

?>