<?php ob_start(); ?>

<div class="container" style="min-height:400px;">
    <div class="col-md-11">
        <h2>News delete </h2>
        <?php
        if (isset($test)) {
            if ($test == true) {
        ?>
                <div class="alert alert-info">
                    <strong>Запись удалена.</strong><a href="newsAdmin"> Список новостей</a>
                </div>
            <?php
            } else if ($test == false) {
            ?>
                <div class="alert alert-warning">
                    <strong>Ошибка удаления записи!</strong> <a href="newsAdmin"> Список новостей</a>
                </div>
            <?php
            }
        } else {
            ?>
            <p class="alert alert-warning">Вы уверены что хотите удалить новость: <br><strong>"<?php echo $detail['title']; ?>"</strong>?</p>
            <form method='POST' action="newsDeleteResult">
                <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
                <button type="submit" class="btn btn-danger" name="delete">
                    <span class="glyphicon glyphicon-trash"></span> Удалить
                </button>
                <a href="newsAdmin" class="btn btn-large btn-success">
                    <i class="glyphicon glyphicon-backward"></i> &nbsp;Назад к списку
                </a>
            </form>
            <?php
        }
        ?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>