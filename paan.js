function paan($text) {

	$paan = []; $paan_length = [];

	$match = new String($text);

	for ($ind = 3; $ind < $match.length-1; $ind++) {
		
		if($match[$ind] == $match[$ind-1] && $match[$ind+1] == $match[$ind-2]) {

			$paan.push($match[$ind-2]+$match[$ind-1]+$match[$ind]+$match[$ind+1]);
			$paan_length.push($paan[$paan.length-1].length);

			for($i = 3; $i < $match.length; $i++) {

				if($match[$ind+($i-1)] == $match[$ind+($i*-1)]) {

					$paan.push($match[$ind+($i*-1)]+$paan[$paan.length-1]+$match[$ind+($i-1)]);
					$paan_length.push($paan[$paan.length-1].length);

				} else break;

			}

		}

	}

	$result = {};

	$result["matches"] = $paan;
	$result["largest"] = $paan[$paan_length.indexOf(Math.max.apply(null, $paan_length))];
	$result["smallest"] = $paan[$paan_length.indexOf(Math.min.apply(null, $paan_length))];

	return $result;

}