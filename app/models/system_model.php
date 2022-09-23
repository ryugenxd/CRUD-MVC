<?php
class system_model {
  private $posts = POSTS_TABLE;
  private $db;
  public function __construct(){
    $this -> db = new Database;
  }
  public function post($data){
    $this -> db -> query("INSERT INTO {$this->posts} (gambar,konteks,kategori) VALUES (:img,:text,:ct)");
    $this -> db -> bind('img',$data['gambar']);
    $this -> db -> bind('text',$data['konteks']);
    $this -> db -> bind('ct',$data['kategori']);
    return $this -> db -> rowCount();
  }
  public function getPost(){
    $this-> db -> query("SELECT * FROM {$this->posts}");
    return $this->db-> resultSet();
  }
  public function getDelete($data){
    $this-> db -> query("DELETE FROM {$this->posts} WHERE id=:id");
    $this -> db -> bind('id',$data['id']);
    return $this->db-> rowCount();
  }
  //jika result bool masalah nya adalah query 
  public function getPostById($id){
    $this-> db -> query("SELECT * FROM {$this->posts} WHERE id=:id");
    $this -> db -> bind('id',$id);
    return $this->db-> single();
  }
  public function getPostByCategory($ct){
    $this-> db -> query("SELECT * FROM {$this->posts} WHERE kategori=:ct");
    $this -> db -> bind('ct',$ct);
    return $this->db-> resultSet();
  }
  public function getUpdate($data){
    $this -> db -> query("UPDATE {$this->posts} SET gambar=:gambar,konteks=:konteks,kategori=:kategori WHERE id=:id");
    $this -> db -> bind('gambar',$data['gambar']);
    $this -> db -> bind('konteks',$data['konteks']);
    $this -> db -> bind('kategori',$data['kategori']);
    $this -> db -> bind('id',$data['id']);
    return $this -> db -> rowCount();
  }
}