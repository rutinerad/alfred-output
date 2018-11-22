<?php

namespace Rutinerad\Alfred;

class AlfredUtils {
	static function printError($message) {
		$item = new AlfredItem();

		$item->title = $message;
		$item->valid = false;

		$items = new AlfredItems();
		$items->addItem($item);

		echo $items->getJson();
	}
}

?>