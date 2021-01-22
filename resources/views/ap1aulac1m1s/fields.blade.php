<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form files="true" method="post" action="" enctype="multipart/form-data">
@csrf
<label for="upload_file" name="aulas">choose file</label>
<input type="file" name="aula" id="aula">


<button type="submit">upload</button>

    <a href="{{ route('ap1aulac1m1s.index') }}" class="btn btn-default">Cancel</a>
</form>
</body>
</html>







