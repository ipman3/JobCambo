<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_jobs extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'jobs_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'jobs_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),
            'jobs_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('jobs_id', TRUE);
        $this->dbforge->create_table('jobs');
    }

    public function down()
    {
        $this->dbforge->drop_table('jobs');
    }
}