<?php

function qa_page_routing()
{
    $pages = qa_page_routing_base();
    if (qa_opt('tos_serverside'))
        $pages['register'] = UIO_PLUGIN_DIR . '/controllers/register.php'; // changed to include a new file instead of default page
    return $pages;
}
