<?php
$files = scandir($_POST['path']);

function myFileSize($bytes, $decimals = 2)
{
    $size = array('B', 'KB', 'MB', 'GB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%{$decimals}f", $bytes / pow(1024, $factor)) . " ".@$size[$factor];
}
?>

<table class="table" id="table">
    <thead>
        <th scope="col">Name</th>
        <th scope="col">Size</th>
        <th scope="col">Upload</th>
    </thead>

    <tbody>
        <?php foreach ($files as $file)
        {
            if ($file == '.') { continue; } ?>
            <tr>
                <td>
                    <?php if (!is_dir($file))
                    {?>
                        <a href="<?= explode("public_html", $_POST['path'])[1].$file?>">
                        <?= pathinfo($file, PATHINFO_BASENAME); ?></a>
                        <?php
                    }
                    else
                    { ?>
                        <span>
                            <?= pathinfo($file, PATHINFO_FILENAME); ?>
                        </span>
                    <?php } ?>
                </td>
                <td><?php if (!is_dir($file)) { echo myFileSize(filesize($_POST['path'].$file));} ?></td>
                <td><?php if (!is_dir($file)) { echo date("F d Y H:i:s.", filemtime($_POST['path'].$file));} ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
