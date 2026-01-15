<?php
ob_start();
?>
<hl>Uudised (kategoorii)</hl>
<br>

<?php
ViewNews::NewsByCategory($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>
