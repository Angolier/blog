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
            <header>
                <h1>Добавление статьи</h1>
            </header>
            <article class="add-post">
                <form method="post" action="index.php?action=<?= $_GET['action'] ?>&id=<?= $_GET['id'] ?>">
                    <label>
                        Название<br>
                        <input type="text" name="title" value="<?= $article['title'] ?>" autofocus required>
                    </label><br><br>
                    <label>
                        Дата<br>
                        <input type="date" name="date" value="<?= $article['date'] ?>" required>
                    </label><br><br>
                    <label>
                        Содержание<br>
                        <textarea name="content" required><?= $article['content'] ?>
                        </textarea>
                    </label><br>
                    <input type="submit" value="Сохранить"><br>
                </form><br>
            </article>
           
        </main>
        <footer>
            <!--Копирайты и прочее-->
            <section class="copyright">
            Copyright &copy; 2015
            </section>
        </footer>
    </body>
</html>