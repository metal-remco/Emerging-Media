
    <div id="mailinglists-edit" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a> &gt; <a href="index.php?view=mailinglists-view&id=<?php echo $_GET['mailinglist_id'];?>" title="Maillijst bekijken">Maillijst bekijken</a> &gt; Email adres bewerken</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists-view&id=<?php echo $_GET['mailinglist_id'];?>" title="Terug">Terug</a>

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Email adres bewerken</h1>
                
		        <form id="form_edit" action="index.php?view=mailinglists-edit-email-success&id=<?php echo $_GET['id']?>" method="post" />
                                                <input type="text" value="<?php if(!empty($_GET['child_name'])){echo $_GET['child_name'];}?>"  id="nameChild" name="nameChild" placeholder="Naam van het kind"/>
                                                <input type="text" value="<?php if(!empty($_GET['child_class'])){echo $_GET['child_class'];}?>"  id="classChild" name="classChild" placeholder="Klas van het kind"/>
		            <input type="text" value="<?php echo $_GET['email'];?>" class="required email" id="newEmail" name="newEmail" placeholder="Nieuw emailadres" /><br />
                                
		            <input id ="submit" type="submit" name="changeEmail" value="Wijzigen" />
		            <div class="clear"></div>
		            
		        </form>

            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- mailinglist-edit -->   
    
     