<form action="/uploadfile" method="post" enctype="multipart/form-data">
    @csrf
     <!-- //this is for security request forgery. -->
    upload file:
    <input type="file" name="myfile" />
    <br>
    <input type="submit" name="submit" value="upload" />
</form>
