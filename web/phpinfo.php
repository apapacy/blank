<script src=dom.js></script>


<form metod="post" action="/admin/post/post" name=form1>
  <input type=text id=mail />
  <input type=text id=name />


</form>



<input type=button onclick="test()" />
<script>

function test(){
  var obj = bhv.dom.form2obj("form1");
  var xhr = new XMLHttpRequest();
//  xhr.setRequestHeader('Content-Type', "application/json");
  xhr.open('post', '/app_dev.php/api/mail/post', false);
  xhr.setRequestHeader('Content-Type', "application/json");
  xhr.send(obj);

}

</script>


<?php phpinfo();
