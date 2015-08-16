<?php
final class CountryCodesISO3166_1_Alpha2 extends Enum{
	public static
		$Afghanistan,$AlandIslands,$Albania,$Algeria,$AmericanSamoa,$Andorra,$Angola,$Anguilla,$Antarctica,
		$AntiguaAndBarbuda,$Argentina,$Armenia,$Aruba,$Australia,$Austria,$Azerbaijan,$Bahamas,$Bahrain,$Bangladesh,
		$Barbados,$Belarus,$Belgium,$Belize,$Benin,$Bermuda,$Bhutan,$Bolivia,$Bonaire,$BosniaAndHerzegovina,$Botswana,
		$BouvetIsland,$Brazil,$BritishIndianOceanTerritory,$BruneiDarussalam,$Bulgaria,$BurkinaFaso,$Burundi,$Cambodia,
		$Cameroon,$Canada,$CaboVerde,$CaymanIslands,$CentralAfricanRepublic,$Chad,$Chile,$China,$ChristmasIsland,$Cocos,
		$Colombia,$Comoros,$Congo,$DemocraticRepublicOfTheCongo,$CookIslands,$CostaRica,$CoteDivoire,$Croatia,$Cuba,$Curacao,$Cyprus,$CzechRepublic,
		$Denmark,$Djibouti,$Dominica,$DominicanRepublic,$Ecuador,$Egypt,$ElSalvador,$EquatorialGuinea,$Eritrea,$Estonia,
		$Ethiopia,$FalklandIslands,$FaroeIslands,$Fiji,$Finland,$France,$FrenchGuiana,$FrenchPolynesia,$FrenchSouthernTerritories,
		$Gabon,$Gambia,$Georgia,$Germany,$Ghana,$Gibraltar,$Greece,$Greenland,$Grenada,$Guadeloupe,$Guam,$Guatemala,
		$Guernsey,$Guinea,$GuineaBissau,$Guyana,$Haiti,$HeardIslandAndMcdonaldIslands,$HolySee,$Honduras,$HongKong,
		$Hungary,$Iceland,$India,$Indonesia,$Iran,$Iraq,$Ireland,$IsleOfMan,$Israel,$Italy,$Jamaica,$Japan,$Jersey,$Jordan,
		$Kazakhstan,$Kenya,$Kiribati,$DemocraticPeoplesRepublicOfKorea,$RepublicOfKorea,
		$Kuwait,$Kyrgyzstan,$LaoPeoplesDemocraticRepublic,$Latvia,$Lebanon,
		$Lesotho,$Liberia,$Libya,$Liechtenstein,$Lithuania,$Luxembourg,$Macao,$Macedonia,$Madagascar,$Malawi,$Malaysia,
		$Maldives,$Mali,$Malta,$MarshallIslands,$Martinique,$Mauritania,$Mauritius,$Mayotte,$Mexico,$Micronesia,$Moldova,
		$Monaco,$Mongolia,$Montenegro,$Montserrat,$Morocco,$Mozambique,$Myanmar,$Namibia,$Nauru,$Nepal,$Netherlands,$NewCaledonia,
		$NewZealand,$Nicaragua,$Niger,$Nigeria,$Niue,$NorfolkIsland,$NorthernMarianaIslands,$Norway,$Oman,$Pakistan,$Palau,
		$Palestine,$Panama,$PapuaNewGuinea,$Paraguay,$Peru,$Philippines,$Pitcairn,$Poland,$Portugal,$PuertoRico,$Qatar,
		$Reunion,$Romania,$RussianFederation,$Rwanda,$SaintBarthelemy,$SaintHelena,$SaintKittsAndNevis,$SaintLucia,
		$SaintMartin,$SaintPierreAndMiquelon,$SaintVincentAndTheGrenadines,$Samoa,$SanMarino,$SaoTomeAndPrincipe,$SaudiArabia,
		$Senegal,$Serbia,$Seychelles,$SierraLeone,$Singapore,$SintMaarten,$Slovakia,$Slovenia,$SolomonIslands,$Somalia,
		$SouthAfrica,$SouthGeorgiaAndTheSouthSandwichIslands,$SouthSudan,$Spain,$SriLanka,$Sudan,$Suriname,$SvalbardAndJanMayen,
		$Swaziland,$Sweden,$Switzerland,$SyrianArabRepublic,$Taiwan,$Tajikistan,$Tanzania,$Thailand,$TimorLeste,$Togo,$Tokelau,
		$Tonga,$TrinidadAndTobago,$Tunisia,$Turkey,$Turkmenistan,$TurksAndCaicosIslands,$Tuvalu,$Uganda,$Ukraine,$UnitedArabEmirates,
		$UnitedKingdomOfGreatBritainAndNorthernIreland,$UnitedStatesOfAmerica,$UnitedStatesMinorOutlyingIslands,$Uruguay,
		$Uzbekistan,$Vanuatu,$Venezuela,$VietNam,$VirginIslandsBritish,$VirginIslandsUS,$WallisAndFutuna,$WesternSahara,$Yemen,
		$Zambia,$Zimbabwe;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Afghanistan = new CountryCodesISO3166_1_Alpha2('Afghanistan', 'af');
		self::$AlandIslands = new CountryCodesISO3166_1_Alpha2('Aland Islands', 'ax');
		self::$Albania = new CountryCodesISO3166_1_Alpha2('Albania', 'al');
		self::$Algeria = new CountryCodesISO3166_1_Alpha2('Algeria', 'dz');
		self::$AmericanSamoa = new CountryCodesISO3166_1_Alpha2('American Samoa', 'as');
		self::$Andorra = new CountryCodesISO3166_1_Alpha2('Andorra', 'ad');
		self::$Angola = new CountryCodesISO3166_1_Alpha2('Angola', 'ao');
		self::$Anguilla = new CountryCodesISO3166_1_Alpha2('Anguilla', 'ai');
		self::$Antarctica = new CountryCodesISO3166_1_Alpha2('Antarctica', 'aq');
		self::$AntiguaAndBarbuda = new CountryCodesISO3166_1_Alpha2('Antigua and Barbuda', 'ag');
		self::$Argentina = new CountryCodesISO3166_1_Alpha2('Argentina', 'ar');
		self::$Armenia = new CountryCodesISO3166_1_Alpha2('Armenia', 'am');
		self::$Aruba = new CountryCodesISO3166_1_Alpha2('Aruba', 'aw');
		self::$Australia = new CountryCodesISO3166_1_Alpha2('Australia', 'au');
		self::$Austria = new CountryCodesISO3166_1_Alpha2('Austria', 'at');
		self::$Azerbaijan = new CountryCodesISO3166_1_Alpha2('Azerbaijan', 'az');
		self::$Bahamas = new CountryCodesISO3166_1_Alpha2('Bahamas', 'bs');
		self::$Bahrain = new CountryCodesISO3166_1_Alpha2('Bahrain', 'bh');
		self::$Bangladesh = new CountryCodesISO3166_1_Alpha2('Bangladesh', 'bd');
		self::$Barbados = new CountryCodesISO3166_1_Alpha2('Barbados', 'bb');
		self::$Belarus = new CountryCodesISO3166_1_Alpha2('Belarus', 'by');
		self::$Belgium = new CountryCodesISO3166_1_Alpha2('Belgium', 'be');
		self::$Belize = new CountryCodesISO3166_1_Alpha2('Belize', 'bz');
		self::$Benin = new CountryCodesISO3166_1_Alpha2('Benin', 'bj');
		self::$Bermuda = new CountryCodesISO3166_1_Alpha2('Bermuda', 'bm');
		self::$Bhutan = new CountryCodesISO3166_1_Alpha2('Bhutan', 'bt');
		self::$Bolivia = new CountryCodesISO3166_1_Alpha2('Bolivia (Plurinational State of)', 'bo');
		self::$Bonaire = new CountryCodesISO3166_1_Alpha2('Bonaire, Sint Eustatius and Saba', 'bq');
		self::$BosniaAndHerzegovina = new CountryCodesISO3166_1_Alpha2('Bosnia and Herzegovina', 'ba');
		self::$Botswana = new CountryCodesISO3166_1_Alpha2('Botswana', 'bw');
		self::$BouvetIsland = new CountryCodesISO3166_1_Alpha2('Bouvet Island', 'bv');
		self::$Brazil = new CountryCodesISO3166_1_Alpha2('Brazil', 'br');
		self::$BritishIndianOceanTerritory = new CountryCodesISO3166_1_Alpha2('British Indian Ocean Territory', 'io');
		self::$BruneiDarussalam = new CountryCodesISO3166_1_Alpha2('Brunei Darussalam', 'bn');
		self::$Bulgaria = new CountryCodesISO3166_1_Alpha2('Bulgaria', 'bg');
		self::$BurkinaFaso = new CountryCodesISO3166_1_Alpha2('Burkina Faso', 'bf');
		self::$Burundi = new CountryCodesISO3166_1_Alpha2('Burundi', 'bi');
		self::$Cambodia = new CountryCodesISO3166_1_Alpha2('Cambodia', 'kh');
		self::$Cameroon = new CountryCodesISO3166_1_Alpha2('Cameroon', 'cm');
		self::$Canada = new CountryCodesISO3166_1_Alpha2('Canada', 'ca');
		self::$CaboVerde = new CountryCodesISO3166_1_Alpha2('Cabo Verde', 'cv');
		self::$CaymanIslands = new CountryCodesISO3166_1_Alpha2('Cayman Islands', 'ky');
		self::$CentralAfricanRepublic = new CountryCodesISO3166_1_Alpha2('Central African Republic', 'cf');
		self::$Chad = new CountryCodesISO3166_1_Alpha2('Chad', 'td');
		self::$Chile = new CountryCodesISO3166_1_Alpha2('Chile', 'cl');
		self::$China = new CountryCodesISO3166_1_Alpha2('China', 'cn');
		self::$ChristmasIsland = new CountryCodesISO3166_1_Alpha2('Christmas Island', 'cx');
		self::$Cocos = new CountryCodesISO3166_1_Alpha2('Cocos (Keeling) Islands', 'cc');
		self::$Colombia = new CountryCodesISO3166_1_Alpha2('Colombia', 'co');
		self::$Comoros = new CountryCodesISO3166_1_Alpha2('Comoros', 'km');
		self::$Congo = new CountryCodesISO3166_1_Alpha2('Congo', 'cg');
		self::$DemocraticRepublicOfTheCongo = new CountryCodesISO3166_1_Alpha2('Congo (Democratic Republic of the)', 'cd');
		self::$CookIslands = new CountryCodesISO3166_1_Alpha2('Cook Islands', 'ck');
		self::$CostaRica = new CountryCodesISO3166_1_Alpha2('Costa Rica', 'cr');
		self::$CoteDivoire = new CountryCodesISO3166_1_Alpha2("Côte d'Ivoire", 'ci');
		self::$Croatia = new CountryCodesISO3166_1_Alpha2('Croatia', 'hr');
		self::$Cuba = new CountryCodesISO3166_1_Alpha2('Cuba', 'cu');
		self::$Curacao = new CountryCodesISO3166_1_Alpha2('Curaçao', 'cw');
		self::$Cyprus = new CountryCodesISO3166_1_Alpha2('Cyprus', 'cy');
		self::$CzechRepublic = new CountryCodesISO3166_1_Alpha2('Czech Republic', 'cz');
		self::$Denmark = new CountryCodesISO3166_1_Alpha2('Denmark', 'dk');
		self::$Djibouti = new CountryCodesISO3166_1_Alpha2('Djibouti', 'dj');
		self::$Dominica = new CountryCodesISO3166_1_Alpha2('Dominica', 'dm');
		self::$DominicanRepublic = new CountryCodesISO3166_1_Alpha2('Dominican Republic', 'do');
		self::$Ecuador = new CountryCodesISO3166_1_Alpha2('Ecuador', 'ec');
		self::$Egypt = new CountryCodesISO3166_1_Alpha2('Egypt', 'eg');
		self::$ElSalvador = new CountryCodesISO3166_1_Alpha2('El Salvador', 'sv');
		self::$EquatorialGuinea = new CountryCodesISO3166_1_Alpha2('Equatorial Guinea', 'gq');
		self::$Eritrea = new CountryCodesISO3166_1_Alpha2('Eritrea', 'er');
		self::$Estonia = new CountryCodesISO3166_1_Alpha2('Estonia', 'ee');
		self::$Ethiopia = new CountryCodesISO3166_1_Alpha2('Ethiopia', 'et');
		self::$FalklandIslands = new CountryCodesISO3166_1_Alpha2('Falkland Islands (Malvinas)', 'fk');
		self::$FaroeIslands = new CountryCodesISO3166_1_Alpha2('Faroe Islands', 'fo');
		self::$Fiji = new CountryCodesISO3166_1_Alpha2('Fiji', 'fj');
		self::$Finland = new CountryCodesISO3166_1_Alpha2('Finland', 'fi');
		self::$France = new CountryCodesISO3166_1_Alpha2('France', 'fr');
		self::$FrenchGuiana = new CountryCodesISO3166_1_Alpha2('French Guiana', 'gf');
		self::$FrenchPolynesia = new CountryCodesISO3166_1_Alpha2('French Polynesia', 'pf');
		self::$FrenchSouthernTerritories = new CountryCodesISO3166_1_Alpha2('French Southern Territories', 'tf');
		self::$Gabon = new CountryCodesISO3166_1_Alpha2('Gabon', 'ga');
		self::$Gambia = new CountryCodesISO3166_1_Alpha2('Gambia', 'gm');
		self::$Georgia = new CountryCodesISO3166_1_Alpha2('Georgia', 'ge');
		self::$Germany = new CountryCodesISO3166_1_Alpha2('Germany', 'de');
		self::$Ghana = new CountryCodesISO3166_1_Alpha2('Ghana', 'gh');
		self::$Gibraltar = new CountryCodesISO3166_1_Alpha2('Gibraltar', 'gi');
		self::$Greece = new CountryCodesISO3166_1_Alpha2('Greece', 'gr');
		self::$Greenland = new CountryCodesISO3166_1_Alpha2('Greenland', 'gl');
		self::$Grenada = new CountryCodesISO3166_1_Alpha2('Grenada', 'gd');
		self::$Guadeloupe = new CountryCodesISO3166_1_Alpha2('Guadeloupe', 'gp');
		self::$Guam = new CountryCodesISO3166_1_Alpha2('Guam', 'gu');
		self::$Guatemala = new CountryCodesISO3166_1_Alpha2('Guatemala', 'gt');
		self::$Guernsey = new CountryCodesISO3166_1_Alpha2('Guernsey', 'gg');
		self::$Guinea = new CountryCodesISO3166_1_Alpha2('Guinea', 'gn');
		self::$GuineaBissau = new CountryCodesISO3166_1_Alpha2('Guinea-Bissau', 'gw');
		self::$Guyana = new CountryCodesISO3166_1_Alpha2('Guyana', 'gy');
		self::$Haiti = new CountryCodesISO3166_1_Alpha2('Haiti', 'ht');
		self::$HeardIslandAndMcdonaldIslands = new CountryCodesISO3166_1_Alpha2('Heard Island and McDonald Islands', 'hm');
		self::$HolySee = new CountryCodesISO3166_1_Alpha2('Holy See', 'va');
		self::$Honduras = new CountryCodesISO3166_1_Alpha2('Honduras', 'hn');
		self::$HongKong = new CountryCodesISO3166_1_Alpha2('Hong Kong', 'hk');
		self::$Hungary = new CountryCodesISO3166_1_Alpha2('Hungary', 'hu');
		self::$Iceland = new CountryCodesISO3166_1_Alpha2('Iceland', 'is');
		self::$India = new CountryCodesISO3166_1_Alpha2('India', 'in');
		self::$Indonesia = new CountryCodesISO3166_1_Alpha2('Indonesia', 'id');
		self::$Iran = new CountryCodesISO3166_1_Alpha2('Iran (Islamic Republic of)', 'ir');
		self::$Iraq = new CountryCodesISO3166_1_Alpha2('Iraq', 'iq');
		self::$Ireland = new CountryCodesISO3166_1_Alpha2('Ireland', 'ie');
		self::$IsleOfMan = new CountryCodesISO3166_1_Alpha2('Isle of Man', 'im');
		self::$Israel = new CountryCodesISO3166_1_Alpha2('Israel', 'il');
		self::$Italy = new CountryCodesISO3166_1_Alpha2('Italy', 'it');
		self::$Jamaica = new CountryCodesISO3166_1_Alpha2('Jamaica', 'jm');
		self::$Japan = new CountryCodesISO3166_1_Alpha2('Japan', 'jp');
		self::$Jersey = new CountryCodesISO3166_1_Alpha2('Jersey', 'je');
		self::$Jordan = new CountryCodesISO3166_1_Alpha2('Jordan', 'jo');
		self::$Kazakhstan = new CountryCodesISO3166_1_Alpha2('Kazakhstan', 'kz');
		self::$Kenya = new CountryCodesISO3166_1_Alpha2('Kenya', 'ke');
		self::$Kiribati = new CountryCodesISO3166_1_Alpha2('Kiribati', 'ki');
		self::$DemocraticPeoplesRepublicOfKorea = new CountryCodesISO3166_1_Alpha2("Korea (Democratic People's Republic of)", 'kp');
		self::$RepublicOfKorea = new CountryCodesISO3166_1_Alpha2('Korea (Republic of)', 'kr');
		self::$Kuwait = new CountryCodesISO3166_1_Alpha2('Kuwait', 'kw');
		self::$Kyrgyzstan = new CountryCodesISO3166_1_Alpha2('Kyrgyzstan', 'kg');
		self::$LaoPeoplesDemocraticRepublic = new CountryCodesISO3166_1_Alpha2("Lao People's Democratic Republic", 'la');
		self::$Latvia = new CountryCodesISO3166_1_Alpha2('Latvia', 'lv');
		self::$Lebanon = new CountryCodesISO3166_1_Alpha2('Lebanon', 'lb');
		self::$Lesotho = new CountryCodesISO3166_1_Alpha2('Lesotho', 'ls');
		self::$Liberia = new CountryCodesISO3166_1_Alpha2('Liberia', 'lr');
		self::$Libya = new CountryCodesISO3166_1_Alpha2('Libya', 'ly');
		self::$Liechtenstein = new CountryCodesISO3166_1_Alpha2('Liechtenstein', 'li');
		self::$Lithuania = new CountryCodesISO3166_1_Alpha2('Lithuania', 'lt');
		self::$Luxembourg = new CountryCodesISO3166_1_Alpha2('Luxembourg', 'lu');
		self::$Macao = new CountryCodesISO3166_1_Alpha2('Macao', 'mo');
		self::$Macedonia = new CountryCodesISO3166_1_Alpha2('Macedonia (the former Yugoslav Republic of)', 'mk');
		self::$Madagascar = new CountryCodesISO3166_1_Alpha2('Madagascar', 'mg');
		self::$Malawi = new CountryCodesISO3166_1_Alpha2('Malawi', 'mw');
		self::$Malaysia = new CountryCodesISO3166_1_Alpha2('Malaysia', 'my');
		self::$Maldives = new CountryCodesISO3166_1_Alpha2('Maldives', 'mv');
		self::$Mali = new CountryCodesISO3166_1_Alpha2('Mali', 'ml');
		self::$Malta = new CountryCodesISO3166_1_Alpha2('Malta', 'mt');
		self::$MarshallIslands = new CountryCodesISO3166_1_Alpha2('Marshall Islands', 'mh');
		self::$Martinique = new CountryCodesISO3166_1_Alpha2('Martinique', 'mq');
		self::$Mauritania = new CountryCodesISO3166_1_Alpha2('Mauritania', 'mr');
		self::$Mauritius = new CountryCodesISO3166_1_Alpha2('Mauritius', 'mu');
		self::$Mayotte = new CountryCodesISO3166_1_Alpha2('Mayotte', 'yt');
		self::$Mexico = new CountryCodesISO3166_1_Alpha2('Mexico', 'mx');
		self::$Micronesia = new CountryCodesISO3166_1_Alpha2('Micronesia (Federated States of)', 'fm');
		self::$Moldova = new CountryCodesISO3166_1_Alpha2('Moldova (Republic of)', 'md');
		self::$Monaco = new CountryCodesISO3166_1_Alpha2('Monaco', 'mc');
		self::$Mongolia = new CountryCodesISO3166_1_Alpha2('Mongolia', 'mn');
		self::$Montenegro = new CountryCodesISO3166_1_Alpha2('Montenegro', 'me');
		self::$Montserrat = new CountryCodesISO3166_1_Alpha2('Montserrat', 'ms');
		self::$Morocco = new CountryCodesISO3166_1_Alpha2('Morocco', 'ma');
		self::$Mozambique = new CountryCodesISO3166_1_Alpha2('Mozambique', 'mz');
		self::$Myanmar = new CountryCodesISO3166_1_Alpha2('Myanmar', 'mm');
		self::$Namibia = new CountryCodesISO3166_1_Alpha2('Namibia', 'na');
		self::$Nauru = new CountryCodesISO3166_1_Alpha2('Nauru', 'nr');
		self::$Nepal = new CountryCodesISO3166_1_Alpha2('Nepal', 'np');
		self::$Netherlands = new CountryCodesISO3166_1_Alpha2('Netherlands', 'nl');
		self::$NewCaledonia = new CountryCodesISO3166_1_Alpha2('New Caledonia', 'nc');
		self::$NewZealand = new CountryCodesISO3166_1_Alpha2('New Zealand', 'nz');
		self::$Nicaragua = new CountryCodesISO3166_1_Alpha2('Nicaragua', 'ni');
		self::$Niger = new CountryCodesISO3166_1_Alpha2('Niger', 'ne');
		self::$Nigeria = new CountryCodesISO3166_1_Alpha2('Nigeria', 'ng');
		self::$Niue = new CountryCodesISO3166_1_Alpha2('Niue', 'nu');
		self::$NorfolkIsland = new CountryCodesISO3166_1_Alpha2('Norfolk Island', 'nf');
		self::$NorthernMarianaIslands = new CountryCodesISO3166_1_Alpha2('Northern Mariana Islands', 'mp');
		self::$Norway = new CountryCodesISO3166_1_Alpha2('Norway', 'no');
		self::$Oman = new CountryCodesISO3166_1_Alpha2('Oman', 'om');
		self::$Pakistan = new CountryCodesISO3166_1_Alpha2('Pakistan', 'pk');
		self::$Palau = new CountryCodesISO3166_1_Alpha2('Palau', 'pw');
		self::$Palestine = new CountryCodesISO3166_1_Alpha2('Palestine, State of', 'ps');
		self::$Panama = new CountryCodesISO3166_1_Alpha2('Panama', 'pa');
		self::$PapuaNewGuinea = new CountryCodesISO3166_1_Alpha2('Papua New Guinea', 'pg');
		self::$Paraguay = new CountryCodesISO3166_1_Alpha2('Paraguay', 'py');
		self::$Peru = new CountryCodesISO3166_1_Alpha2('Peru', 'pe');
		self::$Philippines = new CountryCodesISO3166_1_Alpha2('Philippines', 'ph');
		self::$Pitcairn = new CountryCodesISO3166_1_Alpha2('Pitcairn', 'pn');
		self::$Poland = new CountryCodesISO3166_1_Alpha2('Poland', 'pl');
		self::$Portugal = new CountryCodesISO3166_1_Alpha2('Portugal', 'pt');
		self::$PuertoRico = new CountryCodesISO3166_1_Alpha2('Puerto Rico', 'pr');
		self::$Qatar = new CountryCodesISO3166_1_Alpha2('Qatar', 'qa');
		self::$Reunion = new CountryCodesISO3166_1_Alpha2('Réunion', 're');
		self::$Romania = new CountryCodesISO3166_1_Alpha2('Romania', 'ro');
		self::$RussianFederation = new CountryCodesISO3166_1_Alpha2('Russian Federation', 'ru');
		self::$Rwanda = new CountryCodesISO3166_1_Alpha2('Rwanda', 'rw');
		self::$SaintBarthelemy = new CountryCodesISO3166_1_Alpha2('Saint Barthélemy', 'bl');
		self::$SaintHelena = new CountryCodesISO3166_1_Alpha2('Saint Helena, Ascension and Tristan da Cunha', 'sh');
		self::$SaintKittsAndNevis = new CountryCodesISO3166_1_Alpha2('Saint Kitts and Nevis', 'kn');
		self::$SaintLucia = new CountryCodesISO3166_1_Alpha2('Saint Lucia', 'lc');
		self::$SaintMartin = new CountryCodesISO3166_1_Alpha2('Saint Martin (French part)', 'mf');
		self::$SaintPierreAndMiquelon = new CountryCodesISO3166_1_Alpha2('Saint Pierre and Miquelon', 'pm');
		self::$SaintVincentAndTheGrenadines = new CountryCodesISO3166_1_Alpha2('Saint Vincent and the Grenadines', 'vc');
		self::$Samoa = new CountryCodesISO3166_1_Alpha2('Samoa', 'ws');
		self::$SanMarino = new CountryCodesISO3166_1_Alpha2('San Marino', 'sm');
		self::$SaoTomeAndPrincipe = new CountryCodesISO3166_1_Alpha2('Sao Tome and Principe', 'st');
		self::$SaudiArabia = new CountryCodesISO3166_1_Alpha2('Saudi Arabia', 'sa');
		self::$Senegal = new CountryCodesISO3166_1_Alpha2('Senegal', 'sn');
		self::$Serbia = new CountryCodesISO3166_1_Alpha2('Serbia', 'rs');
		self::$Seychelles = new CountryCodesISO3166_1_Alpha2('Seychelles', 'sc');
		self::$SierraLeone = new CountryCodesISO3166_1_Alpha2('Sierra Leone', 'sl');
		self::$Singapore = new CountryCodesISO3166_1_Alpha2('Singapore', 'sg');
		self::$SintMaarten = new CountryCodesISO3166_1_Alpha2('Sint Maarten (Dutch part)', 'sx');
		self::$Slovakia = new CountryCodesISO3166_1_Alpha2('Slovakia', 'sk');
		self::$Slovenia = new CountryCodesISO3166_1_Alpha2('Slovenia', 'si');
		self::$SolomonIslands = new CountryCodesISO3166_1_Alpha2('Solomon Islands', 'sb');
		self::$Somalia = new CountryCodesISO3166_1_Alpha2('Somalia', 'so');
		self::$SouthAfrica = new CountryCodesISO3166_1_Alpha2('South Africa', 'za');
		self::$SouthGeorgiaAndTheSouthSandwichIslands = new CountryCodesISO3166_1_Alpha2('South Georgia and the South Sandwich Islands', 'gs');
		self::$SouthSudan = new CountryCodesISO3166_1_Alpha2('South Sudan', 'ss');
		self::$Spain = new CountryCodesISO3166_1_Alpha2('Spain', 'es');
		self::$SriLanka = new CountryCodesISO3166_1_Alpha2('Sri Lanka', 'lk');
		self::$Sudan = new CountryCodesISO3166_1_Alpha2('Sudan', 'sd');
		self::$Suriname = new CountryCodesISO3166_1_Alpha2('Suriname', 'sr');
		self::$SvalbardAndJanMayen = new CountryCodesISO3166_1_Alpha2('Svalbard and Jan Mayen', 'sj');
		self::$Swaziland = new CountryCodesISO3166_1_Alpha2('Swaziland', 'sz');
		self::$Sweden = new CountryCodesISO3166_1_Alpha2('Sweden', 'se');
		self::$Switzerland = new CountryCodesISO3166_1_Alpha2('Switzerland', 'ch');
		self::$SyrianArabRepublic = new CountryCodesISO3166_1_Alpha2('Syrian Arab Republic', 'sy');
		self::$Taiwan = new CountryCodesISO3166_1_Alpha2('Taiwan, Province of China', 'tw');
		self::$Tajikistan = new CountryCodesISO3166_1_Alpha2('Tajikistan', 'tj');
		self::$Tanzania = new CountryCodesISO3166_1_Alpha2('Tanzania, United Republic of', 'tz');
		self::$Thailand = new CountryCodesISO3166_1_Alpha2('Thailand', 'th');
		self::$TimorLeste = new CountryCodesISO3166_1_Alpha2('Timor-Leste', 'tl');
		self::$Togo = new CountryCodesISO3166_1_Alpha2('Togo', 'tg');
		self::$Tokelau = new CountryCodesISO3166_1_Alpha2('Tokelau', 'tk');
		self::$Tonga = new CountryCodesISO3166_1_Alpha2('Tonga', 'to');
		self::$TrinidadAndTobago = new CountryCodesISO3166_1_Alpha2('Trinidad and Tobago', 'tt');
		self::$Tunisia = new CountryCodesISO3166_1_Alpha2('Tunisia', 'tn');
		self::$Turkey = new CountryCodesISO3166_1_Alpha2('Turkey', 'tr');
		self::$Turkmenistan = new CountryCodesISO3166_1_Alpha2('Turkmenistan', 'tm');
		self::$TurksAndCaicosIslands = new CountryCodesISO3166_1_Alpha2('Turks and Caicos Islands', 'tc');
		self::$Tuvalu = new CountryCodesISO3166_1_Alpha2('Tuvalu', 'tv');
		self::$Uganda = new CountryCodesISO3166_1_Alpha2('Uganda', 'ug');
		self::$Ukraine = new CountryCodesISO3166_1_Alpha2('Ukraine', 'ua');
		self::$UnitedArabEmirates = new CountryCodesISO3166_1_Alpha2('United Arab Emirates', 'ae');
		self::$UnitedKingdomOfGreatBritainAndNorthernIreland = new CountryCodesISO3166_1_Alpha2('United Kingdom of Great Britain and Northern Ireland', 'gb');
		self::$UnitedStatesOfAmerica = new CountryCodesISO3166_1_Alpha2('United States of America', 'us');
		self::$UnitedStatesMinorOutlyingIslands = new CountryCodesISO3166_1_Alpha2('United States Minor Outlying Islands', 'um');
		self::$Uruguay = new CountryCodesISO3166_1_Alpha2('Uruguay', 'uy');
		self::$Uzbekistan = new CountryCodesISO3166_1_Alpha2('Uzbekistan', 'uz');
		self::$Vanuatu = new CountryCodesISO3166_1_Alpha2('Vanuatu', 'vu');
		self::$Venezuela = new CountryCodesISO3166_1_Alpha2('Venezuela (Bolivarian Republic of)', 've');
		self::$VietNam = new CountryCodesISO3166_1_Alpha2('Viet Nam', 'vn');
		self::$VirginIslandsBritish = new CountryCodesISO3166_1_Alpha2('Virgin Islands (British)', 'vg');
		self::$VirginIslandsUS = new CountryCodesISO3166_1_Alpha2('Virgin Islands (U.S.)', 'vi');
		self::$WallisAndFutuna = new CountryCodesISO3166_1_Alpha2('Wallis and Futuna', 'wf');
		self::$WesternSahara = new CountryCodesISO3166_1_Alpha2('Western Sahara', 'eh');
		self::$Yemen = new CountryCodesISO3166_1_Alpha2('Yemen', 'ye');
		self::$Zambia = new CountryCodesISO3166_1_Alpha2('Zambia', 'zm');
		self::$Zimbabwe = new CountryCodesISO3166_1_Alpha2('Zimbabwe', 'zw');
	}
};
CountryCodesISO3166_1_Alpha2::Initialize();
?>