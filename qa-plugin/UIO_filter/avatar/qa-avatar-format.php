<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../');
    exit;
}

function qa_get_gravatar_html($email, $size)
{
    if ($size>0) {
        return '<IMG SRC="'.(qa_is_https_probably() ? 'https' : 'http').
        '://www.gravatar.com/avatar/'.md5(strtolower(trim($email))).'?d=identicon&s='.(int)$size.
        '" WIDTH="'.(int)$size.'" HEIGHT="'.(int)$size.'" CLASS="qa-avatar-image" ALT=""/>';
    }else {
        return null;
    }
}
