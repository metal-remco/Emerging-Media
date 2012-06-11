
    <div id="mailinglists-view" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; <a href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a> &gt; Maillijst bekijken</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=mailinglists" title="Terug">Terug</a>

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Maillijst bekijken</h1>
                                        
                <table id="subscribers" class="sortable">
            
                    <thead>
                        <tr>

                            <th scope="col">Email</th>
                            <th scope="col">Naam</th>
                            <th scope="col">Naam van kind</th>
                            <th scope="col">Klas van kind</th>

                            <!--
                            <th scope="col">ID</th>
                            <th scope="col">Medewerker Functie</th>
                            <th scope="col">Medewerker Klas</th>
                            <th scope="col">Type</th>
                            <th scope="col">Reden</th>
                            -->

                        </tr>
                    </thead>
            
                    <tbody>
            
                        <?php $subscribers = $mailsystem->getSubscribers();
                        foreach($subscribers as $subscriber): ?>
        
                            <tr>
                                <td><?php echo $subscriber->name; ?></td>
                                <td><?php echo $subscriber->email; ?></td>
                                <td><?php echo $subscriber->child_name; ?></td>
                                <td>
                                
                                	<?php echo $subscriber->child_class; ?>
                                	<a class="icon subscriber-delete" title="Abbonement opzeggen" href="index.php?view=unsubscribe&id=<?php echo $subscriber->id; ?>" onclick="return confirm('Weet je zeker dat je <?php echo $subscriber->name; ?> wilt verwijderen?');"></a>
                                	<a class="icon subscriber-edit" title="Email adres bewerken" href="index.php?view=mailinglists-edit-email&id=<?php echo $subscriber->id; ?>" onclick="return confirm('Weet je zeker dat je <?php echo $subscriber->name;?> wilt wijzigen?')">

                                </td>
                                
                                <!--
                                <td><?php echo $subscriber->id; ?></td>
                                <td><?php echo $subscriber->employee_function; ?></td>
                                <td><?php echo $subscriber->employee_class; ?></td>
                                <td><?php echo $subscriber->type; ?></td>
                                <td><?php echo $subscriber->reason; ?></td>
                                -->
        
                            </tr>
                        
                        <?php endforeach; ?>
                            
                    </tbody>
                    
                </table><!-- subscribers -->
                    
            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
    </div><!-- mailinglists-view -->   
    
     