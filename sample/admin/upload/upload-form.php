<?php include('upload-script.php'); ?>
<!DOCTYPE html>
<html>
<head><style>.files{
float: left;
  background: #efefef;
  width: 355px;
  height: 209px;
  text-align: center;
  position: relative;
  border: 5px solid #dbd6d6;
  margin: 0px 5px;
}
.files a{
color: black;
  font-size: 52px;
}
.files p{
  margin-top:38px;
}
.images img{
  width: 355px;
  height: 200px;
}
.images{
  float: left;
  border: 5px solid #dbd6d6;
  margin: 5px;
}
.upload-form{
  width: 40%;
  background: #dbd6d6;
  height: 150px;
  margin:20px;
  text-align: center;
  position: relative;
  left: 18%
}

.upload-form input[type="file"]{
border: 1px solid white;
  line-height: 20px;
  position: relative;
  top: 62px;
  padding: 6px;
}
.upload-form input[type="submit"]{
position: relative;
  top: 62px;
  background: #8f8d8d;
  border: 0px;
  padding: 10px;
  color: white;
  font-weight: bold;
}</style>
</head>
<body>
<div class="upload-form">
<form  method="post" enctype="multipart/form-data">
<input  type="text" name="complain_id"  class="complain" required>
    <input type="file" name="file_name[]" multiple>
    <input type="submit" value="Upload File" name="submit">
</form>
</div>
</body>
</html>