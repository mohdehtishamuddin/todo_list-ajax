<?php
session_start();
session_unset();
session_destroy();
echo "<div style= 'text-align:center;'>
<h2><a href 'index.php'>Back To Index</a></h2>
</div>";
?>