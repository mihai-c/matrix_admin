</div>
<?php if (!empty($js)) {
	foreach ($js as $load_js) { ?>
		<script src="<?php echo ASSETS . $load_js; ?>"></script>
	<?php }
} ?>
<?php if (!empty($custom_js)) {
	; ?>
	<script type="text/javascript">
		<?php foreach ($custom_js as $script) {
				$this->load->view('/backend/js/' . $script);
		} ?>
	</script>
<?php } ?>
</body>
</html>
