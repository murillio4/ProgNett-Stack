<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../');
    exit;
}

function qa_create_new_user($email, $password, $handle, $level=QA_USER_LEVEL_BASIC, $confirmed=false) {
    $userid = qa_create_new_user_base($email, $password, $handle, $level, $confirmed);
    if (qa_opt('avatar_allow_gravatar'))
        qa_db_user_set_flag($userid, QA_USER_FLAGS_SHOW_GRAVATAR, true);
    return $userid;
}
