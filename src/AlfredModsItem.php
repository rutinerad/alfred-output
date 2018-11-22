<?php

namespace Rutinerad\Alfred;

/**
 * Documented here: https://www.alfredapp.com/help/workflows/inputs/script-filter/json/
 */
class AlfredModsItem {
	public $valid;
	public $subtitle;
	public $arg;
	public $iconType;
	public $iconPath;
	public $variables;

	function getArray() {
		$array = array();

		if (isset($this->valid)) $array['valid'] = $this->valid;
		if (isset($this->subtitle)) $array['subtitle'] = $this->subtitle;
		if (isset($this->arg)) $array['arg'] = $this->arg;
		if (isset($this->variables)) $array['variables'] = $this->variables;

		if (isset($this->iconType) || isset($this->iconPath)) $array['icon'] = array();

		if (isset($this->iconType)) $array['icon']['type'] = $this->iconType;
		if (isset($this->iconPath)) $array['icon']['path'] = $this->iconPath;

		return $array;
	}
}

// {"items": [
//     {
//         "uid": "desktop",
//         "type": "file",
//         "title": "Desktop",
//         "subtitle": "~/Desktop",
//         "arg": "~/Desktop",
//         "autocomplete": "Desktop",
//         "icon": {
//             "type": "fileicon",
//             "path": "~/Desktop"
//         },
//   		"mods": {
// 		    "alt": {
// 		        "valid": true,
// 		        "arg": "alfredapp.com/powerpack",
// 		        "subtitle": "https://www.alfredapp.com/powerpack/"
// 		    },
// 		    "cmd": {
// 		        "valid": true,
// 		        "arg": "alfredapp.com/powerpack/buy/",
// 		        "subtitle": "https://www.alfredapp.com/powerpack/buy/"
// 		    }
// 	    }
// 	}
// ]}

 ?>