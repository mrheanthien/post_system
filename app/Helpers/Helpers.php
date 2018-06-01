<?php
	
namespace App\Helpers;
use DB;
class Helpers{
	/*
	* function get language
	*/
	public static function lang(){
		return \App::getLocale();
	}


	/*
	* function getProvince
	*/
	public static function getProvince(){
		$province = DB::connection("mysql2")->select('select '.(Helpers::lang() == 'en' ? 'name_en' : 'name_kh').' AS province, name_kh , code from provinces where code != 25');
		return $province;
	}



    /*
    * function getDistrict
    */
    public static function getDistrict($pro){
        $province = DB::connection("mysql2")->select('select '.(Helpers::lang() == 'en' ? 'name_en' : 'name_kh').' AS district, province_code ,name_kh, code from districts where province_code='.$pro);
        return $province;
    }

    /*
	* function getCommune
	*/
    public static function getCommune($dis){
        $province =  DB::connection("mysql2")->select('select '.(Helpers::lang() == 'en' ? 'name_en' : 'name_kh').' AS commune, district_code ,name_kh, code from communes where district_code='.$dis);
        return $province;
    }



    /*
    * function getVillag
    */
	public static function getVillage($com){
		$province =DB::connection("mysql2")->select('select '.(Helpers::lang() == 'en' ? 'name_en' : 'name_kh').' AS village, commune_code ,name_kh,code from villages where commune_code='.$com);
		return $province;
	}


}
	
	