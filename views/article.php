<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Собственный написанный блог</title>
        <link href="css/style.css" rel="stylesheet"> 
    </head>
    <body>
        <header>
            <!--Тут будет логотип и меню-->
        </header>
        <main>
            <article class="post">
                <header>
                    <h1><? = $article['title'] ?></h1>
                    <!--<time datetime=" 2015-11-18T01:26:00">Опубликовано: 18 ноября 2015</time>-->
                    <em>Опубликовано: <? = $article['date'] ?></em>
                </header>
                <!--<section class="intro">
                    <p>
                        Вступительный текст
                    </p>
                </section>
                <section class="content">
                    <h2>Очередной заголовок</h2>-->
                    <p>
                        <? = $article['content'] ?>
                    </p>
                </section>
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