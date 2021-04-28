<html>
<head>
</head>
<body>
<form method="post"action="/send">
@csrf
<label>Click here to visit google.com</label>
<input type="submit"name="submit">

</form>

//<?php
//if(isset($_POST["submit"])){
   // $curl=curl_init();
    //curl_setopt($curl,CURLOPT_URL,'http://www.google.com');
  //  curl_exec($curl);
//}

//?>

</body>
</html>