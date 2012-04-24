
	<div id="subscribers">
    
    	<!-- Todo: Afvangen als er geen Post data is -->
    
        <h1 id="page-title" class="shadow-text">Alle inschrijvingen</h1>
        
        <table class="shadow">

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Naam (p+m)</th>
                    <th scope="col">Email</th>
                    <th scope="col">Naam (p)</th>
                    <th scope="col">Klas (p)</th>
                    <th scope="col">Functie (m)</th>
                    <th scope="col">Klas (m)</th>
                    <th scope="col">Type</th>
                    <th scope="col">Uitschrijven</th>
                </tr>
            </thead>
            
            <tbody>
            
            	<?php $subscribers = $mailsystem->getSubscribers();
				foreach($subscribers as $subscriber): ?>

                    <tr>
                        <td><?php echo $subscriber->id; ?></td>
                        <td><?php echo $subscriber->name; ?></td>
                        <td><?php echo $subscriber->email; ?></td>
                        <td><?php echo $subscriber->child_name; ?></td>
                        <td><?php echo $subscriber->child_class; ?></td>
                        <td><?php echo $subscriber->employee_function; ?></td>
                        <td><?php echo $subscriber->employee_class; ?></td>
                        <td><?php echo $subscriber->type; ?></td>

                        <td>
                        	<a href="index.php?view=unsubscribe&id=<?php echo $subscriber->id; ?>" 
                               onclick="return confirm('Weet je zeker dat je <?php echo $subscriber->name; ?> wilt verwijderen?');">
                                
                                uitschrijven
                        	
                            </a>
                        </td>
                                                
                    </tr>
				
				<?php endforeach; ?>
				
            </tbody>
        </table>
                    
    </div>