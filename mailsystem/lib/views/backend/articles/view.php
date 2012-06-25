<?php
$id = $_GET['id'];
$articles = $mailsystem->getArticles($id);
?>
<div id="articles-view" class="shadow">

    <div id="breadcrumbs">

        <p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=articles" title="Artikelen">Artikelen</a> &gt; Artikel bekijken</p>

    </div><!-- breadcrumbs -->

    <div id="stage">

        <div id="sidebar">

            <a class="button shadow-text" href="index.php?view=articles" title="Terug">Terug</a>

        </div><!-- sidebar -->

        <div id="content">
            <?php foreach ($articles as $article): ?>            
                <h1><?php echo $article->title; ?></h1>

                <p><?php echo $article->article; ?></p>            <?php
            if (!empty($article->picture)) {
                    ?><img class="article-picture" src="<?php echo $article->picture; ?>"/><?php
        }
                ?>
                <p>Schrijver: <?php echo $article->author; ?></p>
                <p>Datum: <?php echo $article->date; ?></p>
            <?php endforeach; ?>

            <form id="form_reaction" action="index.php?view=articles-view-succes" method="post" />
            <textarea id="reaction" class="required" name="reaction" placeholder="Reageer hier op het artikel" cols="60" rows="6"></textarea>
            <input type="hidden" id="author" name="author" value="<?php echo $article->author; ?>"/>
            <input class="button shadow-text" id="submit" Value="Reageren" type="submit"/>
            </form>

        </div><!-- content -->

        <div class="clear"></div>

    </div><!-- stage -->

</div><!-- articles-view -->
