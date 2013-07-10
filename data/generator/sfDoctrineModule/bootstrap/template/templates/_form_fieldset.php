<div class="content-box content-box-header ui-corner-all">
[?php if ('NONE' != $fieldset): ?]
  <div class="ui-state-default ui-corner-top ui-box-header">
	  <span class="ui-icon float-left ui-icon-grip-dotted-vertical"></span>
		[?php echo __($fieldset, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]
	</div>
[?php endif; ?]
  <div class="content-box-wrapper">
    <fieldset id="sf_fieldset_[?php echo preg_replace('/[^a-z0-9_]/', '_', strtolower($fieldset)) ?]">
      [?php foreach ($fields as $name => $field): ?]
        [?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?]
        [?php include_partial('<?php echo $this->getModuleName() ?>/form_field', array(
          'name'       => $name,
          'attributes' => $field->getConfig('attributes', array()),
          'label'      => $field->getConfig('label'),
          'help'       => $field->getConfig('help'),
          'form'       => $form,
          'field'      => $field,
          'class'      => 'sf_admin_form_row sf_admin_'.strtolower($field->getType()).' sf_admin_form_field_'.$name,
        )) ?]
      [?php endforeach; ?]
    </fieldset>
  </div>
</div>