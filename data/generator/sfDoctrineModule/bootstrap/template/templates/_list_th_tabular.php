<?php foreach ($this->configuration->getValue('list.display') as $name => $field): ?>
[?php slot('sf_admin.current_header') ?]
<th class="sf_admin_<?php echo strtolower($field->getType()) ?> sf_admin_list_th_<?php echo $name ?>">
<?php if ($field->isReal()): ?>
  [?php if ('<?php echo $name ?>' == $sort[0]): ?]
  
    [?php if($sort[1] == 'asc')
    { 
      $icon = '<span class="ui-icon ui-icon-triangle-1-s" alt="' . __($sort[1], array(), 'sf_admin') . '" title="' . __($sort[1], array(), 'sf_admin') .'"></span>';
    }
    else
    {
      $icon = '<span class="ui-icon ui-icon-triangle-1-n" alt="'.__($sort[1], array(), 'sf_admin') .'" title="' . __($sort[1], array(), 'sf_admin') .'"></span>';
    }?]
  
    [?php echo link_to($icon . __('<?php echo $field->getConfig('label', '', true) ?>', array(), '<?php echo $this->getI18nCatalogue() ?>'), '@<?php echo $this->getUrlForAction('list') ?>', array('class' => 'btn ui-state-default ui-corner-all', 'query_string' => 'sort=<?php echo $name ?>&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?]
    
    
    
    </span>
    
    [?php /* echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) */?]
  [?php else: ?]
    [?php echo link_to(__('<?php echo $field->getConfig('label', '', true) ?>', array(), '<?php echo $this->getI18nCatalogue() ?>'), '@<?php echo $this->getUrlForAction('list') ?>', array('query_string' => 'sort=<?php echo $name ?>&sort_type=asc')) ?]
  [?php endif; ?]
<?php else: ?>
  [?php echo __('<?php echo $field->getConfig('label', '', true) ?>', array(), '<?php echo $this->getI18nCatalogue() ?>') ?]
<?php endif; ?>
</th>
[?php end_slot(); ?]
<?php echo $this->addCredentialCondition("[?php include_slot('sf_admin.current_header') ?]", $field->getConfig()) ?>
<?php endforeach; ?>
