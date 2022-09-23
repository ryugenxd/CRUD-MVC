<?php

class home extends Controller {
  public function index(){
    $data = [
      'title' => 'Home',
      'logo' => 'RyugenXd',
      'postingan' => $this->model('system_model')->getPost()
     ];
    $this -> view('paratial/header',$data);
    $this -> view('component/navbar',$data);
    $this -> view('layout/home/index',$data);
    $this -> view('paratial/footer');
  }
  public function delete(){
    if($this->model('system_model')->getDelete($_POST)>0){
      Upload::deleteFile($_POST['img']);
      Flasher::setFlash("Berhasil Di Hapus","success");
      header("Location:".BASE_URL."/home");
      exit;
    }else{
      Flasher::setFlash("Gagal Di Hapus","error");
      header("Location:".BASE_URL."/home");
      exit;
    }
  }
  public function edit($id=null){
    $data = [
      'title' => 'Home',
      'logo' => 'RyugenXd',
      'postingan' => $this -> model('system_model')->getPostById($id),
      'kategori' => ['share','meme','quotes'],
      'id' => $id
     ];
    $this -> view('paratial/header',$data);
    $this -> view('component/navbar',$data);
    $this -> view('layout/edit/index',$data);
    $this -> view('paratial/footer');
  }
  public function update(){
    $file = $_FILES['gambar'];
    $data = [
      'gambar' => Upload::uploadFile($file,"/img/"),
      'konteks' => htmlspecialchars($_POST['konteks']),
      'kategori' => htmlspecialchars($_POST['kategori']),
      'id' => $_POST['id']
     ];
     if($file['error'] === 4){
       $data['gambar'] = $_POST['old-img'];
     }
   if($this->model("system_model")->getUpdate($data)>0){
       Flasher::setFlash("Berhasil Di Update","success");
       header("Location:".BASE_URL."/edit".$data['id']);
       exit;
     }
     else{
       Flasher::setFlash("Gagal Di Update","error");
       header("Location:".BASE_URL."/edit".$data['id']);
       exit;
     }
  }
  public function search(){
    $data = [
      'title' =>'search',
      'logo' => 'RyugenXd'
     ];
    $this -> view('paratial/header',$data);
    $this -> view('component/navbar',$data);
    $this -> view('layout/search/index');
    $this -> ajax('search');
    $this -> view('paratial/footer');
  }
}