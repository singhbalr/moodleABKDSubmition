<?php

require_once(__DIR__ . '/../../config.php');

global $DB;

$PAGE->set_url(new moodle_url('/local/message/viewCourse.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('View Course');

echo $OUTPUT->header();



// $courses = $DB->get_records('course');

$array = enrol_get_all_users_courses($_GET["userId"]);


// var_dump($castArray);

$context = (object)[
    "courses" => array_values($array),
    "viewUrl" => new moodle_url('/local/message/viewCourse.php'),
];

echo $OUTPUT->render_from_template('local_message/viewCourse',$context);

echo $OUTPUT->footer();
// $templatecontext = (object)[
//     'messages' => array_values($messages),
//     'editurl' => new moodle_url('/local/message/edit.php'),
// ];