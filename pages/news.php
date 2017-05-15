<section class="margtop">
	<div class="row columns">
		<h1>Blog <small>This is my blog. It's awesome.</small></h1>
<?php
	include_once( 'inc/_xoonews.php' );
	$xoonews = new xooNews();
	echo $xoonews->display();
?>
	</div>
</section>
<?php if ($news_editor == true) { ?>
	<script src="<?php echo $news_editor_link; ?>"></script>
	<script>
		tinymce.init({
			selector: '.editor',
			//language: '<?php echo $news_editor_lang ; ?>',
			plugins: '<?php echo $news_editor_plugins ; ?>'
		});
	</script>
<?php } ?>