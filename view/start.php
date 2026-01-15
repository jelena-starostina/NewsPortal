<?php
ob_start();
?>
<hl>TOP 3 NEWS </hl>
<br>
<?php
ViewNews::NewsByCategory($arr);

$content = ob_get_clean();

include_once 'view/layout.php';

?>
