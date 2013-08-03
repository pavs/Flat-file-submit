<?php

$error = false;
if (isset($_POST['posting_user'])) {
    $postUser = trim($_POST['posting_user']);
    $postURL = trim($_POST['posting_site']);
    $postMessage = trim($_POST['posting_message']);

    if (($postUser != '') AND ($postMessage != '')) {
        $postUser = str_replace(',', '&#44;', htmlentities($postUser));
        if (!empty($postURL)) {
            $postingUser = '<a href="http://' . urlencode($postURL) . '" target="_blank">' . $postUser . '</a>';
        } else {
            $postingUser = $postUser;
        }

        $postingTime = time();
        $postedMessage = str_replace(array(','), '&#44;', htmlentities($postMessage));
        
        $line = $postingUser . ',' . $postingTime . ',' . $postedMessage ."\n";

        $fileHandle = fopen($dataFile, 'a');
        if (!fwrite($fileHandle, $line)) {
            $error = 'Could not write to file, try again.';
        }
        fclose($fileHandle);

        // Delete post data so that fields do no populate again
        unset($_POST);
    } else {
        $error = 'Quote and Author is Required';
    }
}