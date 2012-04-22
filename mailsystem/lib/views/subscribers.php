
	<div id="subscribers">
    
    	<h1>Subscribers</h1>
    
    	<p>Dit zijn alle subscribers:</p>
        
        <p><a href="index.php?view=subscribe">ADD</a></p>
    
        <table >

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kind: Naam</th>
                    <th scope="col">Kind: Klas</th>
                    <th scope="col">Medewerker: Functie</th>
                    <th scope="col">Medewerker: Klas</th>
                    <th scope="col">Type</th>
                    <th scope="col">DELETE</th>
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
                                
                                index.php?view=unsubscribe&amp;id=<?php echo $subscriber->id; ?>
                        	
                            </a>
                        </td>
                                                
                    </tr>
				
				<?php endforeach; ?>
				
            </tbody>
        </table>



    
    </div>
