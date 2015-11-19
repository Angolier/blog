<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/style.css" rel="stylesheet">
        <title>Собственный написанный блог</title>
    </head>
    <body>
        <header>
            <!--Тут будет логотип и меню-->
        </header>
        <main>
            <a href="index.php?action=add">Добавить статью</a>
            <table border="1">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($articles as $a): ?>
                <tr>
                    <td><?= $a['date'] ?></td>
                    <td><?= $a['title'] ?> </td>
                    <td>
                        <a href="index.php?action=edit&id=<?= $a['id'] ?>">Редактировать</a>
                    </td>
                    <td>
                        <a href="index.php?action=delete&id=<?= $a['id'] ?>">Удалить</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
           
            
        </main>
        <footer>
            <!--Копирайты и прочее-->
            <section class="copyright">
            Copyright &copy; 2015
            </section>
        </footer>
    </body>
</html>