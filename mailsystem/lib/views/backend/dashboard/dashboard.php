    	
    <div id="dashboard" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p>Dashboard</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="dashboard-header">
        	
        		<a class="dashboard-button button-newsletter" href="index.php?view=step1" title="Nieuwsbrief maken">Nieuwsbrief maken</a>
        		<a class="dashboard-button button-articles" href="index.php?view=articles" title="Artikelen">Artikelen</a>
        		<a class="dashboard-button button-templates" href="index.php?view=templates" title="Templates">Templates</a>
        		<a class="dashboard-button button-mailinglists" href="index.php?view=mailinglists" title="Maillijsten">Maillijsten</a>
        	
        	</div><!-- dashboard-header -->
        
        	<div id="sidebar">
            
	    		<h1>Ontvangen artikelen</h1>

                <div id="dashboard-articles">
                
                	<?php $i=1; while($i<10): ?>
                
	                	<div class="dashboard-article">
	                	
	                		<h3>Test artikel <?php echo $i; ?></h3>
	                	
	                	</div><!-- article -->
                	
                	<?php $i++; endwhile; ?>
                
                </div><!-- articles -->

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Eerder verzonden nieuwsbrieven</h1>
                                
                <div id="newsletters">
                
                	<div class="newsletter">
                	
                		<div class="newsletter-left">
                		
                			<p>Aantal keer bekeken</p>
                			<p class="count">126</p>
                				                		
                		</div><!-- newsletter-left -->
                		
                		<div class="newsletter-right">
                		
                			<h2 class="newsletter-title">Test nieuwsbrief 1</h2>
                			
                			<ul>
                			
                				<li>Bekijk</li>
                				<li>Dupliceer</li>
                				<li>Delen</li>
                				<li>Verstuurd naar: Maillijst</li>

                			</ul>
	                		
                		</div><!-- newsletter-right -->
                		
                	</div><!-- newsletter -->
                
                	<div class="newsletter">
                	
                		<div class="newsletter-left">
                		
                			<p>Aantal keer bekeken</p>
                			<p class="count">332</p>
                				                		
                		</div><!-- newsletter-left -->
                		
                		<div class="newsletter-right">
                		
                			<h2 class="newsletter-title">Test nieuwsbrief 2</h2>
                			
                			<ul>
                			
                				<li>Bekijk</li>
                				<li>Dupliceer</li>
                				<li>Delen</li>
                				<li>Verstuurd naar: Maillijst</li>
                				
                			</ul>
	                		
                		</div><!-- newsletter-right -->
                		
                	</div><!-- newsletter -->
                
                </div><!-- newsletter -->

            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- dashboard -->   
    
     