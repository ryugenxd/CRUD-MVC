<div class="container-fluid">
  <form action="<?=BASE_URL;?>/home/update" method="POST" enctype="multipart/form-data">
  <input type="hidden" value="<?=$data['postingan']['gambar'];?>" name="old-img">
  <input type="hidden" value="<?=$data['postingan']['id'];?>" name="id">
  <div class="row my-5">
    
    
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">kategori</label>
        <select class="form-select" id="inputGroupSelect01" name='kategori'>
        
       <?foreach($data['kategori'] as $kategori):?>
          <?if($data['postingan']['kategori'] === $kategori):?>
           <option value="<?=$kategori;?>" selected><?=$kategori;?></option>
          <?else:?>
           <option value="<?=$kategori;?>"><?=$kategori;?></option>
          <?endif;?>
        <?endforeach;?>
        
        </select>
   </div>
   
   
   <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupFile01">Gambar</label>
    <input type="file" class="form-control" id="inputGroupFile01" accept="image/*" name="gambar">
   </div>
   <label class="input-group-text">Konteks :</label>
   <div class="input-group mb-3">
     <textarea class="form-control" cols="4" rows="5" name="konteks" ><?=$data['postingan']['konteks'];?></textarea>
   </div>
    <button class="btn btn-outline-secondary " type="submit" >Posting</button>
  </div>
  </form>
</div>