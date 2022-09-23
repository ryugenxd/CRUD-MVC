<div class="container-fluid vh-100">
  <div class="container">
    <div class="row">

     <?foreach($data['postingan'] as $post):?>
      <div class="col-sm-3 col-md-6 my-5 justify-content-center d-flex ">
        
        <div class="card shadow" style="width: 18rem;">
            <img src="<?=$post['gambar'] ?  BASE_URL.'/assets/'.$post['gambar'] : 'https://media2.giphy.com/media/3o7bul4bNw60uhhQyI/200w.gif?cid=82a1493b8ugrt3gnvdbb2lvpyev9iuais5y70ob504fuqks7&rid=200w.gif&ct=g';?>" class="card-img-top" alt="...">
            <div class="card-body">
              <b class="text-success"><?=$post['kategori'];?></b>
              <p class="card-text"><?=$post['konteks'];?></p>
              <form action="<?=BASE_URL;?>/home/delete" method="post">
               <input type="hidden" value="<?=$post['gambar'];?>" name="img">
               <input type="hidden" value="<?=$post['id'];?>" name="id">
              <a href="<?=BASE_URL;?>/home/edit/<?=$post['id'];?>" class="btn btn-success mx-2">Edit</a>
              <button type="submit" class="btn btn-danger mx-2">hapus</button>
              </form>
            </div>
        </div>
        
        
      </div>
      <?endforeach;?>



    </div>
  </div>
</div>