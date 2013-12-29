			<!--END #content -->
			</div>

		<!--END #main -->
		</div>

	<!--END #page -->
    </div>

<!--END #wrapper -->
</div>

<!--BEGIN #bottom -->
<div id="bottom">

	<!--BEGIN #footer -->
	<div id="footer" class="clearfix">

		<!--BEGIN #footer-menu -->
		<div id="footer-menu" class="clearfix">
			<?php if ( has_nav_menu( 'footer-menu' ) ) : wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => '1' ) ); endif; ?>
		<!--END #footer-menu -->
		</div>

		<!--BEGIN #credits -->
		<div id="credits">
			<p>Copyright <?php echo date('Y'); ?> <?php bloginfo('title'); ?> - <a href="http://www.mafiashare.net" title="<?php echo DT_THEME_NAME; ?> Theme by DesignerThemes.com"><?php echo DT_THEME_NAME; ?> Theme</a> by <a href="http://www.mafiashare.net" title="Premium WordPress Themes">DesignerThemes.com</a></p>
		<!--END #credits -->
		</div>

	<!--END #footer -->
	</div>

<!--END #bottom -->
</div>

<script> // for contact form
	var ajaxurl='<?php echo admin_url('admin-ajax.php'); ?>';
</script>

<?php wp_footer(); ?>

<!-- Shared on http://www.MafiaShare.net --></body>

</html>