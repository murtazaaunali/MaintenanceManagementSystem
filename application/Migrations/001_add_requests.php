<?php
class Migration_Add_requests extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(
                array(
                    'id' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => true,
                        'auto_increment' => true
                    ),
                    'tittle' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 255,
                        'null' => FALSE,
                    ),
                    'description' => array(
                        'type' => 'text',
                        'null' => TRUE,
                    ),
                    'priority' => array(
                        'type' => 'int',
                        'constraint' => 11,
                        'null' => TRUE,
                    ),
                    'status' => array(
                        'type' => 'int',
                        'constraint' => 11,
                        'null' => FALSE,
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
        $this->dbforge->create_table('requests');
    }

    public function down() {
        $this->dbforge->drop_table('requests');
    }

}
?>
