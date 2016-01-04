var $j = jQuery.noConflict();

$j(document).ready(function(){

	$j('.radio_yes').on("click", function(){
		$j('.radio_yes').addClass('selected');
		$j('.radio_no').removeClass('selected');

		$j('#airport-field').show();
		$j('#railway-field').show();
	});

	$j('.radio_no').on("click", function(){
		$j('.radio_no').addClass('selected');
		$j('.radio_yes').removeClass('selected');

		$j('#airport-field').hide();
		$j('#railway-field').hide();
	});

});

function blankRail(){
	var rail = $j('#railway-field');
	var air_value = $j('#enquiry-airport').val();
	
	if (air_value === "None"){ rail.show(); } else { rail.hide(); }
}

function blankAir(){
	var air = $j('#airport-field');
	var rail_value = $j('#enquiry-railway').val();
	
	if (rail_value === "None"){ air.show(); } else { air.hide(); }
}

function validate_form(){

	// Validate Name 
	var enquiry_name = $j("#enquiry-name").val();
	var verify_name = /[a-zA-Z ]/i;

	// Validate Name 
	var enquiry_surname = $j("#enquiry-surname").val();
	var verify_surname = /[a-zA-Z ]/i;

	// Validate email
	var enquiry_email = $j("#enquiry-email").val();
	var verify_email = /\S+\@\S+\.+\S+/i;

	// Validate Tel
	var enquiry_telephone = $j("#enquiry-telephone").val();
	var verify_telephone = /[0-9 ]/i;

	// Validate address
	var enquiry_address = $j("#enquiry-address").val();
	var verify_address = /[0-9a-zA-Z ]/i;

	// Validate postcode
	var enquiry_postcode = $j("#enquiry-postcode").val();
	var verify_postcode = /[0-9a-zA-Z ]/i;

	// Validate country
	var enquiry_country = $j("#enquiry-country").val();
	var verify_country = /[a-zA-Z ]/i;

	// Validate start
	var enquiry_start = $j("#enquiry-start").val();
	var verify_start = /^([1-9]|[0-3][0-9])-([1-9]|[0][0-9]|[0-1][0-2])-[0-9][0-9]$/g;

	// Validate end
	var enquiry_end = $j("#enquiry-end").val();
	var verify_end = /^([1-9]|[0-3][0-9])-([1-9]|[0][0-9]|[0-1][0-2])-[0-9][0-9]$/g;

	// Validate purpose
	var enquiry_purpose = $j("#enquiry-purpose").val();

	// Validate area
	var enquiry_area = $j("#enquiry-area").val();

	var valid = true;

	if (enquiry_name.match(verify_name)){ 
		$j("#name-field").removeClass('error-field');
		$j("#name-field").addClass('verified-field');
	} 
	else {
		$j("#name-field").addClass('error-field');
		$j("#name-field").removeClass('verified-field');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	}

	if (enquiry_surname.match(verify_surname)){ 
		$j("#surname-field").removeClass('error-field');
		$j("#surname-field").addClass('verified-field');
	} 
	else {
		$j("#surname-field").addClass('error-field');
		$j("#surname-field").removeClass('verified-field');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	}

	if (enquiry_email.match(verify_email)){ 
		$j("#email-field").removeClass('error-field');
		$j("#email-field").addClass('verified-field');
	} 
	else {
		$j("#email-field").addClass('error-field');
		$j("#email-field").removeClass('verified-field');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	}

	if (enquiry_telephone.match(verify_telephone)){ 
		$j("#telephone-field").removeClass('error-field');
		$j("#telephone-field").addClass('verified-field');
	} 
	else {
		$j("#telephone-field").addClass('error-field');
		$j("#telephone-field").removeClass('verified-field');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	}

	if (enquiry_address.match(verify_address)){ 
		$j("#address-field").removeClass('error-field');
		$j("#address-field").addClass('verified-field');
	} 
	else {
		$j("#address-field").addClass('error-field');
		$j("#address-field").removeClass('verified-field');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	}

	if (enquiry_postcode.match(verify_postcode)){ 
		$j("#postcode-field").removeClass('error-field');
		$j("#postcode-field").addClass('verified-field');
	} 
	else {
		$j("#postcode-field").addClass('error-field');
		$j("#postcode-field").removeClass('verified-field');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	}

	if (enquiry_country.match(verify_country)){ 
		$j("#country-field").removeClass('error-field');
		$j("#country-field").addClass('verified-field');
	} 
	else {
		$j("#country-field").addClass('error-field');
		$j("#country-field").removeClass('verified-field');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	}

	if (enquiry_start.match(verify_start)){ 
		$j("#start-field").removeClass('error-field');
		$j("#start-field").addClass('verified-field');
	} 
	else {
		$j("#start-field").addClass('error-field');
		$j("#start-field").removeClass('verified-field');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	}

	if (enquiry_end.match(verify_end)){ 
		$j("#end-field").removeClass('error-field');
		$j("#end-field").addClass('verified-field');
	} 
	else {
		$j("#end-field").addClass('error-field');
		$j("#end-field").removeClass('verified-field');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	}

	if (enquiry_purpose.match(0)){ 
		$j("#purpose-label").addClass('error-select');
		$j("#purpose-label").removeClass('verified-select');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	} 
	else {
		$j("#purpose-label").removeClass('error-select');
		$j("#purpose-label").addClass('verified-select');
	}

	if (enquiry_area.match(0)){ 
		$j("#area-label").addClass('error-select');
		$j("#area-label").removeClass('verified-select');

		$j(".submit-section").addClass('errors_found');

		valid = false;
	} 
	else {
		$j("#area-label").removeClass('error-select');
		$j("#area-label").addClass('verified-select');
	}

	if (enquiry_name === '' || enquiry_surname === '' || enquiry_email === '' || enquiry_telephone === '' || enquiry_address === '' || enquiry_postcode === '' || enquiry_country === '') {
		$j('#personal-details .complete-section').hide();
		$j('#personal-details .incomplete-section').show();

		valid = false;
	} else {
		$j('#personal-details .complete-section').show();
		$j('#personal-details .incomplete-section').hide();
	}

	if (enquiry_start === '' || enquiry_end === '') {
		$j('#hire-details .complete-section').hide();
		$j('#hire-details .incomplete-section').show();

		valid = false;
	} else {
		$j('#hire-details .complete-section').show();
		$j('#hire-details .incomplete-section').hide();
	}

	return valid;

}

function check_section1(){

	var enquiry_name = $j("#enquiry-name").val();
	var enquiry_surname = $j("#enquiry-surname").val();
	var enquiry_email = $j("#enquiry-email").val();
	var enquiry_telephone = $j("#enquiry-telephone").val();
	var enquiry_address = $j("#enquiry-address").val();
	var enquiry_postcode = $j("#enquiry-postcode").val();
	var enquiry_country = $j("#enquiry-country").val();

	if (enquiry_name === '' || enquiry_surname === '' || enquiry_email === '' || enquiry_telephone === '' || enquiry_address === '' || enquiry_postcode === '' || enquiry_country === '') {
		$j('#personal-details .complete-section').hide();
		$j('#personal-details .incomplete-section').show();
	} else {
		$j('#personal-details .complete-section').show();
		$j('#personal-details .incomplete-section').hide();
	}

}

function check_section2(){

	var enquiry_start = $j("#enquiry-start").val();
	var enquiry_end = $j("#enquiry-end").val();
	var enquiry_purpose = $j("#enquiry-purpose").val();
	var enquiry_area = $j("#enquiry-area").val();
	

	if (enquiry_start === '' || enquiry_end === '' || enquiry_purpose === 0 || enquiry_area === 0) {
		$j('#hire-details .complete-section').hide();
		$j('#hire-details .incomplete-section').show();
	} else {
		$j('#hire-details .complete-section').show();
		$j('#hire-details .incomplete-section').hide();
	}

}

function check_section3(){

	var enquiry_name = $j("#enquiry-name").val();
	var enquiry_surname = $j("#enquiry-surname").val();
	var enquiry_email = $j("#enquiry-email").val();
	var enquiry_telephone = $j("#enquiry-telephone").val();

	if (enquiry_name === '' || enquiry_surname === '' || enquiry_email === '' || enquiry_telephone === '') {
		$j('#personal-details .complete-section').hide();
		$j('#personal-details .incomplete-section').show();
	} else {
		$j('#personal-details .complete-section').show();
		$j('#personal-details .incomplete-section').hide();
	}

}


$j(document).ready(function(){

	$j("#enquiry-name").on("input", function(){

		// Validate Name
		var enquiry_name = $j("#enquiry-name").val();
		var verify_name = /[a-zA-Z ]/i;

		if (!enquiry_name.match(verify_name)) { 
			$j("#name-field").addClass('error-field');
			$j("#name-field").removeClass('verified-field');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#name-field").removeClass('error-field');
			$j("#name-field").addClass('verified-field');
		}
	});

	$j("#enquiry-surname").on("input", function(){

		// Validate surname
		var enquiry_surname = $j("#enquiry-surname").val();
		var verify_surname = /[a-zA-Z ]/i;

		if (!enquiry_surname.match(verify_surname)) { 
			$j("#surname-field").addClass('error-field');
			$j("#surname-field").removeClass('verified-field');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#surname-field").removeClass('error-field');
			$j("#surname-field").addClass('verified-field');
		}
	});

	$j("#enquiry-email").on("input", function(){

		// Validate email
		var enquiry_email = $j("#enquiry-email").val();
		var verify_email = /\S+\@\S+\.+\S+/i;

		if (!enquiry_email.match(verify_email)) { 
			$j("#email-field").addClass('error-field');
			$j("#email-field").removeClass('verified-field');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#email-field").removeClass('error-field');
			$j("#email-field").addClass('verified-field');
		}
	});

	$j("#enquiry-telephone").on("input", function(){

		// Validate telephone
		var enquiry_telephone = $j("#enquiry-telephone").val();
		var verify_telephone = /[0-9 ]/i;

		if (!enquiry_telephone.match(verify_telephone)) { 
			$j("#telephone-field").addClass('error-field');
			$j("#telephone-field").removeClass('verified-field');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#telephone-field").removeClass('error-field');
			$j("#telephone-field").addClass('verified-field');
		}
	});

	$j("#enquiry-address").on("input", function(){

		// Validate address
		var enquiry_address = $j("#enquiry-address").val();
		var verify_address = /[0-9a-zA-Z ]/i;

		if (!enquiry_address.match(verify_address)) { 
			$j("#address-field").addClass('error-field');
			$j("#address-field").removeClass('verified-field');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#address-field").removeClass('error-field');
			$j("#address-field").addClass('verified-field');
		}
	});

	$j("#enquiry-postcode").on("input", function(){

		// Validate postcode
		var enquiry_postcode = $j("#enquiry-postcode").val();
		var verify_postcode = /[0-9a-zA-Z ]/i;

		if (!enquiry_postcode.match(verify_postcode)) { 
			$j("#postcode-field").addClass('error-field');
			$j("#postcode-field").removeClass('verified-field');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#postcode-field").removeClass('error-field');
			$j("#postcode-field").addClass('verified-field');
		}
	});

	$j("#enquiry-country").on("input", function(){

		// Validate country
		var enquiry_country = $j("#enquiry-country").val();
		var verify_country = /[a-zA-Z ]/i;

		if (!enquiry_country.match(verify_country)) { 
			$j("#country-field").addClass('error-field');
			$j("#country-field").removeClass('verified-field');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#country-field").removeClass('error-field');
			$j("#country-field").addClass('verified-field');
		}
	});

	$j("#enquiry-start").on("input", function(){

		// Validate start
		var enquiry_start = $j("#enquiry-start").val();
		var verify_start = /^([1-9]|[0-3][0-9])-([1-9]|[0][0-9]|[0-1][0-2])-[0-9][0-9]$/g;

		if (!enquiry_start.match(verify_start)) { 
			$j("#start-field").addClass('error-field');
			$j("#start-field").removeClass('verified-field');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#start-field").removeClass('error-field');
			$j("#start-field").addClass('verified-field');
		}
	});

	$j("#enquiry-end").on("input", function(){

		// Validate end
		var enquiry_end = $j("#enquiry-end").val();
		var verify_end = /^([1-9]|[0-3][0-9])-([1-9]|[0][0-9]|[0-1][0-2])-[0-9][0-9]$/g;

		if (!enquiry_end.match(verify_end)) { 
			$j("#end-field").addClass('error-field');
			$j("#end-field").removeClass('verified-field');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#end-field").removeClass('error-field');
			$j("#end-field").addClass('verified-field');
		}
	});

	$j("#enquiry-purpose").on("change", function(){

		// Validate purpose
		var enquiry_purpose = $j("#enquiry-purpose").val();

		if (enquiry_purpose.match(0)) { 
			$j("#purpose-label").addClass('error-select');
			$j("#purpose-label").removeClass('verified-select');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#purpose-label").removeClass('error-select');
			$j("#purpose-label").addClass('verified-select');
		}
	});

	$j("#enquiry-area").on("change", function(){

		// Validate area
		var enquiry_area = $j("#enquiry-area").val();

		if (enquiry_area.match(0)) { 
			$j("#area-label").addClass('error-select');
			$j("#area-label").removeClass('verified-select');

			$j(".submit-section").addClass('errors_found');
		} 
		else {
			$j("#area-label").removeClass('error-select');
			$j("#area-label").addClass('verified-select');
		}
	});

});