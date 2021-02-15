get-session-language

Set locale by your language 
switch ($SESSION->lang) {
	case 'en':
		setlocale(LC_TIME, 'C.UTF-8');
		break;
	
	case 'fr':
		setlocale(LC_TIME, 'fr_FR.utf8');
		break;

	default:
		setlocale(LC_TIME, 'C.UTF-8');
		break;
}

String functions are defined in
	lib/moodlelib.php - locale related functions
	lib/textlib.class.php - general string functions (substr, strlen etc.)
