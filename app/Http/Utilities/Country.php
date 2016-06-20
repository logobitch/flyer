<?php
namespace App\Http\Utilities;

class Country
{
	protected static $country = array(
		'AE' => '阿联酋(UNITED EMIRATES)',
		'AF' => '阿富汗(AFGHANISTAN)  ',
		'AL' => '阿尔巴尼亚(ALBANIA)  ',
		'AM' => '亚美尼亚(ARMENIA)  ',
		'AO' => '安哥拉(ANGOLA)',
		'AR' => '阿根廷(ARGENTINA)  ',
		'AT' => '奥地利(AUSTRIA)  ',
		'AU' => '澳大利亚(AUSTRALIA)  ',
		'AZ' => '阿塞拜疆(AZERBAIJAN(REPUBLIC)',

		'BD' => '孟加拉(BANGLADESH)',
		'BE' => '比利时(BELGIUM)',
		'BF' => '布基纳法索(BURKINA FASO)',
		'BG' => '保加利亚(BULGARIA)',
		'BH' => '巴林(BAHREIN)',
		'BI' => '布隆迪(BURUNDI)',
		'BJ' => '贝宁(BENIN)',
		'BL' => '巴勒斯坦',
		'BN' => '文莱(BRUNEI DARUSSALAM)',
		'BO' => '玻利维亚(BOLIVIA)',
		'BR' => '巴西(BRAZIL)',
		'BW' => '博茨瓦纳(BOTSWANA)',
		'BY' => '白俄罗斯(BYELORUSSIA)',

		'CA' => '加拿大(CANADA) ',
		'CF' => '中非(CENTRAL AFRICA)  ',
		'CG' => '刚果(CONGO)',
		'CH' => '瑞士(SWITZERLAND)  ',
		'CL' => '智利(CHILE) ',
		'CM' => '喀麦隆(CAMEROON)  ',
		'CN' => '中国(CHINA) ',
		'CO' => '哥伦比亚(COLOMBIA)',
		'CR' => '哥斯达黎加(COSTA RICA)',
		'CS' => '捷克(CZECH REPUBIC)',
		'CU' => '古巴(CUBA)',
		'CY' => '塞浦路斯(CYPRUS)',
		'CN' => '中国(CHINA)',
		'DE' => '德 国(GERMANY)  ',
		'DK' => '丹麦(DENMARK)',
		'DO' => '多米尼加共和国(DOMINICAN REPUBLIC)',
		'DZ' => '阿尔及利亚(ALGERIA)',
	);
	public static function all()
	{
		return static::$country;
	}
}