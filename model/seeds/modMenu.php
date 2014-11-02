<?php
/**
 * The menu 'text' and 'description' fields should be Lexicon keys.
 */
return array(
    array(
        'text' => 'yourpackage',
        'description' => 'yourpackage_desc',
        'parent' => 'components',
        'action' => 0,
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => '',
        'Action' => array (
            /**
             * A Zero value for "action" will force this to inherit from the related object
             * Seeding this data will throw an ERROR during install: "Attempt to set NOT NULL field action to NULL"
             * It's expected; you may safely ignore it in this case.
             */
            'action' => 0,
            'namespace' => 'yourpackage',
            'controller' => 'index',
            'haslayout' => 1,
            'lang_topics' => 'yourpackage:default',
            'assets' => '',
            'help_url' =>  '',
        ),
    ),
);
/*EOF*/