<html>
<body>

<form action="upload.php" method="post"
enctype="multipart/form-data">
<label for="file">我来秀幸福啦！</label>
<input type="file" name="file" id="file" /> 
<br />

<input type="hidden" name="aid" value="0" /><br>
<label style="position: relative;top:-2px;margin-left: 2px;">为照片添加描述 :</label><input type="text" name="description" value="我上传了一张图片" /><br>
<input type="submit" name="submit" value="Submit" />





</form>

</body>
</html>