<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="{{route('tentativa.uploadFile')}}"  enctype="multipart/form-data">
	@csrf
<label for="file" name="aula">choose file</label>
<input type="file" name="aula">


<button type="submit">upload</button>

</form>
</body>
</html>



