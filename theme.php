<?php

class Layla extends Mzingi2
{

	public function action_add_template_vars($theme) {

		parent::action_add_template_vars($theme);
		Stack::add('template_stylesheet', array(Site::get_url( 'theme', '/css/style.css' )), 'theme');

	}
	
	public function action_form_comment( $form ) {
		parent::action_form_comment($form);
	}

}

?>
