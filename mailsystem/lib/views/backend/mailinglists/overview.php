
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
                
                <p>Er is nog maar 1 maillijst.</p>
                
                <div id="mailinglists">
                
                	<div class="mailinglist">
                	
                		<?php
                		
							$subscribers = $mailsystem->getSubscribers();                		
                		
                		?>
                	
                		<div class="mailinglist-left">
                		
                			<p>Aantal leden</p>
                			<p class="count"><?php echo count($subscribers); ?></p>
                				                		
                		</div><!-- mailinglist-left -->
                		
                		<div class="mailinglist-right">
                		
                			<h2 class="mailinglist-title">Alle emailadressen</h2>
                			
                			<ul>
                			
                				<li><a href="index.php?view=mailinglists-view">Bekijk</a></li>
                				<li><a href="index.php?view=mailinglists-edit">Bewerk</a></li>
                				<li><a href="index.php?view=mailinglists-delete">Verwijder</a></li>
                				
                			</ul>
	                		
                		</div><!-- mailinglist-right -->
                		
                	</div><!-- mailinglist -->
                
                </div><!-- mailinglists -->
                    
            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- mailinglist-overview -->   
    
     