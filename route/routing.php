<?php
//вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI']) [0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if($path == '' OR $path == 'index.php') {
    $response = Controller::StartSite();
}

elseif($part == 'all') {
    $response = Controller::AllNews();
}
elseif($part == 'category' and isset($_GET['id'])) {
    $response = Controller::NewsByCatID($_GET['id']);
}
elseif($part == 'news' and isset($_GET['id'])) {
    $response = Controller::NewsByID($_GET['id']);
}

else{
    $response = Controller::error404 ();
}

?>