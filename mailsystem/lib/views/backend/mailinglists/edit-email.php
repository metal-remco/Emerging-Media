		
    <div id="mailinglists-edit" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a> &gt; <a href="index.php?view=mailinglists-view" title="Maillijsten bekijken">Maillijsten bekijken</a> &gt; Email adres bewerken</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists-view" title="Terug">Terug</a>

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Email adres bewerken</h1>
                
		        <form action="index.php?view=mailinglists-edit-email-success&id=<?php echo $_GET['id']?>" method="post" />
		        
		            <input placeholder="Nieuw emailadres" type="newEmail" class="required email" id="newEmail" name="newEmail" value="" /><br />

		            <input id ="submit" type="submit" name="changeEmail" value="Wijzigen" />
		            <div class="clear"></div>
		            
		        </form>

            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- mailinglist-edit -->   
    
     