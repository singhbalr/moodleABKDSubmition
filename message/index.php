<?php

require_once(__DIR__ . '/../../config.php');

global $DB;

$PAGE->set_url(new moodle_url('/local/message/index.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Manage messages');

echo $OUTPUT->header();
$student = $DB->get_records('user');

$context = (object)[
    "student" => array_values($student),
    "viewUrl" => new moodle_url('/local/message/viewCourse.php'),
];

echo $OUTPUT->render_from_template('local_message/index',$context);

echo $OUTPUT->footer();
// $templatecontext = (object)[
//     'messages' => array_values($messages),
//     'editurl' => new moodle_url('/local/message/edit.php'),
// ];