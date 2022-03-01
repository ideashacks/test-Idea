<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'admin@ideashacks.com',
    'to' => 'initiative@ideashcks.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Your Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Your Name\' is required.'
    )
    ),
    'phone' => array(
    'order' => 2,
    'type' => 'tel',
    'label' => 'How can we contact you?',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'How can we contact you?\' is required.'
    )
    ),
    'select-1' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'select-1',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'select-1\' is required.'
    )
    ),
    'select' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'select',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>