[?php if ($field->isPartial()): ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
[?php include_component('<?php echo $this->getModuleName() ?>', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
<div class="[?php echo $class ?][?php $form[$name]->hasError() and print ' errors' ?] control-group">
    <div>
        [?php echo $form[$name]->renderLabel($label, array('class' => 'control-label')) ?]

        <div class="controls">

            [?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ?
                $attributes->getRawValue() : $attributes) ?]

            [?php if ($help): ?]
            <div class="help-block">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</div>
            [?php elseif ($help = $form[$name]->renderHelp()): ?]
            <div class="help-block">[?php echo $help ?]</div>
            [?php endif; ?]

            <label class="error">[?php echo $form[$name]->renderError(array('class' => 'error')) ?]</label>
        </div>
    </div>
</div>
[?php endif; ?]
