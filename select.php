<html>
<body>
<?php
    $languag=$_GET["language"];
    setcookie("lang",$languag, time() + 3600 * 24 );
?>
</body>
</html>


