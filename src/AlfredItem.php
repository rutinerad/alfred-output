<?php

namespace Rutinerad\Alfred;

/**
 * Documented here: https://www.alfredapp.com/help/workflows/inputs/script-filter/json/
 */
class AlfredItem {
	public $uid; // string
	public $type; // string
	public $title; // string
	public $subtitle; // string
	public $arg; // string
	public $autocomplete; // string
	public $iconType; // string
	public $iconPath; // string
	public $valid; // boolean
	public $variables; // array
	public $mods; // array
	public $match; // string

	public function __construct($title, $arg = null, $subtitle = null) {
		$this->mods = array();

		$this->title = $title;

		if (isset($arg)) $this->arg = $arg;
		if (isset($subtitle)) $this->subtitle = $subtitle;
	}

	function getArray() {
		$array = array();

		if (!isset($this->title)) throw new Exception("Property 'title' must be set");

		$array['title'] = $this->title;

		if (isset($this->uid)) $array['uid'] = $this->uid;
		if (isset($this->type)) $array['type'] = $this->type;
		if (isset($this->title)) $array['title'] = $this->title;
		if (isset($this->subtitle)) $array['subtitle'] = $this->subtitle;
		if (isset($this->arg)) $array['arg'] = $this->arg;
		if (isset($this->valid)) $array['valid'] = $this->valid;
		if (isset($this->autocomplete)) $array['autocomplete'] = $this->autocomplete;
		if (isset($this->variables)) $array['variables'] = $this->variables;
		if (isset($this->mods) && !empty($this->mods)) $array['mods'] = $this->mods;
		if (isset($this->match) && !empty($this->match)) $array['match'] = $this->match;

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
//         "mods": [],
//         "match": "my family photos"
//     }
// ]}

 ?>