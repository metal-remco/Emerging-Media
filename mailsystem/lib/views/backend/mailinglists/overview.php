
    <div id="mailinglists-overview" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; Maillijsten</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists-add" title="Nieuwe lijst">Nieuwe lijst</a>
	    		
            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Maillijsten</h1>

        		<?php $mailinglists = $mailsystem->getMailinglists(); ?>     

                <p>Er zijn <?php echo count($mailinglists); ?> maillijsten.</p>
                
                <div id="mailinglists">
                						 
					<?php foreach($mailinglists as $mailinglist): ?>
					
	            		<?php $subscribers = $mailsystem->getSubscribersByMailinglist($mailinglist->ID); ?>     
					
	                	<div class="mailinglist">
	                	                	
	                		<div class="mailinglist-left">
	                		
	                			<p>Aantal leden</p>
	                			<p class="count"><?php echo count($subscribers); ?></p>
	                				                		
	                		</div><!-- mailinglist-left -->
	                		
	                		<div class="mailinglist-right">
	                		
	                			<h2 class="mailinglist-title"><?php echo $mailinglist->name; ?></h2>
	                			
	                			<ul>
	                			
	                				<li><a href="index.php?view=mailinglists-view&id=<?php echo $mailinglist->ID; ?>">Bekijk</a></li>
	                				<li><a href="index.php?view=mailinglists-edit&id=<?php echo $mailinglist->ID; ?>">Bewerk (Abonnees toevoegen)</a></li>
	                				<li><a href="index.php?view=mailinglists-delete&id=<?php echo $mailinglist->ID; ?>" onclick="return confirm('Weet je zeker dat je <?php echo $mailinglist->name; ?> wilt verwijderen?');">Verwijder</a></li>
	                				
	                			</ul>
		                		
	                		</div><!-- mailinglist-right -->
	                		
	                	</div><!-- mailinglist -->
					
					<?php endforeach; ?>
                                
                </div><!-- mailinglists -->
                    
            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- mailinglist-overview -->   
    
     