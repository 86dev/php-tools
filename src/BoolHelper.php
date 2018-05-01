<?php
namespace PHPTools;

/**
 * A set of functions to help with boolean handling
 *
 * @version 1.0
 * @author 86Dev
 */
abstract class BoolHelper
{
	/**
	 * Convert a string to boolean
	 * @param string $value
	 * @return boolean
	 */
	public static function to_bool($value)
	{
		if (is_bool($value)) return $value;
		return self::is_true_string($value);
	}

	/**
	 * Get a value to boolean
	 * @param mixed $value Valeur à vérifier
	 * @return bool
	 */
	public static function is_ok($value)
	{
		return filter_var($value, FILTER_VALIDATE_BOOLEAN);
	}

	/**
	 * Compare the string to true/yes values in different languages
	 * @param string $string
	 * @return bool
	 */
	public static function is_true_string($string)
	{
		return in_array(strtolower($string), ['1', 'ae', 'ano', 'asli', 'bai', 'benetako', 'bəli', 'bẹẹni', 'da', 'dhabta ah', 'e', 'ea sebele', 'echt', 'ee', 'eh', 'eny', 'evet', 'ezigbo', 'fíor', 'gerçek', 'gidi', 'go iawn', 'ha', 'haa', 'halisi', 'haqiqiy', 'ie', 'igen', 'inde', 'iva', 'iya nih', 'ja', 'jah', 'joo', 'já', 'jā', 'ndiyo', 'nekilnojamasis', 'nuhun', 'nyata', 'oo', 'oui', 'po', 'pravi', 'prawdziwy', 'real', 'reali', 'reyèl', 'reāls', 'sebenar', 'si', 'sim', 'skutečný', 'skutočný', 'sì', 'sí', 'taip', 'tak', 'tena', 'thực', 'tinuod nga', 'true', 'tá', 'tõeline', 'tūturu', 'valódi', 'vero', 'vrai', 'vâng', 'weniweni', 'werklike', 'wi', 'ya', 'yebo', 'yes', 'Áno', 'Ναί', 'πραγματικός', 'Да', 'бодит', 'вистински', 'воқеӣ', 'да', 'ды', 'иә', 'прави', 'реален', 'реальний', 'реальный', 'рэальны', 'так', 'тийм ээ', 'шын', 'ҳа', 'այո', 'իրական', 'אמיתי', 'כן', 'פאַקטיש', 'اصلی', 'بله', 'جی ہاں', 'حقيقي', 'نعم فعلا', 'واقعی', 'असली', 'रिअल', 'वास्तविक', 'हाँ', 'हो', 'होय', 'বাস্তব', 'হাঁ', 'ਅਸਲੀ', 'ਹਾਂ', 'વાસ્તવિક', 'હા', 'ஆம்', 'உண்மையான', 'అవును', 'నిజమైన', 'ನಿಜವಾದ', 'ಹೌದು', 'അതെ', 'യഥാർത്ഥ', 'ඔව්', 'සැබෑ', 'จริง', 'ใช่', 'ທີ່ແທ້ຈິງ', 'ແມ່ນແລ້ວ', 'စစ်မှန်သော', 'ဟုတ်ကဲ့', 'დიახ', 'რეალური', 'បាទ', 'ពិតប្រាកដ', 'はい', 'リアル', '实', '實', '是', '예', '현실'], true);
	}

	/**
	 * Compare the string to false/no values in different languages
	 * @param string $string
	 * @return bool
	 */
	public static function is_false_string($string)
	{
		return empty($string) || in_array(strtolower($string), ['0', 'amanga', 'ayi', 'babu', 'bakak', 'been ah', 'bohata', 'br', 'bréagach', 'cha', 'che', 'dili', 'dim', 'diso', 'ee e', 'ei', 'eke', 'fals', 'falsch', 'false', 'falsk', 'falso', 'faltsua', 'falz', 'faux', 'fałszywy', 'ffug', 'fo', 'geen', 'hamis', 'hapana', 'hindi', 'huwad', 'ingen', 'jo', 'không', 'klaidinga', 'lažan', 'lažno', 'le', 'maya', 'napačen', 'ne', 'nee', 'nei', 'nein', 'nej', 'nem', 'nepravdivé', 'nepravdivý', 'nie', 'no', 'non', 'noto\'g\'ri', 'nr', 'nu', 'nē', 'onwaar', 'ora', 'pa gen okenn', 'palsu', 'rangt', 'rara', 'sai', 'salah', 'teka', 'teu', 'tidak', 'tsy misy', 'uimh', 'uongo', 'vale', 'vals', 'viltus', 'väärä', 'yanlış', 'yo\'q', 'yok hayır', 'yox', 'zabodza', 'št', 'žiadny', 'ƙarya', 'ψευδής', 'όχι', 'Не', 'бр', 'жалған', 'жоқ', 'лажно', 'ложный', 'не', 'немає', 'нет', 'неточно', 'нодуруст', 'няма', 'помилковий', 'фалшив', 'фальшывы', 'худал', 'Үгүй', 'կեղծ', 'ոչ', 'לא', 'שֶׁקֶר', 'خاطئة', 'غلط', 'لا', 'نادرست', 'نه', 'نہیں', 'असत्य', 'खोटे', 'गलत', 'नहीं', 'नाही', 'না', 'মিথ্যা', 'ਝੂਠ', 'ਨਹੀਂ', 'ખોટા', 'ના', 'இல்லை', 'தவறான', 'ఏ', 'తప్పుడు', 'ಇಲ್ಲ', 'ಸುಳ್ಳು', 'ഇല്ല', 'തെറ്റായ', 'අසත්යය', 'නැත', 'เท็จ', 'ไม่', 'ບໍ່ຖືກຕ້ອງ', 'မမှန်သော', 'အဘယ်သူမျှမ', 'არა', 'ყალბი', 'ទេ', 'មិនពិត', 'ụgha', '假', '偽', '沒有', '没有', '그릇된', '아니'], true);
	}
}