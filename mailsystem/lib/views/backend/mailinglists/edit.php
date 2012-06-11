		
    <div id="mailinglists-edit" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a> &gt; Maillijst bewerken</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists" title="Terug">Terug</a>

            </div><!-- sidebar -->
            
            <div id="content">
            
            	<?php $mailinglist_id 			= $_GET['id']; ?>
				<?php $mailinglist_name 		= $mailsystem->getMailinglistNameByID( $mailinglist_id ); ?>
				
                <?php $subscribers 				= $mailsystem->getSubscribers( ); ?>
                <?php $subscribersInMailinglist = $mailsystem->getSubscribersByMailinglist( $mailinglist_id ); ?>

                <h1>Maillijst bewerken</h1>
                
                <form method="post" action="index.php?view=mailinglists-edit-success">
		        
		            <input type="text" value="<?php echo $mailinglist_name; ?>" name="name" id="name" class="required" ><br>

		            <input type="hidden" value="" name="mailinglist-subscribers-input" id="mailinglist-subscribers-input" class="required" ><br>
		            <input type="hidden" value="<?php echo $mailinglist_id; ?>" name="id" id="id" ><br>
		            
		            <div id="mailinglist-subscribers">
		            
	                    <?php foreach($subscribers as $subscriber): ?>
	                    
		                    <?php foreach($subscribersInMailinglist as $subscriberInMailinglist): ?>
							
								<?php if($subscriberInMailinglist == $subscriber): $inmailinglist = true; endif; ?>
							
							<?php endforeach; ?>
	                    
	                        <div class="subscriber<?php if($inmailinglist):?> inmailinglist<?php endif; ?>" id="subscriber-<?php echo $subscriber->id; ?>">
	                        
								<p class="name"><?php echo $subscriber->name; ?></p>
								<p class="mail"><?php echo $subscriber->email; ?></p>
																
	                        </div><!-- subscriber -->
	
	                    <?php $inmailinglist = false; endforeach; ?>

						<div class="clear"></div>

		            </div><!-- mailinglist-subscribers -->

		            <input type="submit" value="Bijwerken" name="editMailinglist" id="submit">
		            
		            <div class="clear"></div>
		            
		        </form>
                                
            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- mailinglist-edit -->   
    
     