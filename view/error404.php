<?php
ob_start();
?>
<hl>Error 404</hl>
<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>
