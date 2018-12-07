<?php
class Post_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function find_all() {
    return $this->db->get('posts')->result();
  }

  function find_comments($id) {
    return $this->db->get_where('post_comments', array('post_id' => $id))->result();
  }
  
  function read($id) {
    return $this->db->get_where('posts', array('id' => $id))->row();
  }

  function save($post) {
    $this->db->insert('posts', $post);
  }

  function save_comment($comment) {
    $this->db->set('date', 'now()', false);
    $this->db->insert('post_comments', $comment);
  }

  function update($post, $id) {
    $this->db->update('posts', $post, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('posts', array('id' => $id));
  }
}