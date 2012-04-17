
	<div id="subscribers">
    
    	<h1>Subscribers</h1>
    
    	<p>Dit zijn alle subscribers:</p>
        
        <p><a href="index.php?view=subscribe">ADD</a></p>
    
        <table >

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
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
                        
                        <!-- Todo: Weet je zeker dat je deze subscriber wilt verwijderen? Dit kan niet worden teruggedraaid -->
                        <td><a href="index.php?view=unsubscribe&id=<?php echo $subscriber->id; ?>">DELETE</a></td>
                    </tr>
				
				<?php endforeach; ?>
				
            </tbody>
        </table>



    
    </div>
