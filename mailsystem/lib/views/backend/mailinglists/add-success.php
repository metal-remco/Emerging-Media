	
    <div id="mailinglists-add" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a> &gt; Maillijst toevoegen</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists" title="Terug">Terug</a>

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Maillijst succesvol toegevoegd</h1>
                
				<?php $mailsystem->addMaillijst($_POST['name']); ?>

            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- mailinglist-add -->   
    
     