<?php
/*

*/
	class qa_html_theme_layer extends qa_html_theme_base {

	  function main() {
          if($this->template == 'account'){

			  //fix email field on user page
			  $this->content['form_profile']['fields']['email']['type'] = 'static';
			  $this->content['form_profile']['fields']['email']['error'] = '';

		  }

	      qa_html_theme_base::main(); // call back through to the default function
	  }
	};
