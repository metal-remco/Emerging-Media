	
    <div id="mailinglists-delete" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a> &gt; Maillijst verwijderen</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists" title="Terug">Terug</a>

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Maillijst succesvol verwijderd</h1>
                
				<?php $mailsystem->deleteMailinglistByID( $_GET['id'] ); ?>
                                
            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- mailinglist-delete -->   
    
     