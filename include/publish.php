	<?php if (in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))
			&& ($appId 	 !== '')
			&& ($pageURL !== '')
	) : ?>

	<div id="fb-tab-debug">
		<a href="https://www.facebook.com/dialog/pagetab?app_id=<?php echo $appId; ?>&display=popup&next=<?php echo $pageURL; ?>">
		Publish this page on Facebook</a>
	</div>

	<?php endif; ?>