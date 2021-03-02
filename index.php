<!doctype html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <title>Files upload</title>
        <meta name="author" content="Andrej Urbanek">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <form method="POST" action="upload.php" id="profileData" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="filename">Filename</label>
                    <input name="filename" type="text" id="filename" class="form-control" placeholder="File name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="upFile">Upload file</label>
            <input name="upFile" type="file" class="form-control" id="upFile">
        </div>
        <div class="form-group">
            <button type="button" id="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>

    <footer>
        <div class="footer">
            <h1>&copy; Copyright Andrej Urbanek FEI STU 2021</h1>
        </div>
    </footer>
    <script src="js/script.js"></script>
    </body>
</html>
<?php