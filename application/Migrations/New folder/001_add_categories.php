<?php

class Migration_Add_categories extends CI_Migration {

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
                        'null' => FALSE,
                    ),
                    'description' => array(
                        'type' => 'text',
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
                        'null' => FALSE,
                    ),
                )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('categories');
    }

    public function down() {
        $this->dbforge->drop_table('categories');
    }

}
?>

