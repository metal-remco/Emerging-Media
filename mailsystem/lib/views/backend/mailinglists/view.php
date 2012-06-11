
    <div id="mailinglists-view" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a> &gt; Maillijst bekijken</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists" title="Terug">Terug</a>

            </div><!-- sidebar -->
            
            <div id="content">
            
            	<?php $mailinglist_id 	= $_GET['id']; ?>
				<?php $mailinglist_name = $mailsystem->getMailinglistNameByID( $mailinglist_id ); ?>

                <h1>Maillijst bekijken: <?php echo $mailinglist_name; ?></h1>
                                        
                <table id="subscribers" class="sortable">
            
                    <thead>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Naam</th>
                            <th scope="col">Naam van kind</th>
                            <th scope="col">Klas van kind</th>
                        </tr>
                    </thead>
            
                    <tbody>
            
                        <?php $subscribers = $mailsystem->getSubscribersByMailinglist( $mailinglist_id ); ?>
                        
                        <?php foreach($subscribers as $subscriber): ?>
                        
                            <tr>
                                <td><?php echo $subscriber->name; ?></td>
                                <td><?php echo $subscriber->email; ?></td>
                                <td><?php echo $subscriber->child_name; ?></td>
                                <td>
                                
                                	<?php echo $subscriber->child_class; ?>
                                	<a class="icon subscriber-delete" title="Abbonement opzeggen" href="index.php?view=unsubscribe&id=<?php echo $subscriber->id; ?>" onclick="return confirm('Weet je zeker dat je <?php echo $subscriber->name; ?> wilt verwijderen?');"></a>
                                	<a class="icon subscriber-edit" title="Email adres bewerken" href="index.php?view=mailinglists-edit-email&id=<?php echo $subscriber->id; ?>" onclick="return confirm('Weet je zeker dat je <?php echo $subscriber->name;?> wilt wijzigen?')">

                                </td>
        
                            </tr>
                        
                        <?php endforeach; ?>
                            
                    </tbody>
                    
                </table><!-- subscribers -->
                    
            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
    </div><!-- mailinglists-view -->   
    
     