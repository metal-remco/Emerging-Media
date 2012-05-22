
    <h1 id="page-title" class="shadow-text">Dashboard</h1>

    <div id="subscribers" class="shadow">
    
        <!-- Todo: Afvangen als er geen Post data is -->
    
        <table>
    
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Naam (p+m)</th>
                    <th scope="col">Email</th>
                    <th scope="col">Naam (o)</th>
                    <th scope="col">Klas (o)</th>
                    <th scope="col">Functie (m)</th>
                    <th scope="col">Klas (m)</th>
                    <th scope="col">Type</th>
                    <th scope="col">Reden</th>
                    <th scope="col">Uitschrijven</th>
                    <th scope="col">Wijzig mail</th>
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
                        <td><?php echo $subscriber->reason; ?></td>

                        <td>
                            <a href="index.php?view=unsubscribe&id=<?php echo $subscriber->id; ?>" 
                               onclick="return confirm('Weet je zeker dat je <?php echo $subscriber->name; ?> wilt verwijderen?');">
                                
                                abonnement opzeggen
                            
                            </a>
                        </td>
                        
                        <td>
                            <a href="index.php?view=changeEmail&id=<?php echo $subscriber->id; ?>" onclick="return confirm('Email wijzigen van <?php echo $subscriber->name;?>')">Wijzigen</a>
                        </td>

                    </tr>
                
                <?php endforeach; ?>
                    
            </tbody>
        </table>

    </div><!-- subscribers -->