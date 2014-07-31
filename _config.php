<?php

define('TYPEKIT_DIR', basename(dirname(__FILE__)));

// Enable the TypeKit TinyMCE plugin by default.
HtmlEditorConfig::get('cms')->enablePlugins(array('typekit' => null));