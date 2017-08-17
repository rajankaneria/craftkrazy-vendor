

	 	<footer class="page1-footer">  
          <div class="footer1-copyright">
            <div class="containe">
	            © 2017 Intelliworkz business solutions pvt ltd.
	            <a class="grey-text text-lighten-4 right">Devloper by: APPatel</a>
	        </div>
          </div>
        </footer>
        <input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>