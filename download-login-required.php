<?php
    // Checks to see if user is logged in before authorising the download.
    if (USER != GUEST){
    ?>
    
        <h1>File Download</h1>

        <?php

        // If the file URL parmeter is set and not empty.
        if( isset($_GET['file']) && !empty($_GET['file']) ){

            // Set download location
            $location = 'http://[HOST-URL]/[HOST_DIR]';
            $file = $_GET['file'];

            echo '<h2>The file is now ready for download.</h2>';
            echo '<p>Click the following link to start your download.</p>';
            echo '<p><a class="button" href="'.$location.$file.'">Download</a></p>';


        }else{

            // No file referenced so show an error
            echo '<p><span class="strong">Error!</span> No file referenced.</p>';
        
        }

        ?>

    <?php
    }
    else
    {

        // Login required
        echo '<p>You need to login to see this page.</p>';
    
    }
?>

