<?php
	
	function paan($text) {

		$paan = array(); $paan_length = array();

		preg_match_all("/\w/", $text, $match);
		$match = $match[0];

		for ($ind = 3; $ind < sizeof($match)-1; $ind++) {
			
			if($match[$ind] == $match[$ind-1] && $match[$ind+1] == $match[$ind-2]) {

				array_push($paan, $match[$ind-2].$match[$ind-1].$match[$ind].$match[$ind+1]);
				array_push($paan_length, strlen($paan[sizeof($paan)-1]));

				for($i = 3; $i < sizeof($match); $i++) {

					if($match[$ind+($i-1)] == $match[$ind+($i*-1)]) {

						array_push($paan, $match[$ind+($i*-1)].$paan[sizeof($paan)-1].$match[$ind+($i-1)]);
						array_push($paan_length, strlen($paan[sizeof($paan)-1]));

					} else break;

				}

			}

		}

		$result = array();

		$result["matches"] = $paan;
		$result["largest"] = $paan[array_search(max($paan_length), $paan_length)];
		$result["smallest"] = $paan[array_search(min($paan_length), $paan_length)];

		$result = json_decode(json_encode($result));

		return $result;

	}