<script src=dom.js></script>


<form metod="post" action="/admin/post/post" name=form1>
  <input type=text id=id />
  <input type=text id=email />
  <input type=text id=name />
   <input type=text id="phone" />
   <input type=text id="product" />
   <input type=text id="price" />
   <input type=text id="place" />
   <input type=text id="transport" />
   <input type=text id="payMethod" />





</form>



<input type=button onclick="test()" />
<script>

function test(){
  var obj = bhv.dom.form2obj("form1");
  var xhr = new XMLHttpRequest();
//  xhr.setRequestHeader('Content-Type', "application/json");
  xhr.open('put', '/app_dev.php/admin/post/put', false);
  xhr.setRequestHeader('Content-Type', "application/json");
  xhr.send(obj);

}

</script>


<?php phpinfo();
