Class ViewComments

<?php
class ViewComments {

    public static function CommentsForm() {
        echo '<form action="insertcomment">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        Текст комментария: <input type="text" name="comment">
        <input type="submit" value="Добавить">
        </form>';
    }

}