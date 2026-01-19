<?php
ob_start();
?>

<br>

<?php
// Вывод новости
ViewNews::ReadNews($n);

echo "<br>";

// Получаем комментарии
$comments = Controller::Comments($_GET['id'] ?? null);

if (!empty($comments)) {
    foreach ($comments as $comment) {
        echo "<div class='comment'>";
        echo "<strong>" . htmlspecialchars($comment['author']) . ":</strong> ";
        echo htmlspecialchars($comment['text']);
        echo "</div>";
    }
} else {
    echo "<p>Комментариев пока нет.</p>";
}

echo "<br>";

// Форма добавления комментария
ViewComments::CommentsForm();

$content = ob_get_clean();
include_once 'view/layout.php';
