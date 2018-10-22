<?php

function getFeel($t) {
	if ($t > 30) {
		return "karšta";
	} else if ($t > 15) {
		return "šilta";
	} else if ($t >= 5 && $t <= 14) {
		return "vėsu";
	}
}