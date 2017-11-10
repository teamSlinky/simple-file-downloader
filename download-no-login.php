
<h1>File Download</h1>

<?php

// Check file url parameter exists AND not empty
if( isset($_GET['file']) && !empty($_GET['file']) ){

    // Store file URL parameter to local var (purely to save chars referencing it each time)
    $file = $_GET['file'];

    // Set download location
    $location = 'http://[HOST-URL]/[HOST_DIR]';
    $file = $_GET['file'];

    echo '<h2>The file is now ready for download.</h2>';
    echo '<p>Click the following link to start your download.</p>';
    echo '<p><a class="button" href="'.$location.$file.'">Download</a></p>';

}else{

    // Output error message to say the file url parameter is missing.
    echo '<p><span class="strong">Error!</span> No file referenced.</p>';

}

?>