		
    <div id="mailinglists-edit" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a> &gt; <a href="index.php?view=mailinglists-view" title="Maillijsten bekijken">Maillijsten bekijken</a> &gt; Email adres succesvol bijgewerkt</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists-view" title="Terug">Terug</a>

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Email adres succesvol bijgewerkt</h1>

				<?php
				
					$newEmail = $_POST['newEmail'];
					$mailsystem->changeSubscriberEmail($newEmail, $_GET['id'])
				
				?>

            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- mailinglist-edit -->   
    
     