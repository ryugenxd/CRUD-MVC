<?php


class api extends Controller {
  public function index(){
    if(isset($_POST['input'])){
      $data = $this -> model('system_model')->getPostByCategory($_POST['input']);
      if(!empty($data)){
        foreach ($data as $d){?>
          <div class="card shadow" style="width: 18rem;">
            <img src="<?=$d['gambar'] ? BASE_URL.'/assets/'.$d['gambar'] :  'https://media2.giphy.com/media/3o7bul4bNw60uhhQyI/200w.gif?cid=82a1493b8ugrt3gnvdbb2lvpyev9iuais5y70ob504fuqks7&rid=200w.gif&ct=g';?>" class="card-img-top" alt="...">
            <div class="card-body">
              <b class="text-success"><?=$d['kategori'];?></b>
              <p class="card-text"><?=$d['konteks'];?></p>
            </div>
           </div>
      <?}}else{
        echo "Tidak Dapat Menemukan Postingan !";
      }
    }
  }
}?>