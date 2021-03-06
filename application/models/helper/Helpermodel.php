<?php
class Helpermodel extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }


    function get_all_code(){
        $query = $this->db->get('code');
        return $query->result();

    }

    function get_one_code($sequence){
        $this->db->where('sequence', $sequence);
        $query = $this->db->get('code');

        return $query->row();
    }

    function save_code($postdata){
        

        
        $this->db->set('date', 'NOW()', FALSE);
        //var_dump($postdata);
        //$timeStamp    = time();
        //$data = array('content' => $code, 'date' => $timeStamp );
        $this->db->insert('code', $postdata);


    }

}