[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? '<?php echo $this->params['route_prefix'] ?>' : '<?php echo $this->params['route_prefix'] ?>_'.$action;
  }

  public function linkToNew($params)
  {
    return link_to('<i class="icon-plus"></i> ' . __($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new'), array('class' => 'btn'));
  }
  
  public function linkToShow($object, $params)
  {
    // return link_to('<i class="icon-eye-open"></i> ' . __($params['label'], array(), 'sf_admin'), $this->getUrlForAction('show'), $object, array('class' => 'btn'));
    return link_to('<i class="icon-eye-open"></i>', $this->getUrlForAction('show'), $object, array('class' => 'btn'));
  }

	public function linkToEdit($object, $params)
  {
    // return link_to('<i class=" icon-pencil"></i> ' . __($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object, array('class' => 'btn'));
    return link_to('<i class=" icon-pencil"></i>', $this->getUrlForAction('edit'), $object, array('class' => 'btn'));
  }

  public function linkToDelete($object, $params)
  {
    if ($object->isNew())
    {
      return '';
    }

    // return link_to('<i class="icon-trash"></i> '. __($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('class' => 'btn', 'method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm']));
    return link_to('<i class="icon-trash icon-white"></i>', $this->getUrlForAction('delete'), $object, array('class' => 'btn btn-danger', 'method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm']));
  }

  public function linkToList($params)
  {
    return link_to('<i class="icon-list"></i> ' . __($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('list'), array('class' => 'btn ui-state-default ui-corner-all'));
  }

  public function linkToSave($object, $params)
  {
    return '<input type="submit" value="'.__($params['label'], array(), 'sf_admin').'" class="btn"/>';
  }

  public function linkToSaveAndAdd($object, $params)
  {
    if (!$object->isNew())
    {
      return '';
    }

    return '<input type="submit" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" class="btn"/>';
  }
}
