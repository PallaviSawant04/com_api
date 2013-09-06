<?php 
/**
 * @package	API
 * @version 1.5
 * @author 	Brian Edgerton
 * @link 	http://www.edgewebworks.com
 * @copyright Copyright (C) 2011 Edge Web Works, LLC. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

defined('_JEXEC') or die('Restricted Access');

class ApiControllerKey extends ApiControllerAdmin {
	

    function __construct() {
		//echo "ddd";die();
        $this->view_list = 'keys';
        parent::__construct();
    }
   
}