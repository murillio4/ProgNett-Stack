<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../');
	exit;
}

class UIO_Filter {
    // public function filter_handle(&$handle, $olduser) {
    //     if (isset($olduser)) {
    //         return 'You are not allowed to change your username';
    //     }
    // }

    public function filter_email(&$email, $olduser) {
        if (isset($olduser)) {
            return;
		}
    }
}
