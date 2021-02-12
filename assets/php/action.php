<html>
<head>
    <title>CULOSOUND</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/1f327655ba.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300&display=swap" rel="stylesheet">
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../script/script.js"></script>
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
        <th>udire</th>
        <th>votare</th>
        </thead>


        <?php

        foreach ($files as $line) {
            echo "<tr>";
            echo "<td>" . $line . "</td>";
            echo " <td><audio controls>
                <source src=\"$dir/$line\" type=\"audio/mpeg\">
                Your browser does not support the audio element.
              </audio></td>";
            echo "<td onclick='vote(\"". $line ."\")'><i class=\"cuore fas fa-heart\"></i></td>";
        }
        ?>
    </table>
    <div id="footer">
        <p>proudly gifted by Marco Ferrè, Emanuele Salvi, Daniele Briganti </p>
        <!-- Place this tag where you want the button to render. -->
        <a class="github-button" href="https://github.com/marcoferre/culosound" data-icon="octicon-star" aria-label="Star marcoferre/culosound on GitHub">Star</a></div>
</div>

</body>
</html>
