<html>
<head>
<style>
html,body{padding:0;margin:0}
body{margin:32px;font-family:sans-serif}
</style>
</head>
<body>
<h1>Web server</h1>
<p>Web server running PHP and My SQL</p>
<p>
<ul>
<li><a href="phpinfo.php">Show PHP info</a></li>
<li><a href="testmariadb.php">Test MariaDB</a></li>
</ul>
</p>
<?php

echo  "<p>&nbsp;</p><p>Folders in htdocs:</p>";
$folders = array_filter(glob("*"), "is_dir");
if (count($folders) > 0)
{
    echo "<p>\n<ul>\n";
    foreach ($folders as $folder) {
        $folder = basename($folder);
        echo "<li><a href=\"{$folder}\">{$folder}</a></li>\n";
    }
    echo "</ul>\n</p>\n";
}


?>
</body>
</html>
