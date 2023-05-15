<?php

require_once(__DIR__ . '/../vendor/autoload.php');
?>
<!doctype html>
<html>
    <head>
        <title>File upload test</title>
    </head>
    <body>
        <?php if (!empty($_FILES)): ?>
            <b>$_FILES:</b>
            <pre><?php echo json_encode($_FILES, JSON_PRETTY_PRINT, 2); ?></pre><br />
            <b>File mime type: <?php echo (new finfo(FILEINFO_MIME))->buffer(file_get_contents($_FILES['file']['tmp_name'])); ?></b>
        <?php endif; ?>
        <form method="post" action="/" enctype="multipart/form-data">
            <div>
                File: <input type="file" name="file" />
            </div>

            <button type="submit">Upload</button>
        </form>
    </body>
</html>
