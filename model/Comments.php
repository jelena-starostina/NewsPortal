<?php
require_once 'inc/Database.php';

class Comments {

    public static function getAllComments($newsId) {
        $db = (new database())->connect();
        $stmt = $db->prepare("SELECT * FROM comments WHERE news_id = ? ORDER BY created_at DESC");
        $stmt->execute([$newsId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function InsertComment($text, $newsId, $author = 'Гость') {
        $db = (new database())->connect();
        $stmt = $db->prepare("INSERT INTO comments (news_id, author, text, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$newsId, $author, $text]);
    }
}
?>
