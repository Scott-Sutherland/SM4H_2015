function blankRail(){var e=$j("#railway-field"),i=$j("#enquiry-airport").val();"None"===i?e.show():e.hide()}function blankAir(){var e=$j("#airport-field"),i=$j("#enquiry-railway").val();"None"===i?e.show():e.hide()}function validate_form(){var e=$j("#enquiry-name").val(),i=/[a-zA-Z ]/i,r=$j("#enquiry-surname").val(),s=/[a-zA-Z ]/i,d=$j("#enquiry-email").val(),l=/\S+\@\S+\.+\S+/i,a=$j("#enquiry-telephone").val(),o=/[0-9 ]/i,n=$j("#enquiry-address").val(),t=/[0-9a-zA-Z ]/i,f=$j("#enquiry-postcode").val(),j=/[0-9a-zA-Z ]/i,c=$j("#enquiry-country").val(),u=/[a-zA-Z ]/i,m=$j("#enquiry-start").val(),v=/^([1-9]|[0-3][0-9])-([1-9]|[0][0-9]|[0-1][0-2])-[0-9][0-9]$/g,C=$j("#enquiry-end").val(),p=/^([1-9]|[0-3][0-9])-([1-9]|[0][0-9]|[0-1][0-2])-[0-9][0-9]$/g,h=$j("#enquiry-purpose").val(),y=$j("#enquiry-area").val(),q=!0;return e.match(i)?($j("#name-field").removeClass("error-field"),$j("#name-field").addClass("verified-field")):($j("#name-field").addClass("error-field"),$j("#name-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"),q=!1),r.match(s)?($j("#surname-field").removeClass("error-field"),$j("#surname-field").addClass("verified-field")):($j("#surname-field").addClass("error-field"),$j("#surname-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"),q=!1),d.match(l)?($j("#email-field").removeClass("error-field"),$j("#email-field").addClass("verified-field")):($j("#email-field").addClass("error-field"),$j("#email-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"),q=!1),a.match(o)?($j("#telephone-field").removeClass("error-field"),$j("#telephone-field").addClass("verified-field")):($j("#telephone-field").addClass("error-field"),$j("#telephone-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"),q=!1),n.match(t)?($j("#address-field").removeClass("error-field"),$j("#address-field").addClass("verified-field")):($j("#address-field").addClass("error-field"),$j("#address-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"),q=!1),f.match(j)?($j("#postcode-field").removeClass("error-field"),$j("#postcode-field").addClass("verified-field")):($j("#postcode-field").addClass("error-field"),$j("#postcode-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"),q=!1),c.match(u)?($j("#country-field").removeClass("error-field"),$j("#country-field").addClass("verified-field")):($j("#country-field").addClass("error-field"),$j("#country-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"),q=!1),m.match(v)?($j("#start-field").removeClass("error-field"),$j("#start-field").addClass("verified-field")):($j("#start-field").addClass("error-field"),$j("#start-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"),q=!1),C.match(p)?($j("#end-field").removeClass("error-field"),$j("#end-field").addClass("verified-field")):($j("#end-field").addClass("error-field"),$j("#end-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"),q=!1),h.match(0)?($j("#purpose-label").addClass("error-select"),$j("#purpose-label").removeClass("verified-select"),$j(".submit-section").addClass("errors_found"),q=!1):($j("#purpose-label").removeClass("error-select"),$j("#purpose-label").addClass("verified-select")),y.match(0)?($j("#area-label").addClass("error-select"),$j("#area-label").removeClass("verified-select"),$j(".submit-section").addClass("errors_found"),q=!1):($j("#area-label").removeClass("error-select"),$j("#area-label").addClass("verified-select")),""===e||""===r||""===d||""===a||""===n||""===f||""===c?($j("#personal-details .complete-section").hide(),$j("#personal-details .incomplete-section").show(),q=!1):($j("#personal-details .complete-section").show(),$j("#personal-details .incomplete-section").hide()),""===m||""===C?($j("#hire-details .complete-section").hide(),$j("#hire-details .incomplete-section").show(),q=!1):($j("#hire-details .complete-section").show(),$j("#hire-details .incomplete-section").hide()),q}function check_section1(){var e=$j("#enquiry-name").val(),i=$j("#enquiry-surname").val(),r=$j("#enquiry-email").val(),s=$j("#enquiry-telephone").val(),d=$j("#enquiry-address").val(),l=$j("#enquiry-postcode").val(),a=$j("#enquiry-country").val();""===e||""===i||""===r||""===s||""===d||""===l||""===a?($j("#personal-details .complete-section").hide(),$j("#personal-details .incomplete-section").show()):($j("#personal-details .complete-section").show(),$j("#personal-details .incomplete-section").hide())}function check_section2(){var e=$j("#enquiry-start").val(),i=$j("#enquiry-end").val(),r=$j("#enquiry-purpose").val(),s=$j("#enquiry-area").val();""===e||""===i||0===r||0===s?($j("#hire-details .complete-section").hide(),$j("#hire-details .incomplete-section").show()):($j("#hire-details .complete-section").show(),$j("#hire-details .incomplete-section").hide())}function check_section3(){var e=$j("#enquiry-name").val(),i=$j("#enquiry-surname").val(),r=$j("#enquiry-email").val(),s=$j("#enquiry-telephone").val();""===e||""===i||""===r||""===s?($j("#personal-details .complete-section").hide(),$j("#personal-details .incomplete-section").show()):($j("#personal-details .complete-section").show(),$j("#personal-details .incomplete-section").hide())}var $j=jQuery.noConflict();$j(document).ready(function(){$j(".radio_yes").on("click",function(){$j(".radio_yes").addClass("selected"),$j(".radio_no").removeClass("selected"),$j("#airport-field").show(),$j("#railway-field").show()}),$j(".radio_no").on("click",function(){$j(".radio_no").addClass("selected"),$j(".radio_yes").removeClass("selected"),$j("#airport-field").hide(),$j("#railway-field").hide()})}),$j(document).ready(function(){$j("#enquiry-name").on("input",function(){var e=$j("#enquiry-name").val(),i=/[a-zA-Z ]/i;e.match(i)?($j("#name-field").removeClass("error-field"),$j("#name-field").addClass("verified-field")):($j("#name-field").addClass("error-field"),$j("#name-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"))}),$j("#enquiry-surname").on("input",function(){var e=$j("#enquiry-surname").val(),i=/[a-zA-Z ]/i;e.match(i)?($j("#surname-field").removeClass("error-field"),$j("#surname-field").addClass("verified-field")):($j("#surname-field").addClass("error-field"),$j("#surname-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"))}),$j("#enquiry-email").on("input",function(){var e=$j("#enquiry-email").val(),i=/\S+\@\S+\.+\S+/i;e.match(i)?($j("#email-field").removeClass("error-field"),$j("#email-field").addClass("verified-field")):($j("#email-field").addClass("error-field"),$j("#email-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"))}),$j("#enquiry-telephone").on("input",function(){var e=$j("#enquiry-telephone").val(),i=/[0-9 ]/i;e.match(i)?($j("#telephone-field").removeClass("error-field"),$j("#telephone-field").addClass("verified-field")):($j("#telephone-field").addClass("error-field"),$j("#telephone-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"))}),$j("#enquiry-address").on("input",function(){var e=$j("#enquiry-address").val(),i=/[0-9a-zA-Z ]/i;e.match(i)?($j("#address-field").removeClass("error-field"),$j("#address-field").addClass("verified-field")):($j("#address-field").addClass("error-field"),$j("#address-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"))}),$j("#enquiry-postcode").on("input",function(){var e=$j("#enquiry-postcode").val(),i=/[0-9a-zA-Z ]/i;e.match(i)?($j("#postcode-field").removeClass("error-field"),$j("#postcode-field").addClass("verified-field")):($j("#postcode-field").addClass("error-field"),$j("#postcode-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"))}),$j("#enquiry-country").on("input",function(){var e=$j("#enquiry-country").val(),i=/[a-zA-Z ]/i;e.match(i)?($j("#country-field").removeClass("error-field"),$j("#country-field").addClass("verified-field")):($j("#country-field").addClass("error-field"),$j("#country-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"))}),$j("#enquiry-start").on("input",function(){var e=$j("#enquiry-start").val(),i=/^([1-9]|[0-3][0-9])-([1-9]|[0][0-9]|[0-1][0-2])-[0-9][0-9]$/g;e.match(i)?($j("#start-field").removeClass("error-field"),$j("#start-field").addClass("verified-field")):($j("#start-field").addClass("error-field"),$j("#start-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"))}),$j("#enquiry-end").on("input",function(){var e=$j("#enquiry-end").val(),i=/^([1-9]|[0-3][0-9])-([1-9]|[0][0-9]|[0-1][0-2])-[0-9][0-9]$/g;e.match(i)?($j("#end-field").removeClass("error-field"),$j("#end-field").addClass("verified-field")):($j("#end-field").addClass("error-field"),$j("#end-field").removeClass("verified-field"),$j(".submit-section").addClass("errors_found"))}),$j("#enquiry-purpose").on("change",function(){var e=$j("#enquiry-purpose").val();e.match(0)?($j("#purpose-label").addClass("error-select"),$j("#purpose-label").removeClass("verified-select"),$j(".submit-section").addClass("errors_found")):($j("#purpose-label").removeClass("error-select"),$j("#purpose-label").addClass("verified-select"))}),$j("#enquiry-area").on("change",function(){var e=$j("#enquiry-area").val();e.match(0)?($j("#area-label").addClass("error-select"),$j("#area-label").removeClass("verified-select"),$j(".submit-section").addClass("errors_found")):($j("#area-label").removeClass("error-select"),$j("#area-label").addClass("verified-select"))})});