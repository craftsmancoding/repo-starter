<?php
/**
 * You can reference this TV by name in a template "@TVs" parameter
 */
return array(
    'type' => 'text', // hidden|text|file|etc...
    'name' => 'ExampleTV', // <-- this must match the filename EXACTLY (minus .php)
    'caption' => 'Example TV',
    'description' => '',
    'editor_type' => 0,
    'display' => '', // default
    'default_text' => '',
    'properties' => '',
    'input_properties' => '', // serialized
    'output_properties' => '', // serialized
);
// The closing PHP tag is optional, so I leave it off and use an "end of file" (EOF) comment instead.
/*EOF*/