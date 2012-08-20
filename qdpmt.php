<?php
class qdpmt extends Module
{
  public function __construct()
  {
    $this->name = 'qdpmt';
    $this->tab = 'qdpmt';
    $this->version = 0.1;
    $this->author = 'TC';
    $this->need_instance = 0;

    parent::__construct();

    $this->displayName = $this->l( 'Quick-and-dirty Prestashop Module' );
    $this->description = $this->l( 'Module template' );
  }

  public function install()
  {
    if( 
      parent::install() === false 
      /*
      ||
      $this->registerHook('RightColum') === false
      */
      )
    return false;
    return true;
  }

  public function uninstall()
  {
    if( 
      parent::uninstall() == false 
      /*
      ||
      $this->unregisterHook('RightColum') === false
      */
      )
    return false;
    return true;
  }
  
  /*
  public function hookRightColumn( $params )
  {
    global $smarty;
    $smarty->assign('variable','var');
    return $this->display(__FILE__, 'template.tpl');
  }
  */

}
?>
