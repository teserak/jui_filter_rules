<?php

// the following array could be produced from a database query

$countries = array(
	array("id" => "26", "value" => "Afghanistan", "label" => "Afghanistan"),
	array("id" => "13", "value" => "Albania", "label" => "Albania"),
	array("id" => "14", "value" => "Algeria", "label" => "Algeria"),
	array("id" => "16", "value" => "American Samoa", "label" => "American Samoa"),
	array("id" => "18", "value" => "Andorra", "label" => "Andorra"),
	array("id" => "6", "value" => "Angola", "label" => "Angola"),
	array("id" => "7", "value" => "Anguilla", "label" => "Anguilla"),
	array("id" => "19", "value" => "Antarctica", "label" => "Antarctica"),
	array("id" => "20", "value" => "Antigua and Barbuda", "label" => "Antigua and Barbuda"),
	array("id" => "21", "value" => "Argentina", "label" => "Argentina"),
	array("id" => "22", "value" => "Armenia", "label" => "Armenia"),
	array("id" => "23", "value" => "Aruba", "label" => "Aruba"),
	array("id" => "24", "value" => "Australia", "label" => "Australia"),
	array("id" => "25", "value" => "Austria", "label" => "Austria"),
	array("id" => "8", "value" => "Azerbaijan", "label" => "Azerbaijan"),
	array("id" => "135", "value" => "Bahamas", "label" => "Bahamas"),
	array("id" => "136", "value" => "Bahrain", "label" => "Bahrain"),
	array("id" => "133", "value" => "Bangladesh", "label" => "Bangladesh"),
	array("id" => "134", "value" => "Barbados", "label" => "Barbados"),
	array("id" => "106", "value" => "Belarus", "label" => "Belarus"),
	array("id" => "29", "value" => "Belgium", "label" => "Belgium"),
	array("id" => "137", "value" => "Belize", "label" => "Belize"),
	array("id" => "138", "value" => "Benin", "label" => "Benin"),
	array("id" => "31", "value" => "Bermuda", "label" => "Bermuda"),
	array("id" => "143", "value" => "Bhutan", "label" => "Bhutan"),
	array("id" => "33", "value" => "Bolivia", "label" => "Bolivia"),
	array("id" => "35", "value" => "Bosnia Hercegovina", "label" => "Bosnia Hercegovina"),
	array("id" => "139", "value" => "Botswana", "label" => "Botswana"),
	array("id" => "140", "value" => "Bouvet Island", "label" => "Bouvet Island"),
	array("id" => "37", "value" => "Brazil", "label" => "Brazil"),
	array("id" => "38", "value" => "British Indian Ocean Terr.", "label" => "British Indian Ocean Terr."),
	array("id" => "144", "value" => "Brunei Darussalam", "label" => "Brunei Darussalam"),
	array("id" => "36", "value" => "Bulgaria", "label" => "Bulgaria"),
	array("id" => "141", "value" => "Burkina Faso", "label" => "Burkina Faso"),
	array("id" => "142", "value" => "Burundi", "label" => "Burundi"),
	array("id" => "209", "value" => "Byelorussian SSR", "label" => "Byelorussian SSR"),
	array("id" => "88", "value" => "Cambodia", "label" => "Cambodia"),
	array("id" => "87", "value" => "Cameroon", "label" => "Cameroon"),
	array("id" => "89", "value" => "Canada", "label" => "Canada"),
	array("id" => "195", "value" => "Cape Verde", "label" => "Cape Verde"),
	array("id" => "151", "value" => "Cayman Islands", "label" => "Cayman Islands"),
	array("id" => "59", "value" => "Central African Republic", "label" => "Central African Republic"),
	array("id" => "231", "value" => "Chad", "label" => "Chad"),
	array("id" => "239", "value" => "Chile", "label" => "Chile"),
	array("id" => "92", "value" => "China", "label" => "China"),
	array("id" => "163", "value" => "Christmas Island", "label" => "Christmas Island"),
	array("id" => "152", "value" => "Cocos (Keeling) Islands", "label" => "Cocos (Keeling) Islands"),
	array("id" => "95", "value" => "Colombia", "label" => "Colombia"),
	array("id" => "96", "value" => "Comoros", "label" => "Comoros"),
	array("id" => "97", "value" => "Congo", "label" => "Congo"),
	array("id" => "153", "value" => "Cook Islands", "label" => "Cook Islands"),
	array("id" => "98", "value" => "Costa Rica", "label" => "Costa Rica"),
	array("id" => "12", "value" => "Cote dIvoire", "label" => "Cote dIvoire"),
	array("id" => "101", "value" => "Croatia (Hrvatska)", "label" => "Croatia (Hrvatska)"),
	array("id" => "99", "value" => "Cuba", "label" => "Cuba"),
	array("id" => "102", "value" => "Cyprus", "label" => "Cyprus"),
	array("id" => "232", "value" => "Czech Republic", "label" => "Czech Republic"),
	array("id" => "233", "value" => "Czechoslovakia", "label" => "Czechoslovakia"),
	array("id" => "58", "value" => "Denmark", "label" => "Denmark"),
	array("id" => "223", "value" => "Djibouti", "label" => "Djibouti"),
	array("id" => "61", "value" => "Dominica", "label" => "Dominica"),
	array("id" => "60", "value" => "Dominican Republic", "label" => "Dominican Republic"),
	array("id" => "17", "value" => "East Timor", "label" => "East Timor"),
	array("id" => "63", "value" => "Ecuador", "label" => "Ecuador"),
	array("id" => "9", "value" => "Egypt", "label" => "Egypt"),
	array("id" => "64", "value" => "El Salvador", "label" => "El Salvador"),
	array("id" => "81", "value" => "Equatorial Guinea", "label" => "Equatorial Guinea"),
	array("id" => "67", "value" => "Estonia", "label" => "Estonia"),
	array("id" => "10", "value" => "Ethiopia", "label" => "Ethiopia"),
	array("id" => "160", "value" => "Falkland Islands (Malvinas)", "label" => "Falkland Islands (Malvinas)"),
	array("id" => "159", "value" => "Faroe Islands", "label" => "Faroe Islands"),
	array("id" => "238", "value" => "Fiji", "label" => "Fiji"),
	array("id" => "237", "value" => "Finland", "label" => "Finland"),
	array("id" => "39", "value" => "France", "label" => "France"),
	array("id" => "40", "value" => "French Guiana", "label" => "French Guiana"),
	array("id" => "41", "value" => "French Polynesia", "label" => "French Polynesia"),
	array("id" => "169", "value" => "French Southern Territories", "label" => "French Southern Territories"),
	array("id" => "189", "value" => "FYROM", "label" => "FYROM"),
	array("id" => "47", "value" => "Gabon", "label" => "Gabon"),
	array("id" => "46", "value" => "Gambia", "label" => "Gambia"),
	array("id" => "43", "value" => "Georgia", "label" => "Georgia"),
	array("id" => "42", "value" => "Germany", "label" => "Germany"),
	array("id" => "48", "value" => "Ghana", "label" => "Ghana"),
	array("id" => "44", "value" => "Gibraltar", "label" => "Gibraltar"),
	array("id" => "1", "value" => "Greece", "label" => "Greece"),
	array("id" => "57", "value" => "Greenland", "label" => "Greenland"),
	array("id" => "55", "value" => "Grenada", "label" => "Grenada"),
	array("id" => "56", "value" => "Grenadines", "label" => "Grenadines"),
	array("id" => "50", "value" => "Guadeloupe", "label" => "Guadeloupe"),
	array("id" => "49", "value" => "Guam", "label" => "Guam"),
	array("id" => "51", "value" => "Guatemala", "label" => "Guatemala"),
	array("id" => "53", "value" => "Guinea", "label" => "Guinea"),
	array("id" => "54", "value" => "Guinea-Bissau", "label" => "Guinea-Bissau"),
	array("id" => "52", "value" => "Guyana", "label" => "Guyana"),
	array("id" => "11", "value" => "Haiti", "label" => "Haiti"),
	array("id" => "161", "value" => "Heard and McDonald Islands", "label" => "Heard and McDonald Islands"),
	array("id" => "175", "value" => "Honduras", "label" => "Honduras"),
	array("id" => "240", "value" => "Hong Kong", "label" => "Hong Kong"),
	array("id" => "176", "value" => "Hungary", "label" => "Hungary"),
	array("id" => "82", "value" => "Iceland", "label" => "Iceland"),
	array("id" => "75", "value" => "India", "label" => "India"),
	array("id" => "76", "value" => "Indonesia", "label" => "Indonesia"),
	array("id" => "79", "value" => "Iran, Islamic Republic of", "label" => "Iran, Islamic Republic of"),
	array("id" => "78", "value" => "Iraq", "label" => "Iraq"),
	array("id" => "80", "value" => "Ireland", "label" => "Ireland"),
	array("id" => "84", "value" => "Israel", "label" => "Israel"),
	array("id" => "85", "value" => "Italy", "label" => "Italy"),
	array("id" => "222", "value" => "Jamaica", "label" => "Jamaica"),
	array("id" => "74", "value" => "Japan", "label" => "Japan"),
	array("id" => "77", "value" => "Jordan", "label" => "Jordan"),
	array("id" => "86", "value" => "Kazakhstan", "label" => "Kazakhstan"),
	array("id" => "91", "value" => "Kenya", "label" => "Kenya"),
	array("id" => "94", "value" => "Kiribati", "label" => "Kiribati"),
	array("id" => "34", "value" => "Korea, Democratic PR", "label" => "Korea, Democratic PR"),
	array("id" => "171", "value" => "Korea, Republic of", "label" => "Korea, Republic of"),
	array("id" => "100", "value" => "Kuwait", "label" => "Kuwait"),
	array("id" => "93", "value" => "Kyrgyzstan", "label" => "Kyrgyzstan"),
	array("id" => "103", "value" => "Lao Peoples Democratic Republic", "label" => "Lao Peoples Democratic Republic"),
	array("id" => "105", "value" => "Latvia", "label" => "Latvia"),
	array("id" => "107", "value" => "Lebanon", "label" => "Lebanon"),
	array("id" => "104", "value" => "Lesotho", "label" => "Lesotho"),
	array("id" => "108", "value" => "Liberia", "label" => "Liberia"),
	array("id" => "109", "value" => "Libyan Arab Jamahiriya", "label" => "Libyan Arab Jamahiriya"),
	array("id" => "111", "value" => "Liechtenstein", "label" => "Liechtenstein"),
	array("id" => "110", "value" => "Lithuania", "label" => "Lithuania"),
	array("id" => "112", "value" => "Luxembourg", "label" => "Luxembourg"),
	array("id" => "114", "value" => "Macau", "label" => "Macau"),
	array("id" => "113", "value" => "Madagascar", "label" => "Madagascar"),
	array("id" => "116", "value" => "Malawi", "label" => "Malawi"),
	array("id" => "115", "value" => "Malaysia", "label" => "Malaysia"),
	array("id" => "117", "value" => "Maldives", "label" => "Maldives"),
	array("id" => "118", "value" => "Mali", "label" => "Mali"),
	array("id" => "119", "value" => "Malta", "label" => "Malta"),
	array("id" => "155", "value" => "Marshall Islands", "label" => "Marshall Islands"),
	array("id" => "121", "value" => "Martinique", "label" => "Martinique"),
	array("id" => "123", "value" => "Mauritania", "label" => "Mauritania"),
	array("id" => "122", "value" => "Mauritius", "label" => "Mauritius"),
	array("id" => "124", "value" => "Mexico", "label" => "Mexico"),
	array("id" => "127", "value" => "Micronesia", "label" => "Micronesia"),
	array("id" => "130", "value" => "Moldova, Republic of", "label" => "Moldova, Republic of"),
	array("id" => "131", "value" => "Monaco", "label" => "Monaco"),
	array("id" => "128", "value" => "Mongolia", "label" => "Mongolia"),
	array("id" => "132", "value" => "Montserrat", "label" => "Montserrat"),
	array("id" => "120", "value" => "Morocco", "label" => "Morocco"),
	array("id" => "129", "value" => "Mozambique", "label" => "Mozambique"),
	array("id" => "125", "value" => "Myanmar", "label" => "Myanmar"),
	array("id" => "145", "value" => "Namibia", "label" => "Namibia"),
	array("id" => "146", "value" => "Nauru", "label" => "Nauru"),
	array("id" => "149", "value" => "Nepal", "label" => "Nepal"),
	array("id" => "172", "value" => "Netherlands", "label" => "Netherlands"),
	array("id" => "173", "value" => "Netherlands Antilles", "label" => "Netherlands Antilles"),
	array("id" => "178", "value" => "Neutral Zone", "label" => "Neutral Zone"),
	array("id" => "148", "value" => "New Caledonia", "label" => "New Caledonia"),
	array("id" => "147", "value" => "New Zealand", "label" => "New Zealand"),
	array("id" => "166", "value" => "Nicaragua", "label" => "Nicaragua"),
	array("id" => "164", "value" => "Niger", "label" => "Niger"),
	array("id" => "165", "value" => "Nigeria", "label" => "Nigeria"),
	array("id" => "167", "value" => "Niue", "label" => "Niue"),
	array("id" => "162", "value" => "Norfolk Island", "label" => "Norfolk Island"),
	array("id" => "154", "value" => "Northern Mariana Islands", "label" => "Northern Mariana Islands"),
	array("id" => "168", "value" => "Norway", "label" => "Norway"),
	array("id" => "174", "value" => "Oman", "label" => "Oman"),
	array("id" => "15", "value" => "Other", "label" => "Other"),
	array("id" => "182", "value" => "Pakistan", "label" => "Pakistan"),
	array("id" => "183", "value" => "Palau", "label" => "Palau"),
	array("id" => "184", "value" => "Panama", "label" => "Panama"),
	array("id" => "185", "value" => "Papua New Guinea", "label" => "Papua New Guinea"),
	array("id" => "186", "value" => "Paraguay", "label" => "Paraguay"),
	array("id" => "190", "value" => "Peru", "label" => "Peru"),
	array("id" => "236", "value" => "Philippines", "label" => "Philippines"),
	array("id" => "191", "value" => "Pitcairn", "label" => "Pitcairn"),
	array("id" => "192", "value" => "Poland", "label" => "Poland"),
	array("id" => "193", "value" => "Portugal", "label" => "Portugal"),
	array("id" => "194", "value" => "Puerto Rico", "label" => "Puerto Rico"),
	array("id" => "90", "value" => "Qatar", "label" => "Qatar"),
	array("id" => "196", "value" => "Reunion", "label" => "Reunion"),
	array("id" => "198", "value" => "Romania", "label" => "Romania"),
	array("id" => "199", "value" => "Russian Federation", "label" => "Russian Federation"),
	array("id" => "197", "value" => "Rwanda", "label" => "Rwanda"),
	array("id" => "3", "value" => "Saint Kitts and Nevis", "label" => "Saint Kitts and Nevis"),
	array("id" => "251", "value" => "Saint Lucia", "label" => "Saint Lucia"),
	array("id" => "200", "value" => "Samoa", "label" => "Samoa"),
	array("id" => "4", "value" => "San Marino", "label" => "San Marino"),
	array("id" => "201", "value" => "Sao Tome and Principe", "label" => "Sao Tome and Principe"),
	array("id" => "202", "value" => "Saudi Arabia", "label" => "Saudi Arabia"),
	array("id" => "203", "value" => "Senegal", "label" => "Senegal"),
	array("id" => "204", "value" => "Seychelles", "label" => "Seychelles"),
	array("id" => "206", "value" => "Sierra Leone", "label" => "Sierra Leone"),
	array("id" => "205", "value" => "Singapore", "label" => "Singapore"),
	array("id" => "207", "value" => "Slovakia", "label" => "Slovakia"),
	array("id" => "208", "value" => "Slovenia", "label" => "Slovenia"),
	array("id" => "157", "value" => "Solomon Islands", "label" => "Solomon Islands"),
	array("id" => "211", "value" => "Somalia", "label" => "Somalia"),
	array("id" => "170", "value" => "South Africa", "label" => "South Africa"),
	array("id" => "210", "value" => "Soviet Union", "label" => "Soviet Union"),
	array("id" => "83", "value" => "Spain", "label" => "Spain"),
	array("id" => "216", "value" => "Sri Lanka", "label" => "Sri Lanka"),
	array("id" => "250", "value" => "St. Helena", "label" => "St. Helena"),
	array("id" => "5", "value" => "St. Pierre and Miquelon", "label" => "St. Pierre and Miquelon"),
	array("id" => "213", "value" => "Sudan", "label" => "Sudan"),
	array("id" => "215", "value" => "Suriname", "label" => "Suriname"),
	array("id" => "156", "value" => "Svalbard and Jan Mayen Is.", "label" => "Svalbard and Jan Mayen Is."),
	array("id" => "212", "value" => "Swaziland", "label" => "Swaziland"),
	array("id" => "214", "value" => "Sweden", "label" => "Sweden"),
	array("id" => "65", "value" => "Switzerland", "label" => "Switzerland"),
	array("id" => "217", "value" => "Syrian Arab Republic", "label" => "Syrian Arab Republic"),
	array("id" => "218", "value" => "Taiwan, Republic of China", "label" => "Taiwan, Republic of China"),
	array("id" => "220", "value" => "Tajikistan", "label" => "Tajikistan"),
	array("id" => "219", "value" => "Tanzania, United Republic", "label" => "Tanzania, United Republic"),
	array("id" => "221", "value" => "Thailand", "label" => "Thailand"),
	array("id" => "224", "value" => "Togo", "label" => "Togo"),
	array("id" => "225", "value" => "Tokelau", "label" => "Tokelau"),
	array("id" => "226", "value" => "Tonga", "label" => "Tonga"),
	array("id" => "230", "value" => "Trinidad and Tobago", "label" => "Trinidad and Tobago"),
	array("id" => "234", "value" => "Tunisia", "label" => "Tunisia"),
	array("id" => "228", "value" => "Turkey", "label" => "Turkey"),
	array("id" => "229", "value" => "Turkmenistan", "label" => "Turkmenistan"),
	array("id" => "158", "value" => "Turks and Caicos Islands", "label" => "Turks and Caicos Islands"),
	array("id" => "227", "value" => "Tuvalu", "label" => "Tuvalu"),
	array("id" => "177", "value" => "Uganda", "label" => "Uganda"),
	array("id" => "180", "value" => "Ukrainian SSR", "label" => "Ukrainian SSR"),
	array("id" => "71", "value" => "United Arab Emirates", "label" => "United Arab Emirates"),
	array("id" => "2", "value" => "United Kingdom", "label" => "United Kingdom"),
	array("id" => "73", "value" => "United States of America", "label" => "United States of America"),
	array("id" => "181", "value" => "Uruguay", "label" => "Uruguay"),
	array("id" => "126", "value" => "US Minor Outlying Islands", "label" => "US Minor Outlying Islands"),
	array("id" => "179", "value" => "Uzbekistan", "label" => "Uzbekistan"),
	array("id" => "27", "value" => "Vanuatu", "label" => "Vanuatu"),
	array("id" => "28", "value" => "Vatican City State", "label" => "Vatican City State"),
	array("id" => "30", "value" => "Venezuela", "label" => "Venezuela"),
	array("id" => "32", "value" => "Viet Nam", "label" => "Viet Nam"),
	array("id" => "188", "value" => "Virgin Islands (British)", "label" => "Virgin Islands (British)"),
	array("id" => "187", "value" => "Virgin Islands (U.S.)", "label" => "Virgin Islands (U.S.)"),
	array("id" => "150", "value" => "Wallis and Futuna Islands", "label" => "Wallis and Futuna Islands"),
	array("id" => "62", "value" => "Western Sahara", "label" => "Western Sahara"),
	array("id" => "235", "value" => "Yemen, Republic of", "label" => "Yemen, Republic of"),
	array("id" => "45", "value" => "Yugoslavia", "label" => "Yugoslavia"),
	array("id" => "68", "value" => "Zaire", "label" => "Zaire"),
	array("id" => "69", "value" => "Zambia", "label" => "Zambia"),
	array("id" => "70", "value" => "Zimbabwe", "label" => "Zimbabwe"),
);

echo json_encode($countries);