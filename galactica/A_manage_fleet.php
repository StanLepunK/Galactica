<?php
	function set_fleet($list):array {
		$ship_rebel = new Ship("Cruiser", "wrath of God", "Rebel");
		$ship_rebel->build();
		$ship_rebel->set_pos(10,10);
		array_push($list,$ship_rebel);
		$ship_empire = new Ship("Destroyer", "Blood Lust", "Empire");
		$ship_empire->build();
		$ship_rebel->set_pos(50,50);
		array_push($list,$ship_empire);
		// use point to build a fleet in between all ships available,
		// display the file where the player can choice ships.
		return $list;
	}


	function init_fleet($canvas, $list_fleet) {
		foreach($list_fleet as $sh) {
			if(!$sh->get_born_is()) {
				$sh->set_pos(0,rand(0,$canvas->get_y()));
				$sh->set_born_is(true);
			}
		}
	}

	function show_fleet($canvas, $map, $list_fleet) {
		$len = count($map);
		

		foreach($list_fleet as $sh) {
			
		}
	}
?>