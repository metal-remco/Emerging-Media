
	<h1 id="page-title" class="shadow-text">Artikel invoeren</h1>

    <div id="article" class="shadow"> 
      
        <script type="text/javascript" src="lib/ckeditor/ckeditor.js"></script>
    
        <form enctype="multipart/form-data" id="form_article" action="index.php?view=inputArticle-succes" method="post"/>
        
            <input id="articleTitle" class="required" value="" name="articleTitle" placeholder="Titel van artikel" type="text"></input>
            <textarea id="editor1" name="editor1">&lt;i&gt;Vul hier de text in.&lt;/i&gt;</textarea>
        
            <script type="text/javascript">
            
                window.onload = function() {
                    
                    CKEDITOR.replace( 'editor1' );
                       
                };
                
            </script>
            
            <input id="picture" type="file" name="picture" value="" ></input>
            <input id="email" class="email required" type="text" name="author" placeholder="Vul hier uw emailadres in."/>
            <input id="date" type="hidden" value="<?php echo date("d-m-Y");?>" name="date"/>
            <input id="submit" class="shadow" type="submit" value="Versturen" name="submit"/>
        </form>
        
    </div>
