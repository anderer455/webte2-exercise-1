<!doctype html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <title>Files upload</title>
        <meta name="author" content="Andrej Urbanek">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>

    <div class="container-fluid">
        <div id="fileList" style="width: 700px">

        </div>

        <form method="POST" action="upload.php" id="uploadForm" enctype="multipart/form-data">
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
            <div class="form-group" id="btn">
                <button type="button" id="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>

    </div>
    <div class="sources">
        <h4>Sources:</h4>
        <a href="https://github.com/matej172/file-uploader">Basis</a>
    </div>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>


