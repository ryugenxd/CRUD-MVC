<div class="container-fluid">
  <form action="<?=BASE_URL;?>/create/tambah" method="POST" enctype="multipart/form-data">
  <div class="row my-5">
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">kategori</label>
        <select class="form-select" id="inputGroupSelect01" name='kategori'>
        <option value="share" selected>share</option>
        <option value="meme">meme</option>
        <option value="quotes">quotes</option>
        </select>
   </div>
   <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupFile01">Gambar</label>
    <input type="file" class="form-control" id="inputGroupFile01" accept="image/*" name="gambar">
   </div>
   <label class="input-group-text">Konteks :</label>
   <div class="input-group mb-3">
     <textarea class="form-control" cols="4" rows="5" name="konteks"></textarea>
   </div>
    <button class="btn btn-outline-secondary " type="submit" >Posting</button>
  </div>
  </form>
</div>