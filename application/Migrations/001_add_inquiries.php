<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Migration_Add_inquiries extends CI_Migration {

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
                        'type' => 'text',
                        'null' => FALSE,
                    ),
                    'title' => array(
                        'type' => 'varchar',
                        'constraint'=> 255,
                        'null' => TRUE,
                    ),
                     'bedrooms' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                         'null'=> FALSE,
                    ),
                     'bathrooms' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                         'null'=> FALSE,
                    ),
                     'hvac' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                         'null'=> TRUE,
                    ),
                     'electrical' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                         'null'=> TRUE,
                    ),
                     'plumbing' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                         'null'=> TRUE,
                    ),
                     'carpenter' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                         'null'=> TRUE,
                    ),
                     'mason' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                         'null'=> TRUE,
                    ),
                    'fullname' => array(
                        'type' => 'text',
                        'null' => FALSE,
                    ),
                    'address' => array(
                        'type' => 'text',
                        'null' => FALSE,
                    ),
                    'email' => array(
                        'type' => 'varchar',
                        'constraint'=> 255,
                        'null' => FALSE,
                    ),
                    'contact' => array(
                        'type' => 'INT',
                        'constraint'=> 11,
                        'null' => FALSE,
                    ),
                    'Comments' => array(
                        'type' => 'text',
                        'null' => TRUE,
                    ),
                    'status' => array(
                        'type' => 'INT',
                        'constraint'=> 11,
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
                        'null' => FALSE,
                    ),
                )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('inquiries');
    }

    public function down() {
        $this->dbforge->drop_table('inquiries');
    }

}
?>