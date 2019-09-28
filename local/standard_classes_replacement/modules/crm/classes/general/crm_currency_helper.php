<?php
if (!CModule::IncludeModule('currency'))
{
	return false;
}

class CCrmCurrencyHelper
{
	public static function PrepareListItems()
	{		
		if (!CModule::IncludeModule('currency'))
		{
			return array();
		}

		$by='sort';
		$order='asc';
		$ary = array();
		$dbCurrencies = CCurrency::GetList($by, $order);
		while ($arCurrency = $dbCurrencies->Fetch())
		{
			$arCurrency['FULL_NAME'] = (string)$arCurrency['FULL_NAME'];
			$ary[$arCurrency['CURRENCY']] = ($arCurrency['FULL_NAME'] !== ''
				? $arCurrency['FULL_NAME']
				: $arCurrency['CURRENCY']
			);
		}
		
		//wcomm {
				
		if(\local\CurrencyFromUser::NeedChangeCurrency())
		{
			$strCurrencyID = \local\CurrencyFromUser::GetCurrencyID();
			$ary2 = Array();
			foreach($ary as $k => $v)
			{
				if($k === $strCurrencyID)
				{
					$ary2[$k] = $v;
				}
			}
			$ary = $ary2;
		}
		
		// } wcomm

		return $ary;
		
	}
}
