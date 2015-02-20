<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
* Pick Color
*
* @package  Addons\Field Types
* @author Robin Gomez (@jarvizx)
* @license  MIT License
* @link http://github.com/jarvizx/pick_minicolor
*/

class Field_pick_minicolors{
 
  public $field_type_slug = 'pick_minicolors';
  public $db_col_type = 'varchar';
  public $version = '1.0.0';

 
 /**
  * Output form input
  *
  * @access public
  * @param array
  * @return string
  */
  public function event(){
    $this->CI->type->add_css('pick_minicolors', 'jquery.minicolors.css');
    $this->CI->type->add_js('pick_minicolors', 'jquery.minicolors.js');
    $this->CI->type->add_js('pick_minicolors', 'app.js');
  }

  public function form_output($data)
  {
    $options['name']   = $data['form_slug'];
    $options['id']   = $data['form_slug'];
    $options['value']  = $data['value'];
    
    return '<input type="text" class="minicolor" name="'.$data['form_slug'].'" value="'.$data['value'].'">';
  }
}

?>
