<?php

/**
 * Prints contact details (email address & telephone number)
 */

if (!function_exists('the_contact_details')) {

	function the_contact_details() {

		$telephone_number = get_field('telephone_number', 'option');
		$email = get_field('email_address', 'option');
		$html = "";

		if (!$email && !$telephone_number) {
			return;
		} else {

			if ($email) {
			    $html .= '<a href="mailto:' . $email . '">' . $email . '</a>';
			}

			if ($telephone_number) {
				$html .= '<a href="callto:"' . $telephone_number . '">' . $telephone_number . '</a>';
			}

			echo $html;

		}
	}

} else {
	echo "Function Already Exists: the_contact_details";
}

