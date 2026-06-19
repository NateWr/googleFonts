<?php

if (version_compare(PHP_VERSION, '8.0.0', '<')) {
    return null;
}

require_once('GoogleFontsPlugin.inc.php');
return new GoogleFontsPlugin();
