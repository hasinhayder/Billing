<?php

namespace App\AdminBundle\Business;

use App\UserBundle\Entity\User;

class GlobalUtils
{
    /**
     * @param $container
     * @param $id
     * @return User
     */
    public static function getClientById($container, $id)
    {
        $em = $container->get('doctrine')->getEntityManager();
        return $em->getRepository('AppUserBundle:User')->findOneBy(array('id' => $id));
    }

    public static function getCountryFromId($id)
    {
        $array = [
            "" => "Select Country",
            "1" => "United States",
            "2" => "United Kingdom",
            "3" => "Afghanistan",
            "4" => "Albania",
            "5" => "Algeria",
            "6" => "American Samoa",
            "7" => "Andorra",
            "8" => "Angola",
            "9" => "Anguilla",
            "10" => "Antarctica",
            "11" => "Antigua and Barbuda",
            "12" => "Argentina",
            "13" => "Armenia",
            "14" => "Aruba",
            "15" => "Australia",
            "16" => "Austria",
            "17" => "Azerbaijan",
            "18" => "Bahamas",
            "19" => "Bahrain",
            "20" => "Bangladesh",
            "21" => "Barbados",
            "22" => "Belarus",
            "23" => "Belgium",
            "24" => "Belize",
            "25" => "Benin",
            "26" => "Bermuda",
            "27" => "Bhutan",
            "28" => "Bolivia",
            "29" => "Bosnia and Herzegovina",
            "30" => "Botswana",
            "31" => "Bouvet Island",
            "32" => "Brazil",
            "33" => "British Indian Ocean Territory",
            "34" => "Brunei Darussalam",
            "35" => "Bulgaria",
            "36" => "Burkina Faso",
            "37" => "Burundi",
            "38" => "Cambodia",
            "39" => "Cameroon",
            "40" => "Canada",
            "41" => "Cape Verde",
            "42" => "Cayman Islands",
            "43" => "Central African Republic",
            "44" => "Chad",
            "45" => "Chile",
            "46" => "China",
            "47" => "Christmas Island",
            "48" => "Cocos (Keeling) Islands",
            "49" => "Colombia",
            "50" => "Comoros",
            "51" => "Congo",
            "52" => "Congo, The Democratic Republic of The",
            "53" => "Cook Islands",
            "54" => "Costa Rica",
            "55" => "Cote D'ivoire",
            "56" => "Croatia",
            "57" => "Cuba",
            "58" => "Cyprus",
            "59" => "Czech Republic",
            "60" => "Denmark",
            "61" => "Djibouti",
            "62" => "Dominica",
            "63" => "Dominican Republic",
            "64" => "Ecuador",
            "65" => "Egypt",
            "66" => "El Salvador",
            "67" => "Equatorial Guinea",
            "68" => "Eritrea",
            "69" => "Estonia",
            "70" => "Ethiopia",
            "71" => "Falkland Islands (Malvinas)",
            "72" => "Faroe Islands",
            "73" => "Fiji",
            "74" => "Finland",
            "75" => "France",
            "76" => "French Guiana",
            "77" => "French Polynesia",
            "78" => "French Southern Territories",
            "79" => "Gabon",
            "80" => "Gambia",
            "81" => "Georgia",
            "82" => "Germany",
            "83" => "Ghana",
            "84" => "Gibraltar",
            "85" => "Greece",
            "86" => "Greenland",
            "87" => "Grenada",
            "88" => "Guadeloupe",
            "89" => "Guam",
            "90" => "Guatemala",
            "91" => "Guinea",
            "92" => "Guinea-bissau",
            "93" => "Guyana",
            "94" => "Haiti",
            "95" => "Heard Island and Mcdonald Islands",
            "96" => "Holy See (Vatican City State)",
            "97" => "Honduras",
            "98" => "Hong Kong",
            "99" => "Hungary",
            "100" => "Iceland",
            "101" => "India",
            "102" => "Indonesia",
            "103" => "Iran, Islamic Republic of",
            "104" => "Iraq",
            "105" => "Ireland",
            "106" => "Israel",
            "107" => "Italy",
            "108" => "Jamaica",
            "109" => "Japan",
            "110" => "Jordan",
            "111" => "Kazakhstan",
            "112" => "Kenya",
            "113" => "Kiribati",
            "114" => "Korea, Democratic People's Republic of",
            "115" => "Korea, Republic of",
            "116" => "Kuwait",
            "117" => "Kyrgyzstan",
            "118" => "Lao People's Democratic Republic",
            "119" => "Latvia",
            "120" => "Lebanon",
            "121" => "Lesotho",
            "122" => "Liberia",
            "123" => "Libyan Arab Jamahiriya",
            "124" => "Liechtenstein",
            "125" => "Lithuaniav",
            "126" => "Luxembourg",
            "127" => "Macao",
            "128" => "Macedonia, The Former Yugoslav Republic of",
            "129" => "Madagascar",
            "130" => "Malawi",
            "131" => "Malaysia",
            "132" => "Maldives",
            "133" => "Mali",
            "134" => "Malta",
            "135" => "Marshall Islands",
            "136" => "Martinique",
            "137" => "Mauritania",
            "138" => "Mauritius",
            "139" => "Mayotte",
            "140" => "Mexico",
            "141" => "Micronesia, Federated States of",
            "142" => "Moldova, Republic of",
            "143" => "Monaco",
            "144" => "Mongolia",
            "145" => "Montserrat",
            "146" => "Morocco",
            "147" => "Mozambique",
            "148" => "Myanmar",
            "149" => "Namibia",
            "150" => "Nauru",
            "151" => "Nepal",
            "152" => "Netherlands",
            "153" => "Netherlands Antilles",
            "154" => "New Caledonia",
            "155" => "New Zealand",
            "156" => "Nicaragua",
            "157" => "Niger",
            "158" => "Nigeria",
            "159" => "Niue",
            "160" => "Norfolk Island",
            "161" => "Northern Mariana Islands",
            "162" => "Norway",
            "163" => "Oman",
            "164" => "Pakistan",
            "165" => "Palau",
            "166" => "Palestinian Territory, Occupied",
            "167" => "Panama",
            "168" => "Papua New Guinea",
            "169" => "Paraguay",
            "170" => "Peru",
            "171" => "Philippines",
            "172" => "Pitcairn",
            "173" => "Poland",
            "174" => "Portugal",
            "175" => "Puerto Rico",
            "176" => "Qatar",
            "177" => "Reunion",
            "178" => "Romania",
            "179" => "Russian Federation",
            "180" => "Rwanda",
            "181" => "Saint Helena",
            "182" => "Saint Kitts and Nevis",
            "183" => "Saint Lucia",
            "184" => "Saint Pierre and Miquelon",
            "185" => "Saint Vincent and The Grenadines",
            "186" => "Samoa",
            "187" => "San Marino",
            "188" => "Sao Tome and Principe",
            "189" => "Saudi Arabia",
            "190" => "Senegal",
            "191" => "Serbia and Montenegro",
            "192" => "Seychelles",
            "193" => "Sierra Leone",
            "194" => "Singapore",
            "195" => "Slovakia",
            "196" => "Slovenia",
            "197" => "Solomon Islands",
            "198" => "Somalia",
            "199" => "South Africa",
            "200" => "South Georgia and The South Sandwich Islands",
            "201" => "Spain",
            "202" => "Sri Lanka",
            "203" => "Sudan",
            "204" => "Suriname",
            "205" => "Svalbard and Jan Mayen",
            "206" => "Swaziland",
            "207" => "Sweden",
            "208" => "Switzerland",
            "209" => "Syrian Arab Republic",
            "210" => "Taiwan, Province of China",
            "211" => "Tajikistan",
            "212" => "Tanzania, United Republic of",
            "213" => "Thailand",
            "214" => "Timor-leste",
            "215" => "Togo",
            "216" => "Tokelau",
            "217" => "Tonga",
            "218" => "Trinidad and Tobago",
            "219" => "Tunisia",
            "220" => "Turkey",
            "221" => "Turkmenistan",
            "222" => "Turks and Caicos Islands",
            "223" => "Tuvalu",
            "224" => "Uganda",
            "225" => "Ukraine",
            "226" => "United Arab Emirates",
            "227" => "United Kingdom",
            "228" => "United States",
            "229" => "United States Minor Outlying Islands",
            "230" => "Uruguay",
            "231" => "Uzbekistan",
            "232" => "Vanuatu",
            "233" => "Venezuela",
            "234" => "Viet Nam",
            "235" => "Virgin Islands, British",
            "236" => "Virgin Islands, U.S.",
            "237" => "Wallis and Futuna",
            "238" => "Western Sahara",
            "239" => "Yemen",
            "240" => "Zambia",
            "241" => "Zimbabwe",
        ];
        foreach($array as $key => $value)
        {
            if($key == $id) return $value;
        }
        return "";
    }
    public static function getAllCountries()
    {
        return [
            "1" => "United States",
            "2" => "United Kingdom",
            "3" => "Afghanistan",
            "4" => "Albania",
            "5" => "Algeria",
            "6" => "American Samoa",
            "7" => "Andorra",
            "8" => "Angola",
            "9" => "Anguilla",
            "10" => "Antarctica",
            "11" => "Antigua and Barbuda",
            "12" => "Argentina",
            "13" => "Armenia",
            "14" => "Aruba",
            "15" => "Australia",
            "16" => "Austria",
            "17" => "Azerbaijan",
            "18" => "Bahamas",
            "19" => "Bahrain",
            "20" => "Bangladesh",
            "21" => "Barbados",
            "22" => "Belarus",
            "23" => "Belgium",
            "24" => "Belize",
            "25" => "Benin",
            "26" => "Bermuda",
            "27" => "Bhutan",
            "28" => "Bolivia",
            "29" => "Bosnia and Herzegovina",
            "30" => "Botswana",
            "31" => "Bouvet Island",
            "32" => "Brazil",
            "33" => "British Indian Ocean Territory",
            "34" => "Brunei Darussalam",
            "35" => "Bulgaria",
            "36" => "Burkina Faso",
            "37" => "Burundi",
            "38" => "Cambodia",
            "39" => "Cameroon",
            "40" => "Canada",
            "41" => "Cape Verde",
            "42" => "Cayman Islands",
            "43" => "Central African Republic",
            "44" => "Chad",
            "45" => "Chile",
            "46" => "China",
            "47" => "Christmas Island",
            "48" => "Cocos (Keeling) Islands",
            "49" => "Colombia",
            "50" => "Comoros",
            "51" => "Congo",
            "52" => "Congo, The Democratic Republic of The",
            "53" => "Cook Islands",
            "54" => "Costa Rica",
            "55" => "Cote D'ivoire",
            "56" => "Croatia",
            "57" => "Cuba",
            "58" => "Cyprus",
            "59" => "Czech Republic",
            "60" => "Denmark",
            "61" => "Djibouti",
            "62" => "Dominica",
            "63" => "Dominican Republic",
            "64" => "Ecuador",
            "65" => "Egypt",
            "66" => "El Salvador",
            "67" => "Equatorial Guinea",
            "68" => "Eritrea",
            "69" => "Estonia",
            "70" => "Ethiopia",
            "71" => "Falkland Islands (Malvinas)",
            "72" => "Faroe Islands",
            "73" => "Fiji",
            "74" => "Finland",
            "75" => "France",
            "76" => "French Guiana",
            "77" => "French Polynesia",
            "78" => "French Southern Territories",
            "79" => "Gabon",
            "80" => "Gambia",
            "81" => "Georgia",
            "82" => "Germany",
            "83" => "Ghana",
            "84" => "Gibraltar",
            "85" => "Greece",
            "86" => "Greenland",
            "87" => "Grenada",
            "88" => "Guadeloupe",
            "89" => "Guam",
            "90" => "Guatemala",
            "91" => "Guinea",
            "92" => "Guinea-bissau",
            "93" => "Guyana",
            "94" => "Haiti",
            "95" => "Heard Island and Mcdonald Islands",
            "96" => "Holy See (Vatican City State)",
            "97" => "Honduras",
            "98" => "Hong Kong",
            "99" => "Hungary",
            "100" => "Iceland",
            "101" => "India",
            "102" => "Indonesia",
            "103" => "Iran, Islamic Republic of",
            "104" => "Iraq",
            "105" => "Ireland",
            "106" => "Israel",
            "107" => "Italy",
            "108" => "Jamaica",
            "109" => "Japan",
            "110" => "Jordan",
            "111" => "Kazakhstan",
            "112" => "Kenya",
            "113" => "Kiribati",
            "114" => "Korea, Democratic People's Republic of",
            "115" => "Korea, Republic of",
            "116" => "Kuwait",
            "117" => "Kyrgyzstan",
            "118" => "Lao People's Democratic Republic",
            "119" => "Latvia",
            "120" => "Lebanon",
            "121" => "Lesotho",
            "122" => "Liberia",
            "123" => "Libyan Arab Jamahiriya",
            "124" => "Liechtenstein",
            "125" => "Lithuaniav",
            "126" => "Luxembourg",
            "127" => "Macao",
            "128" => "Macedonia, The Former Yugoslav Republic of",
            "129" => "Madagascar",
            "130" => "Malawi",
            "131" => "Malaysia",
            "132" => "Maldives",
            "133" => "Mali",
            "134" => "Malta",
            "135" => "Marshall Islands",
            "136" => "Martinique",
            "137" => "Mauritania",
            "138" => "Mauritius",
            "139" => "Mayotte",
            "140" => "Mexico",
            "141" => "Micronesia, Federated States of",
            "142" => "Moldova, Republic of",
            "143" => "Monaco",
            "144" => "Mongolia",
            "145" => "Montserrat",
            "146" => "Morocco",
            "147" => "Mozambique",
            "148" => "Myanmar",
            "149" => "Namibia",
            "150" => "Nauru",
            "151" => "Nepal",
            "152" => "Netherlands",
            "153" => "Netherlands Antilles",
            "154" => "New Caledonia",
            "155" => "New Zealand",
            "156" => "Nicaragua",
            "157" => "Niger",
            "158" => "Nigeria",
            "159" => "Niue",
            "160" => "Norfolk Island",
            "161" => "Northern Mariana Islands",
            "162" => "Norway",
            "163" => "Oman",
            "164" => "Pakistan",
            "165" => "Palau",
            "166" => "Palestinian Territory, Occupied",
            "167" => "Panama",
            "168" => "Papua New Guinea",
            "169" => "Paraguay",
            "170" => "Peru",
            "171" => "Philippines",
            "172" => "Pitcairn",
            "173" => "Poland",
            "174" => "Portugal",
            "175" => "Puerto Rico",
            "176" => "Qatar",
            "177" => "Reunion",
            "178" => "Romania",
            "179" => "Russian Federation",
            "180" => "Rwanda",
            "181" => "Saint Helena",
            "182" => "Saint Kitts and Nevis",
            "183" => "Saint Lucia",
            "184" => "Saint Pierre and Miquelon",
            "185" => "Saint Vincent and The Grenadines",
            "186" => "Samoa",
            "187" => "San Marino",
            "188" => "Sao Tome and Principe",
            "189" => "Saudi Arabia",
            "190" => "Senegal",
            "191" => "Serbia and Montenegro",
            "192" => "Seychelles",
            "193" => "Sierra Leone",
            "194" => "Singapore",
            "195" => "Slovakia",
            "196" => "Slovenia",
            "197" => "Solomon Islands",
            "198" => "Somalia",
            "199" => "South Africa",
            "200" => "South Georgia and The South Sandwich Islands",
            "201" => "Spain",
            "202" => "Sri Lanka",
            "203" => "Sudan",
            "204" => "Suriname",
            "205" => "Svalbard and Jan Mayen",
            "206" => "Swaziland",
            "207" => "Sweden",
            "208" => "Switzerland",
            "209" => "Syrian Arab Republic",
            "210" => "Taiwan, Province of China",
            "211" => "Tajikistan",
            "212" => "Tanzania, United Republic of",
            "213" => "Thailand",
            "214" => "Timor-leste",
            "215" => "Togo",
            "216" => "Tokelau",
            "217" => "Tonga",
            "218" => "Trinidad and Tobago",
            "219" => "Tunisia",
            "220" => "Turkey",
            "221" => "Turkmenistan",
            "222" => "Turks and Caicos Islands",
            "223" => "Tuvalu",
            "224" => "Uganda",
            "225" => "Ukraine",
            "226" => "United Arab Emirates",
            "227" => "United Kingdom",
            "228" => "United States",
            "229" => "United States Minor Outlying Islands",
            "230" => "Uruguay",
            "231" => "Uzbekistan",
            "232" => "Vanuatu",
            "233" => "Venezuela",
            "234" => "Viet Nam",
            "235" => "Virgin Islands, British",
            "236" => "Virgin Islands, U.S.",
            "237" => "Wallis and Futuna",
            "238" => "Western Sahara",
            "239" => "Yemen",
            "240" => "Zambia",
            "241" => "Zimbabwe"
        ];
    }
}