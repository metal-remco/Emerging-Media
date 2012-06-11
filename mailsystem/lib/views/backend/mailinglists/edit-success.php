	
    <div id="mailinglists-add" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a> &gt; Maillijst bijwerken</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists" title="Terug">Terug</a>

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Maillijst succesvol bijgewerkt</h1>
                
                <?php $subscribers_string = $_POST['mailinglist-subscribers-input']; ?>
                <?php $subscribers = explode(",", $subscribers_string); ?>
                
				<?php $mailsystem->editMailinglist( $_POST['id'], $_POST['name'], $subscribers ); ?>

            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- mailinglist-add -->   
    
     