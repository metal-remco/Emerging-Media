        <div id="footer">
        
        	<ul id="footer-widgets">
        
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(5)): echo 'Widget Fout'; endif; ?>
                
                <div class="clear"></div>
                
            </ul><!-- footer-widgets -->
            
            <p id="copyright">&copy; 2012 De Zware Jongens | Hogeschool Rotterdam</p>

        </div><!-- footer -->
            
    </div><!-- container -->

<?php wp_footer(); ?>

    <!-- Javascripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/javascripts/script.js"></script>
    
</body>
</html>