<?php

// wcf imports
require_once(WCF_DIR.'lib/page/TeamPage.class.php');
/**
 *
 *
 * @author 	Jana Pape
 * @copyright	2010
 * @package
 * @subpackage
 * @category
 */
class AdvancedTeamPage extends TeamPage{
	
	public function show() {
		if (MODULE_ADVANCED_TEAM_LIST != 1) {
			throw new IllegalLinkException();
		}
		
		parent::show();
	}
}

?>
