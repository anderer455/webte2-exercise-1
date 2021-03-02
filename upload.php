<?php
header('Content-Type: application/json; charset=utf-8');
$response = array();
try {
    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
    if (
        !isset($_FILES['upFile']['error']) ||
        is_array($_FILES['upFile']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    // Check $_FILES['upFile']['error'] value.
    switch ($_FILES['upFile']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    // You should also check filesize here.
    if ($_FILES['upFile']['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

    // DO NOT TRUST $_FILES['upFile']['mime'] VALUE !!
    // Check MIME Type by yourself.
    $ext = pathinfo($_FILES['upFile']['name'], PATHINFO_EXTENSION);


    // You should name it uniquely.
    // DO NOT USE $_FILES['upFile']['name'] WITHOUT ANY VALIDATION !!
    // On this example, obtain safe unique name from its binary data.
    if (!move_uploaded_file(
        $_FILES['upFile']['tmp_name'], $_POST['filename'] . '_' . time() . "." . $ext
        )) {
        throw new RuntimeException('Failed to move uploaded file.');
    }
    $response = array(
        "status" => "success",
        "error" => false,
        "message" => "File uploaded successfully"
    );
    echo json_encode($response);

} catch (RuntimeException $e) {
    $response = array(
        "status" => "error",
        "error" => true,
        "message" => $e->getMessage()
    );
    echo json_encode($response);
}