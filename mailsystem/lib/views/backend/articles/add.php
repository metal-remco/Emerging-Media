
<div id="articles-add" class="shadow">

    <div id="breadcrumbs">

        <p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=articles" title="Artikelen">Artikelen</a> &gt; Artikel toevoegen</p>

    </div><!-- breadcrumbs -->

    <div id="stage">

        <div id="sidebar">

            <a class="button shadow-text" href="index.php?view=articles" title="Terug">Terug</a>

        </div><!-- sidebar -->
       
      
        <div id="content">

            <h1>Artikel toevoegen</h1>
            <form enctype="multipart/form-data" id="form_article" action="index.php?view=inputArticle-succes" method="post"/>
            <input class="shadow box" id="articleTitle" class="required" value="" name="articleTitle" placeholder="Titel van artikel" type="text"></input>
            <textarea id="editor1" name="editor1">&lt;i&gt;Vul hier de text in.&lt;/i&gt;</textarea>


            <script type="text/javascript">
            
                window.onload = function() {
                    
                    CKEDITOR.replace( 'editor1' );
                       
                };
                
            </script>

            <input id="picture" type="file" name="picture" value="" ></input>
            <input id="author" type="hidden" name="author" value="Redacteur"/>
            <input id="date" type="hidden" value="<?php echo date("d-m-Y");?>" name="date"/>
            <input class="button shadow-text" id="submit" type="submit" value="Versturen" name="submit"/>

            </form>
        </div><!-- content -->

        <div class="clear"></div>

    </div><!-- stage -->

</div><!-- articles-add -->
