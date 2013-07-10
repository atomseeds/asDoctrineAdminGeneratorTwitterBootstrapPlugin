<div class="content float-right">
<?php if ($actions = $this->configuration->getValue('list.actions')): ?>
<?php foreach ($actions as $name => $params): ?>
<?php if ('_new' == $name): ?>
<?php echo $this->addCredentialCondition('[?php echo $helper->linkToNew('.$this->asPhp($params).') ?]', $params)."\n" ?>
<?php else: ?>
<?php 
$params['params'] = $params['params'] + array('class' => 'btn ui-state-default ui-corner-all');
echo $this->addCredentialCondition($this->getLinkToAction($name, $params, false), $params)."\n";
 ?>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>
</div>
<div class="clear"></div>