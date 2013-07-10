<?php if (isset($this->params['css']) && ($this->params['css'] !== false)): ?>
[?php use_stylesheet('<?php echo $this->params['css'] ?>', 'first') ?] 
<?php elseif(!isset($this->params['css'])): ?>
[?php use_stylesheet('/asDoctrineAdminGeneratorTwitterBootstrapPlugin/bootstrap/css/bootstrap.min.css') ?]
<?php endif; ?>

[?php use_javascript('/asDoctrineAdminGeneratorTwitterBootstrapPlugin/bootstrap/js/bootstrap.js') ?]