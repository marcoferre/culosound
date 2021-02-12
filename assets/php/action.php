<html>
<head>
    <title>CULOSOUND</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<?php

$dir = "../media/audio";
$files = array_diff(scandir($dir), array('..', '.'));

?>
<div id="container-action">
    <img src="../media/img/logo.jpeg">

    <table class="table-peti">
        <thead>
        <th>peto</th>
        <th>odi</th>
        </thead>


        <?php

        foreach ($files as $line) {
            echo "<tr>";
            echo "<td>" . $line . "</td>";
            echo " <td><audio controls>
                <source src=\"$dir/$line\" type=\"audio/mpeg\">
                Your browser does not support the audio element.
              </audio></td>";
        }
        ?>
    </table>
    <div id="footer">proudly gifted by Marco Ferrè, Emanuele Salvi, Daniele Briganti</div>
</div>

</body>
</html>
