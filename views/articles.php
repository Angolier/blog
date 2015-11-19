<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet"> 
        <title>Собственный написанный блог</title>
    </head>
    <body>
        <header>
            <!--Тут будет логотип и меню-->
        </header>
        <main>
            <!--<a href="admin">Панель администратора</a>-->
            <?php foreach($articles as $a): ?>
            <article class="post">
                <header>
                    <h1><a href="article.php?id=<?= $a['id'] ?>"><?= $a['title'] ?> </a></h1>
                    <em>Опубликовано: <?= $a['date'] ?></em>
                    
                </header>
                <!--<section class="intro">
                    <p>
                        Вступительный текст
                    </p>
                </section>
                <section class="content">
                    <h2>Очередной заголовок</h2>-->
                    <p>
                        <?= articles_intro($a['content']) ?>
                    </p>
                </section>
            </article>
            <?php endforeach ?>
        </main>
        <footer>
            <!--Копирайты и прочее-->
            <section class="copyright">
            Copyright &copy; 2015
            </section>
        </footer>
    </body>
</html>