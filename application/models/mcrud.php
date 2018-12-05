<?php
if (!defined('BASEPATH'))
 exit('No direct script access allowed');

class Mcrud extends CI_Model {

  function addArticle(){
    $title =  $_POST['title'];
    $description =  $_POST['description'];
    $keywords = $_POST['keywords'];
    $path = $_POST['path'];
    $article = html_entity_decode($_POST['article']);
    $now = date('y/m/d');

      $data = array('title'=> $title,
          'content'=>$article,
          'keywords'=> $keywords,
          'description'=> $description,
          'path' => $path,
           'created'=>$now
          );
          $this->db->insert('tinymce', $data);
  }
//
 function view() {
  $this->db->order_by("id","desc");
  $query =  $this->db->get('tinymce');

  foreach ($query->result() as $row){
     $pages[] = $row;
  }
  return $pages;
 }

//
 function edit($a) {
  $d = $this->db->get_where('tinymce', array('id' => $a))->row();
  return $d;
 }

 function delete($a) {
  $this->db->delete('tinymce', array('id' => $a));
  return;
 }
 function update($id,$title,$keywords,$description,$path ,$article) {
   $now = date('y/m/d');
   $Addtitle = $title;
   $Addarticle = $article;
   $Addkeywords = $keywords;
   $Addescription = $description;
   $Addpath = $path;

   $data = array('title'=> $Addtitle,
       'content'=>$Addarticle,
       'keywords'=> $Addkeywords,
       'description'=> $Addescription,
       'path' => $Addpath,
       'created'=>$now
       );

  $this->db->where('id', $id);
  $this->db->update('tinymce', $data);
 }
}
