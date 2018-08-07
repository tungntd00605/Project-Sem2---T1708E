<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Testing show file</h1>
    <form action="/test/store" enctype="multipart/form-data" method="POST">
        <?php echo e(csrf_field()); ?>

        <input type="file" name="filesTest">
        <br/>
        <input type="submit" value="upload">
    </form>

    <h2>Get File</h2>
    <div>
        <form action="/test/show" method="GET" enctype="multipart/form-data">
            <input type="submit" value="GET FILE">
            <div id="showFile"> </div>
        </form>
    </div>

</body>
</html>