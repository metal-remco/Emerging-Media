<?php
    $id = $_GET['id'];
    $articles = $mailsystem->getArticles($id);
?>
<div id="articles-edit" class="shadow">

    <div id="breadcrumbs">

        <p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=articles" title="Artikelen">Artikelen</a> &gt; Artikel bewerken</p>

    </div><!-- breadcrumbs -->

    <div id="stage">

        <div id="sidebar">

            <a class="button shadow-text" href="index.php?view=articles" title="Terug">Terug</a>

        </div><!-- sidebar -->

        <div id="content">

            <h1>Artikel bewerken</h1>
            <?php foreach ($articles as $article):?>
            <form enctype="multipart/form-data" id="form_article" action="index.php?view=edit-succes" method="post"/>
            <input id="articleTitle" class="required" value="" name="articleTitle" placeholder="<?php if($article->title) echo $article->title;else echo "Titel van artikel" ?>" type="text"></input>
            <textarea id="editor1" name="editor1">
                <?php echo $article->article;?>
            </textarea>


            <script type="text/javascript">
            
                window.onload = function() {
                    
                    CKEDITOR.replace( 'editor1' );
                       
                };
                
            </script>
            <!--<img class="article-picture" src="<?php echo $article->picture;?>" alt="Afbeelding"/>-->
            <input id="picture" type="file" name="picture" value="" />
            <input type="hidden" name="oldPicture" value="<?php echo $article->picture;?>"/>
            <input class="button shadow-text" id="submit" type="submit" value="Versturen" name="submit"/>
            <input id="id" type="hidden" name="id" value="<?php echo $article->id;?>"/>

            </form>
            <?php endforeach;?>
        </div><!-- content -->

        <div class="clear"></div>

    </div><!-- stage -->

</div><!-- articles-edit -->