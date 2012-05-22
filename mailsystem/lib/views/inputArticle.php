    <h1 id="page-title" class="shadow-text">Artikel invoeren</h1>
    
    <div id="article" class="shadow">   
        <script type="text/javascript" src="lib/ckeditor/ckeditor.js"></script>

        <form id="form_article" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"/>
        <textarea id="editor1" name="editor1">&lt;i&gt;Vul hier de text in.&lt;/i&gt;</textarea>
        <script type="text/javascript">
            window.onload = function()
            {
                CKEDITOR.replace( 'editor1' );
               
            };
        </script>
        <input id="submit" class="shadow" type="submit" value="Versturen" name="submit"/>
    </form>
    </div>