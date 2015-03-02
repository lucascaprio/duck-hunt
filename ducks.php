<?php
	$number_of_ducks = 50;
	$html = '';
	$e = 0;

	for ($i = 1; $i <= $number_of_ducks; $i++) {
		$html .= '<input type="radio" id="duck'.$i.'" class="radio-duck">';
	}

	for ($i = 1; $i <= $number_of_ducks/2; $i++) {
		$html .= '<input type="radio" id="bomber'.$i.'" class="radio-bomber">';
	}


	for ($i = 1; $i <= $number_of_ducks; $i++) {
		$e++;

		if ($e > 6) {
			$e = 1;
		}

		$html .= '<label for="duck'.$i.'" class="duck duck-'.$e.'" ></label>';
	}

	for ($i = 1; $i <= $number_of_ducks/2; $i++) {
		$e++;

		if ($e > 6) {
			$e = 1;
		}

		$html .= '<label for="bomber'.$i.'" class="duck duck-'.$e.' bomber"><img src="assets/img/boom.svg"></label>';
	}
	

	// echo htmlentities($html);
	echo $html;