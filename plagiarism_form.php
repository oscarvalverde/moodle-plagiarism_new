<?php

require_once($CFG->dirroot.'/lib/formslib.php');

class plagiarism_setup_form extends moodleform {

/// Define the form
    function definition () {
        global $CFG;

        $mform =& $this->_form;
        $choices = array('No','Yes');
        $mform->addElement('html', get_string('cloud_bucket_explain', 'cloud_bucket'));
        $mform->addElement('checkbox', 'cloud_bucket_use', get_string('cloud_bucket_use', 'cloud_bucket'));

        $mform->addElement('textarea', 'cloud_bucket_student_disclosure', get_string('cloud_bucket_student_disclosure','cloud_bucket'),'wrap="virtual" rows="6" cols="50"');
        $mform->addHelpButton('cloud_bucket_student_disclosure', 'cloud_bucket_student_disclosure', 'cloud_bucket');
        $mform->setDefault('cloud_bucket_student_disclosure', get_string('cloud_bucket_student_disclosure_default','cloud_bucket'));

        $this->add_action_buttons(true);
    }
}

