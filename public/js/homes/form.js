$(document).ready(function() {

	//language translation
	googleTranslateElementInit();
});

function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}