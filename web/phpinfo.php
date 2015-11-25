

<input type=text id=id /> <input type=text id=name /><input type=button onclick="test()" />
<script>

function test(){
  var obj = {};
  obj.id=document.getElementById("id").value;
  obj.name=document.getElementById("name").value;
  var xhr = new XMLHttpRequest();
  xhr.open('put', '/app_dev.php/admin/post_svc/put', false);
  //xhr.setRequestHeader('Content-Type', "application/json");
  xhr.send(JSON.stringify(obj));

}

</script>


<?php phpinfo();
