<?php if (!empty($js)) {
	foreach ($js as $load_js) { ?>
		<script src="<?php echo ASSETS . $load_js; ?>"></script>
	<?php }
} ?>
<?php if (!empty($custom_js)) {
	; ?>
	<script type="text/javascript">
		<?php foreach ($custom_js as $script) {
			foreach ($script as $key => $view) {
				$this->load->view($key . '/frontend/' . $view);
			}
		} ?>
	</script>
<?php } ?>
<?php if (!empty($js_settings)) { ?>
	<script type="text/javascript">
		<?php foreach ($js_settings as $js) {
			$this->load->view($js['module'] . '/' . $js['view']);
		}?>
	</script>
<?php } ?>
</body>
</html>
