<?php
function local_message_extend_settings_navigation(settings_navigation $settingsnav, context $context){

    global $CFG, $PAGE;


    $settingnode = $settingsnav->find('root', navigation_node::TYPE_SITE_ADMIN);
    if( $settingnode )
    {
        $setMotdMenuLbl = get_string('reports', 'local_message');
        $setMotdUrl = new moodle_url('/local/message/index.php');
        $setMotdnode = navigation_node::create(
            $setMotdMenuLbl,
            $setMotdUrl,
            navigation_node::NODETYPE_LEAF);

        $settingnode->add_node($setMotdnode);
    }




}