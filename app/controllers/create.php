<?php

class  create extends Controller {
  public function index(){
    $data = [
      'title' => 'Create Post',
      'logo' => 'RyugenXd'
     ];
    $this -> view('paratial/header',$data);
    $this -> view('component/navbar',$data);
    $this->view('layout/create/index');
    $this->view('paratial/footer');
  }
  public function tambah(){
    $file = $_FILES['gambar'];
    $data = [
      'gambar' => Upload::uploadFile($file,"/img/"),
      'konteks' => htmlspecialchars($_POST['konteks']),
      'kategori' => htmlspecialchars($_POST['kategori'])
     ];
     if($this->model("system_model")->post($data)>0){
       Flasher::setFlash("Berhasil Di Upload","success");
       header("Location:".BASE_URL."/create");
       exit;
     }
     else{
       Flasher::setFlash("Gagal Di Upload","error");
       header("Location:".BASE_URL."/create");
       exit;
     }
  }
}