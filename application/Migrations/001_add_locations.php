<?php

class Migration_Add_user extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(
                array(
                    'id' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => true,
                        'auto_increment' => true
                    ),
                    'name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 255,
                        'null' => TRUE,
                    ),
                    'address' => array(
                        'type' => 'text',
                        'null' => TRUE,
                    ),
                    'contact_number' => array(
                        'type' => 'varchar',
                        'constraint' => 50,
                        'null' => TRUE,
                    ),
                     'nationality' => array(
                        'type' => 'varchar',
                        'constraint' => 255,
                        'null' => TRUE,
                    ),
                    'status' => array(
                        'type' => 'int',
                        'constraint' => 11,
                        'null' => TRUE,
                    ),
                    'date_created' => array(
                        'type' => 'datetime',
                        'null' => TRUE,
                    ),
                    'date_modified' => array(
                        'type' => 'datetime',
                        'null' => TRUE,
                    ),
                    'modified_by' => array(
                        'type' => 'int',
                        'constraint' => 11,
                        'null' => TRUE,
                    ),
                )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('locations');
    }

    public function down() {
        $this->dbforge->drop_table('locations');
    }

}
?>
