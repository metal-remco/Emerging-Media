
	<div id="subscribe-intro">
    
        <h1 id="page-title" class="shadow-text">Inschrijven</h1>
                    
        <?php $i=1; foreach($types as $key => $value): ?>
        
            <a href="index.php?view=subscribe&type=<?php echo $key; ?>" id="type_<?php echo $key; ?>" class="type_button shadow"> Als <br /><?php echo $value; ?></a>   
            
         <?php $i++; endforeach; ?>
                    
    </div>