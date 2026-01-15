<?php
ob_start();
?>
<hl>Kõik uudised </hl>
<br>

<?php
ViewNews::ALLNews($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>