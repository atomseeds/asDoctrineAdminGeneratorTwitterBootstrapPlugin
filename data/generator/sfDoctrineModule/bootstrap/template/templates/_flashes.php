[?php if ($sf_user->hasFlash('notice')): ?]
  <div class="response-msg ui-corner-all success">
	<span>[?php echo __('Success'); ?]</span>
	[?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?]</div>
[?php endif; ?]

[?php if ($sf_user->hasFlash('error')): ?]
  <div class="response-msg ui-corner-all error">
	<span>[?php echo __('Error'); ?]</span>
	[?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?]</div>
[?php endif; ?]
