<?php
namespace Core\Lookups;
use Core\Enum;
/**
 * ISO 0639-2 Language Codes (three letter codes)
 */
final class LanguageCodesISO639_2 extends Enum{
	public static 
		$Afar,$Abkhazian,$Achinese,$Acoli,$Adangme,$Adyghe,$Adygei,$AfroAsiaticLanguages,$Afrihili,$Afrikaans,$Ainu,$Akan,
		$Akkadian,$Albanian,$Aleut,$AlgonquianLanguages,$SouthernAltai,$Amharic,$OldEnglish,$Angika,$ApacheLanguages,$Arabic,
		$OfficialAramaic,$Aragonese,$Armenian,$Mapudungun,$Mapuche,$Arapaho,$ArtificialLanguages,$Arawak,$Assamese,$Asturian,
		$Bable,$Leonese,$Asturleonese,$AthapascanLanguages,$AustralianLanguages,$Avaric,$Avestan,$Awadhi,$Aymara,$Azerbaijani,
		$BandaLanguages,$BamilekeLanguages,$Bashkir,$Baluchi,$Bambara,$Balinese,$Basque,$Basa,$BalticLanguages,$Beja,
		$Bedawiyet,$Belarusian,$Bemba,$Bengali,$BerberLanguages,$Bhojpuri,$BihariLanguages,$Bikol,$Bini,$Edo,$Bislama,$Siksika,
		$BantuLanguages,$Tibetan,$Bosnian,$Braj,$Breton,$BatakLanguages,$Buriat,$Buginese,$Bulgarian,$Burmese,$Blin,$Bilin,
		$Caddo,$CentralAmericanIndianLanguages,$GalibiCarib,$Catalan,$Valencian,$CaucasianLanguages,$Cebuano,$CelticLanguages,
		$Czech,$Chamorro,$Chibcha,$Chechen,$Chagatai,$Chinese,$Chuukese,$Mari,$ChinookJargon,$Choctaw,$Chipewyan,$DeneSuline,
		$Cherokee,$ChurchSlavic,$OldSlavonic,$ChurchSlavonic,$OldBulgarian,$OldChurchSlavonic,$Chuvash,$Cheyenne,$ChamicLanguages,
		$Coptic,$Cornish,$Corsican,$CreolesAndPidginsEnglishBased,$CreolesAndPidginsFrenchBased,$CreolesAndPidginsPortugueseBased,
		$Cree,$CrimeanTatar,$CrimeanTurkish,$CreolesAndPidgins,$Kashubian,$CushiticLanguages,$Welsh,$Dakota,$Danish,
		$Dargwa,$LandDayakLanguages,$Delaware,$Athapascan,$German,$Dogrib,$Dinka,$Divehi,$Dhivehi,$Maldivian,$Dogri,$DravidianLanguages,
		$LowerSorbian,$Duala,$DutchMiddle,$DutchFlemish,$Dyula,$Dzongkha,$Efik,$AncientEgyptian,$Ekajuk,$Elamite,$English,
		$MiddleEnglish,$Esperanto,$Estonian,$Ewe,$Ewondo,$Fang,$Faroese,$Persian,$Fanti,$Fijian,$Pilipino,$Filipino,
		$Finnish,$FinnoUgrianLanguages,$Fon,$French,$MiddleFrench,$OldFrench,$NorthernFrisian,$EasternFrisian,$WesternFrisian,
		$Fulah,$Friulian,$Ga,$Gayo,$Gbaya,$GermanicLanguages,$Georgian,$Geez,$Gilbertese,$Gaelic,$ScottishGaelic,
		$Irish,$Galician,$Manx,$MiddleHighGerman,$OldHighGerman,$Gondi,$Gorontalo,$Gothic,$Grebo,$Ancientgreek,$ModernGreek,
		$Guarani,$SwissGerman,$Alemannic,$Alsatian,$Gujarati,$Gwichin,$Haida,$Haitian,$HaitianCreole,$Hausa,$Hawaiian,$Hebrew,
		$Herero,$Hiligaynon,$HimachaliLanguages,$WesternPahariLanguages,$Hindi,$Hittite,$Hmong,$Mong,$HiriMotu,$Croatian,
		$UpperSorbian,$Hungarian,$Hupa,$Iban,$Igbo,$Icelandic,$Ido,$SichuanYi,$Nuosu,$IjoLanguages,$Inuktitut,
		$Interlingue,$Occidental,$Iloko,$Interlingua,$IndicLanguages,$Indonesian,$IndoEuropeanLanguages,$Ingush,$Inupiaq,
		$IranianLanguages,$IroquoianLanguages,$Italian,$Javanese,$Lojban,$Japanese,$JudeoPersian,$JudeoArabic,$KaraKalpak,
		$Kabyle,$Kachin,$Jingpho,$Kalaallisut,$Greenlandic,$Kamba,$Kannada,$KarenLanguages,$Kashmiri,$Kanuri,$Kawi,
		$Kazakh,$Kabardian,$Khasi,$KhoisanLanguages,$CentralKhmer,$Khotanese,$Sakan,$Kikuyu,$Gikuyu,$Kinyarwanda,$Kirghiz,
		$Kyrgyz,$Kimbundu,$Konkani,$Komi,$Kongo,$Korean,$Kosraean,$Kpelle,$KarachayBalkar,$Karelian,$KruLanguages,$Kurukh,
		$Kuanyama,$Kwanyama,$Kumyk,$Kurdish,$Kutenai,$Ladino,$Lahnda,$Lamba,$Lao,$Latin,$Latvian,$Lezghian,$Limburgan,
		$Limburger,$Limburgish,$Lingala,$Lithuanian,$Mongo,$Lozi,$Luxembourgish,$Letzeburgesch,$LubaLulua,$LubaKatanga,
		$Ganda,$Luiseno,$Lunda,$Luo,$Lushai,$Macedonian,$Madurese,$Magahi,$Marshallese,$Maithili,$Makasar,$Malayalam,
		$Mandingo,$Maori,$AustronesianLanguages,$Marathi,$Masai,$Malay,$Moksha,$Mandar,$Mende,$MiddleIrish,$Mikmaq,$Micmac,
		$Minangkabau,$UncodedLanguages,$MonKhmerLanguages,$Malagasy,$Maltese,$Manchu,$Manipuri,$ManoboLanguages,
		$Mohawk,$Mongolian,$Mossi,$MultipleLanguages,$MundaLanguages,$Creek,$Mirandese,$Marwari,
		$MayanLanguages,$Erzya,$NahuatlLanguages,$NorthAmericanIndianLanguages,$Neapolitan,$Nauru,$Navajo,$Navaho,
		$SouthNdebele,$NorthNdebele,$Ndonga,$LowGerman,$LowSaxon,$Nepali,$NepalBhasa,$Newari,$Nias,
		$NigerKordofanianLanguages,$Niuean,$Dutch,$Flemish,$NynorskNorwegian,$NorwegianNynorsk,$BokmalNorwegian,
		$NorwegianBokmal,$Nogai,$OldNorse,$Norwegian,$Nko,$Pedi,$Sepedi,$NorthernSotho,$NubianLanguages,$ClassicalNewari,
		$OldNewari,$ClassicalNepalBhasa,$Chichewa,$Chewa,$Nyanja,$Nyamwezi,$Nyankole,$Nyoro,$Nzima,$OccitanPost1500,$Ojibwa,
		$Oriya,$Oromo,$Osage,$Ossetian,$Ossetic,$TurkishOttoman,$OtomianLanguages,$PapuanLanguages,$Pangasinan,$Pahlavi,
		$Pampanga,$Kapampangan,$Panjabi,$Punjabi,$Papiamento,$Palauan,$OldPersian,$PhilippineLanguages,$Phoenician,
		$Pali,$Polish,$Pohnpeian,$Portuguese,$PrakritLanguages,$OldProvencal,$OldOccitan,$Pushto,$Pashto,$Reserved,$Quechua,
		$Rajasthani,$Rapanui,$Rarotongan,$CookIslandsMaori,$RomanceLanguages,$Romansh,$Romany,$Romanian,$Moldavian,$Moldovan,
		$Rundi,$Aromanian,$Arumanian,$MacedoRomanian,$Russian,$Sandawe,$Sango,$Yakut,$SouthAmericanIndianLanguages,
		$SalishanLanguages,$SamaritanAramaic,$Sanskrit,$Sasak,$Santali,$Sicilian,$Scots,$Selkup,$SemiticLanguages,$OldIrish,
		$SignLanguages,$Shan,$Sidamo,$Sinhala,$Sinhalese,$SiouanLanguages,$SinoTibetanLanguages,$SlavicLanguages,$Slovak,
		$Slovenian,$SouthernSami,$NorthernSami,$SamiLanguages,$LuleSami,$InariSami,$Samoan,$SkoltSami,$Shona,$Sindhi,$Soninke,
		$Sogdian,$Somali,$SonghaiLanguages,$Sotho,$Southern,$Spanish,$Castilian,$Sardinian,$SrananTongo,$Serbian,$Serer,
		$NiloSaharanLanguages,$Swati,$Sukuma,$Sundanese,$Susu,$Sumerian,$Swahili,$Swedish,$ClassicalSyriac,$Syriac,$Tahitian,
		$TaiLanguages,$Tamil,$Tatar,$Telugu,$Timne,$Tereno,$Tetum,$Tajik,$Tagalog,$Thai,$Tigre,$Tigrinya,$Tiv,$Tokelau,
		$Klingon,$TlhinganHol,$Tlingit,$Tamashek,$TongaNyasa,$TongaTongaIslands,$TokPisin,$Tsimshian,$Tswana,$Tsonga,$Turkmen,
		$Tumbuka,$TupiLanguages,$Turkish,$AltaicLanguages,$Tuvalu,$Twi,$Tuvinian,$Udmurt,$Ugaritic,$Uighur,$Uyghur,$Ukrainian,
		$Umbundu,$Undetermined,$Urdu,$Uzbek,$Vai,$Venda,$Vietnamese,$Volapuk,$Votic,$WakashanLanguages,$Wolaitta,$Wolaytta,
		$Waray,$Washo,$SorbianLanguages,$Walloon,$Wolof,$Kalmyk,$Oirat,$Xhosa,$Yao,$Yapese,$Yiddish,$Yoruba,$YupikLanguages,
		$Zapotec,$Blissymbols,$Blissymbolics,$Bliss,$Zenaga,$StandardMoroccanTamazight,$Zhuang,$Chuang,$ZandeLanguages,
		$Zulu,$Zuni,$NotApplicable,$Zaza,$Dimili,$Dimli,$Kirdki,$Kirmanjki,$Zazaki;
	/** Constructor($name, $value) - Protected constructor used by Initialize() to instantiate LanguageCodesISO639_2 objects */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static constructor */
	public static function Initialize(){
		self::$Afar = new LanguageCodesISO639_2('Afar', 'aar');
		self::$Abkhazian = new LanguageCodesISO639_2('Abkhazian', 'abk');
		self::$Achinese = new LanguageCodesISO639_2('Achinese', 'ace');
		self::$Acoli = new LanguageCodesISO639_2('Acoli', 'ach');
		self::$Adangme = new LanguageCodesISO639_2('Adangme', 'ada');
		self::$Adyghe = new LanguageCodesISO639_2('Adyghe', 'ady');
		self::$Adygei = new LanguageCodesISO639_2('Adygei', 'ady');
		self::$AfroAsiaticLanguages = new LanguageCodesISO639_2('Afro Asiatic languages', 'afa');
		self::$Afrihili = new LanguageCodesISO639_2('Afrihili', 'afh');
		self::$Afrikaans = new LanguageCodesISO639_2('Afrikaans', 'afr');
		self::$Ainu = new LanguageCodesISO639_2('Ainu', 'ain');
		self::$Akan = new LanguageCodesISO639_2('Akan', 'aka');
		self::$Akkadian = new LanguageCodesISO639_2('Akkadian', 'akk');
		self::$Albanian = new LanguageCodesISO639_2('Albanian', 'alb');
		self::$Aleut = new LanguageCodesISO639_2('Aleut', 'ale');
		self::$AlgonquianLanguages = new LanguageCodesISO639_2('Algonquian languages', 'alg');
		self::$SouthernAltai = new LanguageCodesISO639_2('Southern Altai', 'alt');
		self::$Amharic = new LanguageCodesISO639_2('Amharic', 'amh');
		self::$OldEnglish = new LanguageCodesISO639_2('Old English', 'ang');
		self::$Angika = new LanguageCodesISO639_2('Angika', 'anp');
		self::$ApacheLanguages = new LanguageCodesISO639_2('Apache languages', 'apa');
		self::$Arabic = new LanguageCodesISO639_2('Arabic', 'ara');
		self::$OfficialAramaic = new LanguageCodesISO639_2('Official Aramaic', 'arc');
		self::$Aragonese = new LanguageCodesISO639_2('Aragonese', 'arg');
		self::$Armenian = new LanguageCodesISO639_2('Armenian', 'arm');
		self::$Mapudungun = new LanguageCodesISO639_2('Mapudungun', 'arn');
		self::$Mapuche = new LanguageCodesISO639_2('Mapuche', 'arn');
		self::$Arapaho = new LanguageCodesISO639_2('Arapaho', 'arp');
		self::$ArtificialLanguages = new LanguageCodesISO639_2('Artificial languages', 'art');
		self::$Arawak = new LanguageCodesISO639_2('Arawak', 'arw');
		self::$Assamese = new LanguageCodesISO639_2('Assamese', 'asm');
		self::$Asturian = new LanguageCodesISO639_2('Asturian', 'ast');
		self::$Bable = new LanguageCodesISO639_2('Bable', 'ast');
		self::$Leonese = new LanguageCodesISO639_2('Leonese', 'ast');
		self::$Asturleonese = new LanguageCodesISO639_2('Asturleonese', 'ast');
		self::$AthapascanLanguages = new LanguageCodesISO639_2('Athapascan  languages', 'ath');
		self::$AustralianLanguages = new LanguageCodesISO639_2('Australian languages', 'aus');
		self::$Avaric = new LanguageCodesISO639_2('Avaric', 'ava');
		self::$Avestan = new LanguageCodesISO639_2('Avestan', 'ave');
		self::$Awadhi = new LanguageCodesISO639_2('Awadhi', 'awa');
		self::$Aymara = new LanguageCodesISO639_2('Aymara', 'aym');
		self::$Azerbaijani = new LanguageCodesISO639_2('Azerbaijani', 'aze');
		self::$BandaLanguages = new LanguageCodesISO639_2('Banda languages', 'bad');
		self::$BamilekeLanguages = new LanguageCodesISO639_2('Bamileke languages', 'bai');
		self::$Bashkir = new LanguageCodesISO639_2('Bashkir', 'bak');
		self::$Baluchi = new LanguageCodesISO639_2('Baluchi', 'bal');
		self::$Bambara = new LanguageCodesISO639_2('Bambara', 'bam');
		self::$Balinese = new LanguageCodesISO639_2('Balinese', 'ban');
		self::$Basque = new LanguageCodesISO639_2('Basque', 'eus');
		self::$Basa = new LanguageCodesISO639_2('Basa', 'bas');
		self::$BalticLanguages = new LanguageCodesISO639_2('Baltic languages', 'bat');
		self::$Beja = new LanguageCodesISO639_2('Beja', 'bej');
		self::$Bedawiyet = new LanguageCodesISO639_2('Bedawiyet', 'bej');
		self::$Belarusian = new LanguageCodesISO639_2('Belarusian', 'bel');
		self::$Bemba = new LanguageCodesISO639_2('Bemba', 'bem');
		self::$Bengali = new LanguageCodesISO639_2('Bengali', 'ben');
		self::$BerberLanguages = new LanguageCodesISO639_2('Berber languages', 'ber');
		self::$Bhojpuri = new LanguageCodesISO639_2('Bhojpuri', 'bho');
		self::$BihariLanguages = new LanguageCodesISO639_2('Bihari languages', 'bih');
		self::$Bikol = new LanguageCodesISO639_2('Bikol', 'bik');
		self::$Bini = new LanguageCodesISO639_2('Bini', 'bin');
		self::$Edo = new LanguageCodesISO639_2('Edo', 'bin');
		self::$Bislama = new LanguageCodesISO639_2('Bislama', 'bis');
		self::$Siksika = new LanguageCodesISO639_2('Siksika', 'bla');
		self::$BantuLanguages = new LanguageCodesISO639_2('Bantu languages', 'bnt');
		self::$Tibetan = new LanguageCodesISO639_2('Tibetan', 'tib');
		self::$Bosnian = new LanguageCodesISO639_2('Bosnian', 'bos');
		self::$Braj = new LanguageCodesISO639_2('Braj', 'bra');
		self::$Breton = new LanguageCodesISO639_2('Breton', 'bre');
		self::$BatakLanguages = new LanguageCodesISO639_2('Batak languages', 'btk');
		self::$Buriat = new LanguageCodesISO639_2('Buriat', 'bua');
		self::$Buginese = new LanguageCodesISO639_2('Buginese', 'bug');
		self::$Bulgarian = new LanguageCodesISO639_2('Bulgarian', 'bul');
		self::$Burmese = new LanguageCodesISO639_2('Burmese', 'bur');
		self::$Blin = new LanguageCodesISO639_2('Blin', 'byn');
		self::$Bilin = new LanguageCodesISO639_2('Bilin', 'byn');
		self::$Caddo = new LanguageCodesISO639_2('Caddo', 'cad');
		self::$CentralAmericanIndianLanguages = new LanguageCodesISO639_2('Central American Indian languages', 'cai');
		self::$GalibiCarib = new LanguageCodesISO639_2('Galibi Carib', 'car');
		self::$Catalan = new LanguageCodesISO639_2('Catalan', 'cat');
		self::$Valencian = new LanguageCodesISO639_2('Valencian', 'cat');
		self::$CaucasianLanguages = new LanguageCodesISO639_2('Caucasian languages', 'cau');
		self::$Cebuano = new LanguageCodesISO639_2('Cebuano', 'ceb');
		self::$CelticLanguages = new LanguageCodesISO639_2('Celtic languages', 'cel');
		self::$Czech = new LanguageCodesISO639_2('Czech', 'cze');
		self::$Chamorro = new LanguageCodesISO639_2('Chamorro', 'cha');
		self::$Chibcha = new LanguageCodesISO639_2('Chibcha', 'chb');
		self::$Chechen = new LanguageCodesISO639_2('Chechen', 'che');
		self::$Chagatai = new LanguageCodesISO639_2('Chagatai', 'chg');
		self::$Chinese = new LanguageCodesISO639_2('Chinese', 'chi');
		self::$Chuukese = new LanguageCodesISO639_2('Chuukese', 'chk');
		self::$Mari = new LanguageCodesISO639_2('Mari', 'chm');
		self::$ChinookJargon = new LanguageCodesISO639_2('Chinook jargon', 'chn');
		self::$Choctaw = new LanguageCodesISO639_2('Choctaw', 'cho');
		self::$Chipewyan = new LanguageCodesISO639_2('Chipewyan', 'chp');
		self::$DeneSuline = new LanguageCodesISO639_2('Dene Suline', 'chp');
		self::$Cherokee = new LanguageCodesISO639_2('Cherokee', 'chr');
		self::$ChurchSlavic = new LanguageCodesISO639_2('Church Slavic', 'chu');
		self::$OldSlavonic = new LanguageCodesISO639_2('Old Slavonic', 'chu');
		self::$ChurchSlavonic = new LanguageCodesISO639_2('Church Slavonic', 'chu');
		self::$OldBulgarian = new LanguageCodesISO639_2('Old Bulgarian', 'chu');
		self::$OldChurchSlavonic = new LanguageCodesISO639_2('Old Church Slavonic', 'chu');
		self::$Chuvash = new LanguageCodesISO639_2('Chuvash', 'chv');
		self::$Cheyenne = new LanguageCodesISO639_2('Cheyenne', 'chy');
		self::$ChamicLanguages = new LanguageCodesISO639_2('Chamic languages', 'cmc');
		self::$Coptic = new LanguageCodesISO639_2('Coptic', 'cop');
		self::$Cornish = new LanguageCodesISO639_2('Cornish', 'cor');
		self::$Corsican = new LanguageCodesISO639_2('Corsican', 'cos');
		self::$CreolesAndPidginsEnglishBased = new LanguageCodesISO639_2('Creoles and pidgins English based', 'cpe');
		self::$CreolesAndPidginsFrenchBased = new LanguageCodesISO639_2('Creoles and pidgins French based', 'cpf');
		self::$CreolesAndPidginsPortugueseBased = new LanguageCodesISO639_2('Creoles and pidgins Portuguese based', 'cpp');
		self::$Cree = new LanguageCodesISO639_2('Cree', 'cre');
		self::$CrimeanTatar = new LanguageCodesISO639_2('Crimean Tatar', 'crh');
		self::$CrimeanTurkish = new LanguageCodesISO639_2('Crimean Turkish', 'crh');
		self::$CreolesAndPidgins = new LanguageCodesISO639_2('Creoles and pidgins', 'crp');
		self::$Kashubian = new LanguageCodesISO639_2('Kashubian', 'csb');
		self::$CushiticLanguages = new LanguageCodesISO639_2('Cushitic languages', 'cus');
		self::$Welsh = new LanguageCodesISO639_2('Welsh', 'wel');
		self::$Dakota = new LanguageCodesISO639_2('Dakota', 'dak');
		self::$Danish = new LanguageCodesISO639_2('Danish', 'dan');
		self::$Dargwa = new LanguageCodesISO639_2('Dargwa', 'dar');
		self::$LandDayakLanguages = new LanguageCodesISO639_2('Land Dayak languages', 'day');
		self::$Delaware = new LanguageCodesISO639_2('Delaware', 'del');
		self::$Athapascan = new LanguageCodesISO639_2('Athapascan', 'den');
		self::$German = new LanguageCodesISO639_2('German', 'deu');
		self::$Dogrib = new LanguageCodesISO639_2('Dogrib', 'dgr');
		self::$Dinka = new LanguageCodesISO639_2('Dinka', 'din');
		self::$Divehi = new LanguageCodesISO639_2('Divehi', 'div');
		self::$Dhivehi = new LanguageCodesISO639_2('Dhivehi', 'div');
		self::$Maldivian = new LanguageCodesISO639_2('Maldivian', 'div');
		self::$Dogri = new LanguageCodesISO639_2('Dogri', 'doi');
		self::$DravidianLanguages = new LanguageCodesISO639_2('Dravidian languages', 'dra');
		self::$LowerSorbian = new LanguageCodesISO639_2('Lower Sorbian', 'dsb');
		self::$Duala = new LanguageCodesISO639_2('Duala', 'dua');
		self::$DutchMiddle = new LanguageCodesISO639_2('Dutch Middle', 'dum');
		self::$DutchFlemish = new LanguageCodesISO639_2('Dutch Flemish', 'dut');
		self::$Dyula = new LanguageCodesISO639_2('Dyula', 'dyu');
		self::$Dzongkha = new LanguageCodesISO639_2('Dzongkha', 'dzo');
		self::$Efik = new LanguageCodesISO639_2('Efik', 'efi');
		self::$AncientEgyptian = new LanguageCodesISO639_2('Ancient Egyptian', 'egy');
		self::$Ekajuk = new LanguageCodesISO639_2('Ekajuk', 'eka');
		self::$Elamite = new LanguageCodesISO639_2('Elamite', 'elx');
		self::$English = new LanguageCodesISO639_2('English', 'eng');
		self::$MiddleEnglish = new LanguageCodesISO639_2('Middle English', 'enm');
		self::$Esperanto = new LanguageCodesISO639_2('Esperanto', 'epo');
		self::$Estonian = new LanguageCodesISO639_2('Estonian', 'est');
		self::$Ewe = new LanguageCodesISO639_2('Ewe', 'ewe');
		self::$Ewondo = new LanguageCodesISO639_2('Ewondo', 'ewo');
		self::$Fang = new LanguageCodesISO639_2('Fang', 'fan');
		self::$Faroese = new LanguageCodesISO639_2('Faroese', 'fao');
		self::$Persian = new LanguageCodesISO639_2('Persian', 'fas');
		self::$Fanti = new LanguageCodesISO639_2('Fanti', 'fat');
		self::$Fijian = new LanguageCodesISO639_2('Fijian', 'fij');
		self::$Pilipino = new LanguageCodesISO639_2('Pilipino', 'fil');
		self::$Filipino = new LanguageCodesISO639_2('Filipino', 'fil');
		self::$Finnish = new LanguageCodesISO639_2('Finnish', 'fin');
		self::$FinnoUgrianLanguages = new LanguageCodesISO639_2('Finno Ugrian languages', 'fiu');
		self::$Fon = new LanguageCodesISO639_2('Fon', 'fon');
		self::$French = new LanguageCodesISO639_2('French', 'fre');
		self::$MiddleFrench = new LanguageCodesISO639_2('Middle French', 'frm');
		self::$OldFrench = new LanguageCodesISO639_2('Old French', 'fro');
		self::$NorthernFrisian = new LanguageCodesISO639_2('Northern Frisian', 'frr');
		self::$EasternFrisian = new LanguageCodesISO639_2('Eastern Frisian', 'frs');
		self::$WesternFrisian = new LanguageCodesISO639_2('Western Frisian', 'fry');
		self::$Fulah = new LanguageCodesISO639_2('Fulah', 'ful');
		self::$Friulian = new LanguageCodesISO639_2('Friulian', 'fur');
		self::$Ga = new LanguageCodesISO639_2('Ga', 'gaa');
		self::$Gayo = new LanguageCodesISO639_2('Gayo', 'gay');
		self::$Gbaya = new LanguageCodesISO639_2('Gbaya', 'gba');
		self::$GermanicLanguages = new LanguageCodesISO639_2('Germanic languages', 'gem');
		self::$Georgian = new LanguageCodesISO639_2('Georgian', 'geo');
		self::$Geez = new LanguageCodesISO639_2('Geez', 'gez');
		self::$Gilbertese = new LanguageCodesISO639_2('Gilbertese', 'gil');
		self::$Gaelic = new LanguageCodesISO639_2('Gaelic', 'gla');
		self::$ScottishGaelic = new LanguageCodesISO639_2('Scottish Gaelic', 'gla');
		self::$Irish = new LanguageCodesISO639_2('Irish', 'gle');
		self::$Galician = new LanguageCodesISO639_2('Galician', 'glg');
		self::$Manx = new LanguageCodesISO639_2('Manx', 'glv');
		self::$MiddleHighGerman = new LanguageCodesISO639_2('Middle High German', 'gmh');
		self::$OldHighGerman = new LanguageCodesISO639_2('Old High German', 'goh');
		self::$Gondi = new LanguageCodesISO639_2('Gondi', 'gon');
		self::$Gorontalo = new LanguageCodesISO639_2('Gorontalo', 'gor');
		self::$Gothic = new LanguageCodesISO639_2('Gothic', 'got');
		self::$Grebo = new LanguageCodesISO639_2('Grebo', 'grb');
		self::$Ancientgreek = new LanguageCodesISO639_2('AncientGreek', 'grc');
		self::$ModernGreek = new LanguageCodesISO639_2('Modern Greek', 'gre');
		self::$Guarani = new LanguageCodesISO639_2('Guarani', 'grn');
		self::$SwissGerman = new LanguageCodesISO639_2('Swiss German', 'gsw');
		self::$Alemannic = new LanguageCodesISO639_2('Alemannic', 'gsw');
		self::$Alsatian = new LanguageCodesISO639_2('Alsatian', 'gsw');
		self::$Gujarati = new LanguageCodesISO639_2('Gujarati', 'guj');
		self::$Gwichin = new LanguageCodesISO639_2('Gwichin', 'gwi');
		self::$Haida = new LanguageCodesISO639_2('Haida', 'hai');
		self::$Haitian = new LanguageCodesISO639_2('Haitian', 'hat');
		self::$HaitianCreole = new LanguageCodesISO639_2('Haitian Creole', 'hat');
		self::$Hausa = new LanguageCodesISO639_2('Hausa', 'hau');
		self::$Hawaiian = new LanguageCodesISO639_2('Hawaiian', 'haw');
		self::$Hebrew = new LanguageCodesISO639_2('Hebrew', 'heb');
		self::$Herero = new LanguageCodesISO639_2('Herero', 'her');
		self::$Hiligaynon = new LanguageCodesISO639_2('Hiligaynon', 'hil');
		self::$HimachaliLanguages = new LanguageCodesISO639_2('Himachali languages', 'him');
		self::$WesternPahariLanguages = new LanguageCodesISO639_2('Western Pahari languages', 'him');
		self::$Hindi = new LanguageCodesISO639_2('Hindi', 'hin');
		self::$Hittite = new LanguageCodesISO639_2('Hittite', 'hit');
		self::$Hmong = new LanguageCodesISO639_2('Hmong', 'hmn');
		self::$Mong = new LanguageCodesISO639_2('Mong', 'hmn');
		self::$HiriMotu = new LanguageCodesISO639_2('Hiri Motu', 'hmo');
		self::$Croatian = new LanguageCodesISO639_2('Croatian', 'hrv');
		self::$UpperSorbian = new LanguageCodesISO639_2('Upper Sorbian', 'hsb');
		self::$Hungarian = new LanguageCodesISO639_2('Hungarian', 'hun');
		self::$Hupa = new LanguageCodesISO639_2('Hupa', 'hup');
		self::$Iban = new LanguageCodesISO639_2('Iban', 'iba');
		self::$Igbo = new LanguageCodesISO639_2('Igbo', 'ibo');
		self::$Icelandic = new LanguageCodesISO639_2('Icelandic', 'ice');
		self::$Ido = new LanguageCodesISO639_2('Ido', 'ido');
		self::$SichuanYi = new LanguageCodesISO639_2('Sichuan Yi', 'iii');
		self::$Nuosu = new LanguageCodesISO639_2('Nuosu', 'iii');
		self::$IjoLanguages = new LanguageCodesISO639_2('Ijo languages', 'ijo');
		self::$Inuktitut = new LanguageCodesISO639_2('Inuktitut', 'iku');
		self::$Interlingue = new LanguageCodesISO639_2('Interlingue', 'ile');
		self::$Occidental = new LanguageCodesISO639_2('Occidental', 'ile');
		self::$Iloko = new LanguageCodesISO639_2('Iloko', 'ilo');
		self::$Interlingua = new LanguageCodesISO639_2('Interlingua', 'ina');
		self::$IndicLanguages = new LanguageCodesISO639_2('Indic languages', 'inc');
		self::$Indonesian = new LanguageCodesISO639_2('Indonesian', 'ind');
		self::$IndoEuropeanLanguages = new LanguageCodesISO639_2('Indo European languages', 'ine');
		self::$Ingush = new LanguageCodesISO639_2('Ingush', 'inh');
		self::$Inupiaq = new LanguageCodesISO639_2('Inupiaq', 'ipk');
		self::$IranianLanguages = new LanguageCodesISO639_2('Iranian languages', 'ira');
		self::$IroquoianLanguages = new LanguageCodesISO639_2('Iroquoian languages', 'iro');
		self::$Italian = new LanguageCodesISO639_2('Italian', 'ita');
		self::$Javanese = new LanguageCodesISO639_2('Javanese', 'jav');
		self::$Lojban = new LanguageCodesISO639_2('Lojban', 'jbo');
		self::$Japanese = new LanguageCodesISO639_2('Japanese', 'jpn');
		self::$JudeoPersian = new LanguageCodesISO639_2('Judeo Persian', 'jpr');
		self::$JudeoArabic = new LanguageCodesISO639_2('Judeo Arabic', 'jrb');
		self::$KaraKalpak = new LanguageCodesISO639_2('Kara Kalpak', 'kaa');
		self::$Kabyle = new LanguageCodesISO639_2('Kabyle', 'kab');
		self::$Kachin = new LanguageCodesISO639_2('Kachin', 'kac');
		self::$Jingpho = new LanguageCodesISO639_2('Jingpho', 'kac');
		self::$Kalaallisut = new LanguageCodesISO639_2('Kalaallisut', '');
		self::$Greenlandic = new LanguageCodesISO639_2('Greenlandic', 'kal');
		self::$Kamba = new LanguageCodesISO639_2('Kamba', 'kam');
		self::$Kannada = new LanguageCodesISO639_2('Kannada', 'kan');
		self::$KarenLanguages = new LanguageCodesISO639_2('Karen languages', 'kar');
		self::$Kashmiri = new LanguageCodesISO639_2('Kashmiri', 'kas');
		self::$Kanuri = new LanguageCodesISO639_2('Kanuri', 'kau');
		self::$Kawi = new LanguageCodesISO639_2('Kawi', 'kaw');
		self::$Kazakh = new LanguageCodesISO639_2('Kazakh', 'kaz');
		self::$Kabardian = new LanguageCodesISO639_2('Kabardian', 'kbd');
		self::$Khasi = new LanguageCodesISO639_2('Khasi', 'kha');
		self::$KhoisanLanguages = new LanguageCodesISO639_2('Khoisan languages', 'khi');
		self::$CentralKhmer = new LanguageCodesISO639_2('Central Khmer', 'khm');
		self::$Khotanese = new LanguageCodesISO639_2('Khotanese', 'kho');
		self::$Sakan = new LanguageCodesISO639_2('Sakan', 'kho');
		self::$Kikuyu = new LanguageCodesISO639_2('Kikuyu', 'kik');
		self::$Gikuyu = new LanguageCodesISO639_2('Gikuyu', 'kik');
		self::$Kinyarwanda = new LanguageCodesISO639_2('Kinyarwanda', 'kin');
		self::$Kirghiz = new LanguageCodesISO639_2('Kirghiz', 'kir');
		self::$Kyrgyz = new LanguageCodesISO639_2('Kyrgyz', 'kir');
		self::$Kimbundu = new LanguageCodesISO639_2('Kimbundu', 'kmb');
		self::$Konkani = new LanguageCodesISO639_2('Konkani', 'kok');
		self::$Komi = new LanguageCodesISO639_2('Komi', 'kom');
		self::$Kongo = new LanguageCodesISO639_2('Kongo', 'kon');
		self::$Korean = new LanguageCodesISO639_2('Korean', 'kor');
		self::$Kosraean = new LanguageCodesISO639_2('Kosraean', 'kos');
		self::$Kpelle = new LanguageCodesISO639_2('Kpelle', 'kpe');
		self::$KarachayBalkar = new LanguageCodesISO639_2('Karachay Balkar', 'krc');
		self::$Karelian = new LanguageCodesISO639_2('Karelian', 'krl');
		self::$KruLanguages = new LanguageCodesISO639_2('Kru languages', 'kro');
		self::$Kurukh = new LanguageCodesISO639_2('Kurukh', 'kru');
		self::$Kuanyama = new LanguageCodesISO639_2('Kuanyama', 'kua');
		self::$Kwanyama = new LanguageCodesISO639_2('Kwanyama', 'kua');
		self::$Kumyk = new LanguageCodesISO639_2('Kumyk', 'kum');
		self::$Kurdish = new LanguageCodesISO639_2('Kurdish', 'kur');
		self::$Kutenai = new LanguageCodesISO639_2('Kutenai', 'kut');
		self::$Ladino = new LanguageCodesISO639_2('Ladino', 'lad');
		self::$Lahnda = new LanguageCodesISO639_2('Lahnda', 'lah');
		self::$Lamba = new LanguageCodesISO639_2('Lamba', 'lam');
		self::$Lao = new LanguageCodesISO639_2('Lao', 'lao');
		self::$Latin = new LanguageCodesISO639_2('Latin', 'lat');
		self::$Latvian = new LanguageCodesISO639_2('Latvian', 'lav');
		self::$Lezghian = new LanguageCodesISO639_2('Lezghian', 'lez');
		self::$Limburgan = new LanguageCodesISO639_2('Limburgan', 'lim');
		self::$Limburger = new LanguageCodesISO639_2('Limburger', 'lim');
		self::$Limburgish = new LanguageCodesISO639_2('Limburgish', 'lim');
		self::$Lingala = new LanguageCodesISO639_2('Lingala', 'lin');
		self::$Lithuanian = new LanguageCodesISO639_2('Lithuanian', 'lit');
		self::$Mongo = new LanguageCodesISO639_2('Mongo', 'lol');
		self::$Lozi = new LanguageCodesISO639_2('Lozi', 'loz');
		self::$Luxembourgish = new LanguageCodesISO639_2('Luxembourgish', 'ltz');
		self::$Letzeburgesch = new LanguageCodesISO639_2('Letzeburgesch', 'ltz');
		self::$LubaLulua = new LanguageCodesISO639_2('Luba Lulua', 'lua');
		self::$LubaKatanga = new LanguageCodesISO639_2('Luba Katanga', 'lub');
		self::$Ganda = new LanguageCodesISO639_2('Ganda', 'lug');
		self::$Luiseno = new LanguageCodesISO639_2('Luiseno', 'lui');
		self::$Lunda = new LanguageCodesISO639_2('Lunda', 'lun');
		self::$Luo = new LanguageCodesISO639_2('Luo', 'luo');
		self::$Lushai = new LanguageCodesISO639_2('Lushai', 'lus');
		self::$Macedonian = new LanguageCodesISO639_2('Macedonian', 'mac');
		self::$Madurese = new LanguageCodesISO639_2('Madurese', 'mad');
		self::$Magahi = new LanguageCodesISO639_2('Magahi', 'mag');
		self::$Marshallese = new LanguageCodesISO639_2('Marshallese', 'mah');
		self::$Maithili = new LanguageCodesISO639_2('Maithili', 'mai');
		self::$Makasar = new LanguageCodesISO639_2('Makasar', 'mak');
		self::$Malayalam = new LanguageCodesISO639_2('Malayalam', 'mal');
		self::$Mandingo = new LanguageCodesISO639_2('Mandingo', 'man');
		self::$Maori = new LanguageCodesISO639_2('Maori', 'mao');
		self::$AustronesianLanguages = new LanguageCodesISO639_2('Austronesian languages', 'map');
		self::$Marathi = new LanguageCodesISO639_2('Marathi', 'mar');
		self::$Masai = new LanguageCodesISO639_2('Masai', 'mas');
		self::$Malay = new LanguageCodesISO639_2('Malay', 'may');
		self::$Moksha = new LanguageCodesISO639_2('Moksha', 'mdf');
		self::$Mandar = new LanguageCodesISO639_2('Mandar', 'mdr');
		self::$Mende = new LanguageCodesISO639_2('Mende', 'men');
		self::$MiddleIrish = new LanguageCodesISO639_2('Middle Irish', 'mga');
		self::$Mikmaq = new LanguageCodesISO639_2('Mikmaq', 'mic');
		self::$Micmac = new LanguageCodesISO639_2('Micmac', 'mic');
		self::$Minangkabau = new LanguageCodesISO639_2('Minangkabau', 'min');
		self::$UncodedLanguages = new LanguageCodesISO639_2('Uncoded languages', 'mis');
		self::$MonKhmerLanguages = new LanguageCodesISO639_2('Mon Khmer languages', 'mkh');
		self::$Malagasy = new LanguageCodesISO639_2('Malagasy', 'mlg');
		self::$Maltese = new LanguageCodesISO639_2('Maltese', 'mlt');
		self::$Manchu = new LanguageCodesISO639_2('Manchu', 'mnc');
		self::$Manipuri = new LanguageCodesISO639_2('Manipuri', 'mni');
		self::$ManoboLanguages = new LanguageCodesISO639_2('Manobo languages', 'mno');
		self::$Mohawk = new LanguageCodesISO639_2('Mohawk', 'moh');
		self::$Mongolian = new LanguageCodesISO639_2('Mongolian', 'mon');
		self::$Mossi = new LanguageCodesISO639_2('Mossi', 'mos');
		self::$MultipleLanguages = new LanguageCodesISO639_2('Multiple languages', 'mul');
		self::$MundaLanguages = new LanguageCodesISO639_2('Munda languages', 'mun');
		self::$Creek = new LanguageCodesISO639_2('Creek', 'mus');
		self::$Mirandese = new LanguageCodesISO639_2('Mirandese', 'mwl');
		self::$Marwari = new LanguageCodesISO639_2('Marwari', 'mwr');
		self::$MayanLanguages = new LanguageCodesISO639_2('Mayan languages', 'myn');
		self::$Erzya = new LanguageCodesISO639_2('Erzya', 'myv');
		self::$NahuatlLanguages = new LanguageCodesISO639_2('Nahuatl languages', 'nah');
		self::$NorthAmericanIndianLanguages = new LanguageCodesISO639_2('North American Indian languages', 'nai');
		self::$Neapolitan = new LanguageCodesISO639_2('Neapolitan', 'nap');
		self::$Nauru = new LanguageCodesISO639_2('Nauru', 'nau');
		self::$Navajo = new LanguageCodesISO639_2('Navajo', 'nav');
		self::$Navaho = new LanguageCodesISO639_2('Navaho', 'nav');
		self::$SouthNdebele = new LanguageCodesISO639_2('South Ndebele', 'nbl');
		self::$NorthNdebele = new LanguageCodesISO639_2('North Ndebele', 'nde');
		self::$Ndonga = new LanguageCodesISO639_2('Ndonga', 'ndo');
		self::$LowGerman = new LanguageCodesISO639_2('Low German', 'nds');
		self::$LowSaxon = new LanguageCodesISO639_2('Low Saxon', 'nds');
		self::$Nepali = new LanguageCodesISO639_2('Nepali', 'nep');
		self::$NepalBhasa = new LanguageCodesISO639_2('Nepal Bhasa', '');
		self::$Newari = new LanguageCodesISO639_2('Newari', 'new');
		self::$Nias = new LanguageCodesISO639_2('Nias', 'nia');
		self::$NigerKordofanianLanguages = new LanguageCodesISO639_2('Niger Kordofanian languages', 'nic');
		self::$Niuean = new LanguageCodesISO639_2('Niuean', 'niu');
		self::$Dutch = new LanguageCodesISO639_2('Dutch', 'dut');
		self::$Flemish = new LanguageCodesISO639_2('Flemish', 'nld');
		self::$NynorskNorwegian = new LanguageCodesISO639_2('Nynorsk Norwegian', 'nno');
		self::$NorwegianNynorsk = new LanguageCodesISO639_2('Norwegian Nynorsk', 'nno');
		self::$BokmalNorwegian = new LanguageCodesISO639_2('Bokmal Norwegian', 'nob');
		self::$NorwegianBokmal = new LanguageCodesISO639_2('Norwegian Bokmal', 'nob');
		self::$Nogai = new LanguageCodesISO639_2('Nogai', 'nog');
		self::$OldNorse = new LanguageCodesISO639_2('Old Norse', 'non');
		self::$Norwegian = new LanguageCodesISO639_2('Norwegian', 'nor');
		self::$Nko = new LanguageCodesISO639_2('Nko', 'nqo');
		self::$Pedi = new LanguageCodesISO639_2('Pedi', 'nso');
		self::$Sepedi = new LanguageCodesISO639_2('Sepedi', 'nso');
		self::$NorthernSotho = new LanguageCodesISO639_2('Northern Sotho', 'nso');
		self::$NubianLanguages = new LanguageCodesISO639_2('Nubian languages', 'nub');
		self::$ClassicalNewari = new LanguageCodesISO639_2('Classical Newari', 'nwc');
		self::$OldNewari = new LanguageCodesISO639_2('Old Newari', 'nwc');
		self::$ClassicalNepalBhasa = new LanguageCodesISO639_2('Classical Nepal Bhasa', 'nwc');
		self::$Chichewa = new LanguageCodesISO639_2('Chichewa', 'nya');
		self::$Chewa = new LanguageCodesISO639_2('Chewa', 'nya');
		self::$Nyanja = new LanguageCodesISO639_2('Nyanja', 'nya');
		self::$Nyamwezi = new LanguageCodesISO639_2('Nyamwezi', 'nym');
		self::$Nyankole = new LanguageCodesISO639_2('Nyankole', 'nyn');
		self::$Nyoro = new LanguageCodesISO639_2('Nyoro', 'nyo');
		self::$Nzima = new LanguageCodesISO639_2('Nzima', 'nzi');
		self::$OccitanPost1500 = new LanguageCodesISO639_2('Occitan post 1500', 'oci');
		self::$Ojibwa = new LanguageCodesISO639_2('Ojibwa', 'oji');
		self::$Oriya = new LanguageCodesISO639_2('Oriya', 'ori');
		self::$Oromo = new LanguageCodesISO639_2('Oromo', 'orm');
		self::$Osage = new LanguageCodesISO639_2('Osage', 'osa');
		self::$Ossetian = new LanguageCodesISO639_2('Ossetian', 'oss');
		self::$Ossetic = new LanguageCodesISO639_2('Ossetic', 'oss');
		self::$TurkishOttoman = new LanguageCodesISO639_2('Turkish Ottoman', 'ota');
		self::$OtomianLanguages = new LanguageCodesISO639_2('Otomian languages', 'oto');
		self::$PapuanLanguages = new LanguageCodesISO639_2('Papuan languages', 'paa');
		self::$Pangasinan = new LanguageCodesISO639_2('Pangasinan', 'pag');
		self::$Pahlavi = new LanguageCodesISO639_2('Pahlavi', 'pal');
		self::$Pampanga = new LanguageCodesISO639_2('Pampanga', 'pam');
		self::$Kapampangan = new LanguageCodesISO639_2('Kapampangan', 'pam');
		self::$Panjabi = new LanguageCodesISO639_2('Panjabi', 'pan');
		self::$Punjabi = new LanguageCodesISO639_2('Punjabi', 'pan');
		self::$Papiamento = new LanguageCodesISO639_2('Papiamento', 'pap');
		self::$Palauan = new LanguageCodesISO639_2('Palauan', 'pau');
		self::$OldPersian = new LanguageCodesISO639_2('Old Persian', 'peo');
		self::$PhilippineLanguages = new LanguageCodesISO639_2('Philippine languages', 'phi');
		self::$Phoenician = new LanguageCodesISO639_2('Phoenician', 'phn');
		self::$Pali = new LanguageCodesISO639_2('Pali', 'pli');
		self::$Polish = new LanguageCodesISO639_2('Polish', 'pol');
		self::$Pohnpeian = new LanguageCodesISO639_2('Pohnpeian', 'pon');
		self::$Portuguese = new LanguageCodesISO639_2('Portuguese', 'por');
		self::$PrakritLanguages = new LanguageCodesISO639_2('Prakrit languages', 'pra');
		self::$OldProvencal = new LanguageCodesISO639_2('Old Provencal', 'pro');
		self::$OldOccitan = new LanguageCodesISO639_2('Old Occitan', 'pro');
		self::$Pushto = new LanguageCodesISO639_2('Pushto', 'pus');
		self::$Pashto = new LanguageCodesISO639_2('Pashto', 'pus');
		self::$Reserved = new LanguageCodesISO639_2('Reserved', 'qaa-qtz');
		self::$Quechua = new LanguageCodesISO639_2('Quechua', 'que');
		self::$Rajasthani = new LanguageCodesISO639_2('Rajasthani', 'raj');
		self::$Rapanui = new LanguageCodesISO639_2('Rapanui', 'rap');
		self::$Rarotongan = new LanguageCodesISO639_2('Rarotongan', 'rar');
		self::$CookIslandsMaori = new LanguageCodesISO639_2('Cook Islands Maori', 'rar');
		self::$RomanceLanguages = new LanguageCodesISO639_2('Romance languages', 'roa');
		self::$Romansh = new LanguageCodesISO639_2('Romansh', 'roh');
		self::$Romany = new LanguageCodesISO639_2('Romany', 'rom');
		self::$Romanian = new LanguageCodesISO639_2('Romanian', 'ron');
		self::$Moldavian = new LanguageCodesISO639_2('Moldavian', 'ron');
		self::$Moldovan = new LanguageCodesISO639_2('Moldovan', 'ron');
		self::$Rundi = new LanguageCodesISO639_2('Rundi', 'run');
		self::$Aromanian = new LanguageCodesISO639_2('Aromanian', 'rup');
		self::$Arumanian = new LanguageCodesISO639_2('Arumanian', 'rup');
		self::$MacedoRomanian = new LanguageCodesISO639_2('Macedo Romanian', 'rup');
		self::$Russian = new LanguageCodesISO639_2('Russian', 'rus');
		self::$Sandawe = new LanguageCodesISO639_2('Sandawe', 'sad');
		self::$Sango = new LanguageCodesISO639_2('Sango', 'sag');
		self::$Yakut = new LanguageCodesISO639_2('Yakut', 'sah');
		self::$SouthAmericanIndianLanguages = new LanguageCodesISO639_2('South American Indian languages', 'sai');
		self::$SalishanLanguages = new LanguageCodesISO639_2('Salishan languages', 'sal');
		self::$SamaritanAramaic = new LanguageCodesISO639_2('Samaritan Aramaic', 'sam');
		self::$Sanskrit = new LanguageCodesISO639_2('Sanskrit', 'san');
		self::$Sasak = new LanguageCodesISO639_2('Sasak', 'sas');
		self::$Santali = new LanguageCodesISO639_2('Santali', 'sat');
		self::$Sicilian = new LanguageCodesISO639_2('Sicilian', 'scn');
		self::$Scots = new LanguageCodesISO639_2('Scots', 'sco');
		self::$Selkup = new LanguageCodesISO639_2('Selkup', 'sel');
		self::$SemiticLanguages = new LanguageCodesISO639_2('Semitic languages', 'sem');
		self::$OldIrish = new LanguageCodesISO639_2('Old Irish', 'sga');
		self::$SignLanguages = new LanguageCodesISO639_2('Sign Languages', 'sgn');
		self::$Shan = new LanguageCodesISO639_2('Shan', 'shn');
		self::$Sidamo = new LanguageCodesISO639_2('Sidamo', 'sid');
		self::$Sinhala = new LanguageCodesISO639_2('Sinhala', 'sin');
		self::$Sinhalese = new LanguageCodesISO639_2('Sinhalese', 'sin');
		self::$SiouanLanguages = new LanguageCodesISO639_2('Siouan languages', 'sio');
		self::$SinoTibetanLanguages = new LanguageCodesISO639_2('Sino Tibetan languages', 'sit');
		self::$SlavicLanguages = new LanguageCodesISO639_2('Slavic languages', 'sla');
		self::$Slovak = new LanguageCodesISO639_2('Slovak', 'slo');
		self::$Slovenian = new LanguageCodesISO639_2('Slovenian', 'slv');
		self::$SouthernSami = new LanguageCodesISO639_2('Southern Sami', 'sma');
		self::$NorthernSami = new LanguageCodesISO639_2('Northern Sami', 'sme');
		self::$SamiLanguages = new LanguageCodesISO639_2('Sami languages', 'smi');
		self::$LuleSami = new LanguageCodesISO639_2('Lule Sami', 'smj');
		self::$InariSami = new LanguageCodesISO639_2('Inari Sami', 'smn');
		self::$Samoan = new LanguageCodesISO639_2('Samoan', 'smo');
		self::$SkoltSami = new LanguageCodesISO639_2('Skolt Sami', 'sms');
		self::$Shona = new LanguageCodesISO639_2('Shona', 'sna');
		self::$Sindhi = new LanguageCodesISO639_2('Sindhi', 'snd');
		self::$Soninke = new LanguageCodesISO639_2('Soninke', 'snk');
		self::$Sogdian = new LanguageCodesISO639_2('Sogdian', 'sog');
		self::$Somali = new LanguageCodesISO639_2('Somali', 'som');
		self::$SonghaiLanguages = new LanguageCodesISO639_2('Songhai languages', 'son');
		self::$Sotho = new LanguageCodesISO639_2('Sotho', 'sot');
		self::$Southern = new LanguageCodesISO639_2('Southern', 'sot');
		self::$Spanish = new LanguageCodesISO639_2('Spanish', 'spa');
		self::$Castilian = new LanguageCodesISO639_2('Castilian', 'spa');
		self::$Sardinian = new LanguageCodesISO639_2('Sardinian', 'srd');
		self::$SrananTongo = new LanguageCodesISO639_2('Sranan Tongo', 'srn');
		self::$Serbian = new LanguageCodesISO639_2('Serbian', 'srp');
		self::$Serer = new LanguageCodesISO639_2('Serer', 'srr');
		self::$NiloSaharanLanguages = new LanguageCodesISO639_2('Nilo Saharan languages', 'ssa');
		self::$Swati = new LanguageCodesISO639_2('Swati', 'ssw');
		self::$Sukuma = new LanguageCodesISO639_2('Sukuma', 'suk');
		self::$Sundanese = new LanguageCodesISO639_2('Sundanese', 'sun');
		self::$Susu = new LanguageCodesISO639_2('Susu', 'sus');
		self::$Sumerian = new LanguageCodesISO639_2('Sumerian', 'sux');
		self::$Swahili = new LanguageCodesISO639_2('Swahili', 'swa');
		self::$Swedish = new LanguageCodesISO639_2('Swedish', 'swe');
		self::$ClassicalSyriac = new LanguageCodesISO639_2('Classical Syriac', 'syc');
		self::$Syriac = new LanguageCodesISO639_2('Syriac', 'syr');
		self::$Tahitian = new LanguageCodesISO639_2('Tahitian', 'tah');
		self::$TaiLanguages = new LanguageCodesISO639_2('Tai languages', 'tai');
		self::$Tamil = new LanguageCodesISO639_2('Tamil', 'tam');
		self::$Tatar = new LanguageCodesISO639_2('Tatar', 'tat');
		self::$Telugu = new LanguageCodesISO639_2('Telugu', 'tel');
		self::$Timne = new LanguageCodesISO639_2('Timne', 'tem');
		self::$Tereno = new LanguageCodesISO639_2('Tereno', 'ter');
		self::$Tetum = new LanguageCodesISO639_2('Tetum', 'tet');
		self::$Tajik = new LanguageCodesISO639_2('Tajik', 'tgk');
		self::$Tagalog = new LanguageCodesISO639_2('Tagalog', 'tgl');
		self::$Thai = new LanguageCodesISO639_2('Thai', 'tha');
		self::$Tigre = new LanguageCodesISO639_2('Tigre', 'tig');
		self::$Tigrinya = new LanguageCodesISO639_2('Tigrinya', 'tir');
		self::$Tiv = new LanguageCodesISO639_2('Tiv', 'tiv');
		self::$Tokelau = new LanguageCodesISO639_2('Tokelau', 'tkl');
		self::$Klingon = new LanguageCodesISO639_2('Klingon', 'tlh');
		self::$TlhinganHol = new LanguageCodesISO639_2('TlhIngan Hol', 'tlh');
		self::$Tlingit = new LanguageCodesISO639_2('Tlingit', 'tli');
		self::$Tamashek = new LanguageCodesISO639_2('Tamashek', 'tmh');
		self::$TongaNyasa = new LanguageCodesISO639_2('Tonga Nyasa', 'tog');
		self::$TongaTongaIslands = new LanguageCodesISO639_2('Tonga Tonga Islands', 'ton');
		self::$TokPisin = new LanguageCodesISO639_2('Tok Pisin', 'tpi');
		self::$Tsimshian = new LanguageCodesISO639_2('Tsimshian', 'tsi');
		self::$Tswana = new LanguageCodesISO639_2('Tswana', 'tsn');
		self::$Tsonga = new LanguageCodesISO639_2('Tsonga', 'tso');
		self::$Turkmen = new LanguageCodesISO639_2('Turkmen', 'tuk');
		self::$Tumbuka = new LanguageCodesISO639_2('Tumbuka', 'tum');
		self::$TupiLanguages = new LanguageCodesISO639_2('Tupi languages', 'tup');
		self::$Turkish = new LanguageCodesISO639_2('Turkish', 'tur');
		self::$AltaicLanguages = new LanguageCodesISO639_2('Altaic languages', 'tut');
		self::$Tuvalu = new LanguageCodesISO639_2('Tuvalu', 'tvl');
		self::$Twi = new LanguageCodesISO639_2('Twi', 'twi');
		self::$Tuvinian = new LanguageCodesISO639_2('Tuvinian', 'tyv');
		self::$Udmurt = new LanguageCodesISO639_2('Udmurt', 'udm');
		self::$Ugaritic = new LanguageCodesISO639_2('Ugaritic', 'uga');
		self::$Uighur = new LanguageCodesISO639_2('Uighur', 'uig');
		self::$Uyghur = new LanguageCodesISO639_2('Uyghur', 'uig');
		self::$Ukrainian = new LanguageCodesISO639_2('Ukrainian', 'ukr');
		self::$Umbundu = new LanguageCodesISO639_2('Umbundu', 'umb');
		self::$Undetermined = new LanguageCodesISO639_2('Undetermined', 'und');
		self::$Urdu = new LanguageCodesISO639_2('Urdu', 'urd');
		self::$Uzbek = new LanguageCodesISO639_2('Uzbek', 'uzb');
		self::$Vai = new LanguageCodesISO639_2('Vai', 'vai');
		self::$Venda = new LanguageCodesISO639_2('Venda', 'ven');
		self::$Vietnamese = new LanguageCodesISO639_2('Vietnamese', 'vie');
		self::$Volapuk = new LanguageCodesISO639_2('Volapük', 'vol');
		self::$Votic = new LanguageCodesISO639_2('Votic', 'vot');
		self::$WakashanLanguages = new LanguageCodesISO639_2('Wakashan languages', 'wak');
		self::$Wolaitta = new LanguageCodesISO639_2('Wolaitta', 'wal');
		self::$Wolaytta = new LanguageCodesISO639_2('Wolaytta', 'wal');
		self::$Waray = new LanguageCodesISO639_2('Waray', 'war');
		self::$Washo = new LanguageCodesISO639_2('Washo', 'was');
		self::$SorbianLanguages = new LanguageCodesISO639_2('Sorbian languages', 'wen');
		self::$Walloon = new LanguageCodesISO639_2('Walloon', 'wln');
		self::$Wolof = new LanguageCodesISO639_2('Wolof', 'wol');
		self::$Kalmyk = new LanguageCodesISO639_2('Kalmyk', '');
		self::$Oirat = new LanguageCodesISO639_2('Oirat', 'xal');
		self::$Xhosa = new LanguageCodesISO639_2('Xhosa', 'xho');
		self::$Yao = new LanguageCodesISO639_2('Yao', 'yao');
		self::$Yapese = new LanguageCodesISO639_2('Yapese', 'yap');
		self::$Yiddish = new LanguageCodesISO639_2('Yiddish', 'yid');
		self::$Yoruba = new LanguageCodesISO639_2('Yoruba', 'yor');
		self::$YupikLanguages = new LanguageCodesISO639_2('Yupik languages', 'ypk');
		self::$Zapotec = new LanguageCodesISO639_2('Zapotec', 'zap');
		self::$Blissymbols = new LanguageCodesISO639_2('Blissymbols', 'zbl');
		self::$Blissymbolics = new LanguageCodesISO639_2('Blissymbolics', 'zbl');
		self::$Bliss = new LanguageCodesISO639_2('Bliss', 'zbl');
		self::$Zenaga = new LanguageCodesISO639_2('Zenaga', 'zen');
		self::$StandardMoroccanTamazight = new LanguageCodesISO639_2('Standard Moroccan Tamazight', 'zgh');
		self::$Zhuang = new LanguageCodesISO639_2('Zhuang', 'zha');
		self::$Chuang = new LanguageCodesISO639_2('Chuang', 'zha');
		self::$ZandeLanguages = new LanguageCodesISO639_2('Zande languages', 'znd');
		self::$Zulu = new LanguageCodesISO639_2('Zulu', 'zul');
		self::$Zuni = new LanguageCodesISO639_2('Zuni', 'zun');
		self::$NotApplicable = new LanguageCodesISO639_2('Not applicable', 'zxx');
		self::$Zaza = new LanguageCodesISO639_2('Zaza', 'zza');
		self::$Dimili = new LanguageCodesISO639_2('Dimili', 'zza');
		self::$Dimli = new LanguageCodesISO639_2('Dimli', 'zza');
		self::$Kirdki = new LanguageCodesISO639_2('Kirdki', 'zza');
		self::$Kirmanjki = new LanguageCodesISO639_2('Kirmanjki', 'zza');
		self::$Zazaki = new LanguageCodesISO639_2('Zazaki', 'zza');
	}
};
LanguageCodesISO639_2::Initialize();
?>