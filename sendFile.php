<?php
require('./template/header.php');
?>

<html lang="en">
<head>
    <title>Send File</title>
</head>
<body>
    <form action="showinOff.php" method="post" enctype="multipart/form-data">    
        <label for="fileInput">Choose a file</label>    
        <input type="file" hidden id="fileInput" name="files">
        <input type="submit" name="action" id="buttonSend" value="Tap on this shit">
    </form>
    <main>
        <section>
            <div class="image">
                <?php
                 if (isset($image_name)) {
                    echo '<img src="assets/ . $image_name . " alt="">';
                }
                ?>
            </div>
        </section>
    </main>
    <hr>
</body>
</html>