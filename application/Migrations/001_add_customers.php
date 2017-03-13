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
                    'first_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 255,
                        'null' => TRUE,
                    ),
                    'last_name' => array(
                        'type' => 'text',
                        'null' => TRUE,
                    ),
                    'nationality' => array(
                        'type' => 'varchar',
                        'constraint' => 255,
                        'null' => TRUE,
                    ),
                    'contact_number' => array(
                        'type' => 'varchar',
                        'constraint' => 50,
                        'null' => TRUE,
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
                        'null' => TRUE,
                    ),
                )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('customers');
    }

    public function down() {
        $this->dbforge->drop_table('customers');
    }

}

?>
