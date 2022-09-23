<script>
const view = document.getElementById('view');
setInterval(() =>{
    let d = document.getElementById('query').value;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "<?=BASE_URL;?>/api", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            view.innerHTML = data;
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("input="+d);
}, 500);
</script>