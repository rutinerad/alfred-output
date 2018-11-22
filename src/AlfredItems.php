<?php

namespace Rutinerad\Alfred;

/**
 * Documented here: https://www.alfredapp.com/help/workflows/inputs/script-filter/json/
 */
class AlfredItems {
	public $items = array();

	function addItems(array $items) {
		$this->items = array_merge($this->items, $items);
	}

	function addItem(AlfredItem $item) {
		$this->items[] = $item;
	}

	function getJson() {
        $items = array('items' => array_map(function($item) {
            return $item->getArray();
        }, $this->items));

        return json_encode($items);
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
//         }
//     }
// ]}

 ?>
