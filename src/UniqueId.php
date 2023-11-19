<?php
namespace CoderOrbit\LaravelUniqueId;
use Illuminate\Support\Str;

class UniqueId {

    /**
     * set here unique number function
     * @parameter $modelName, $fieldName, $limiteNumber
     * @method private
     * 
     * @param object $model
     * @param string $field
     * @param number $characterNumber
     * 
     */
    static function uniqueId($model, $field, $characterNumber = null){
        // set here default number in 15
        $number = !empty($characterNumber) ? $characterNumber : 15;

        // create random number
        $unique = Str::random($number);
        
        // check here already number exits or not
        $check = $model::where($field, $unique)->count();

        // set condition in geter than 0
        if($check > 0 ){
            self::uniqueId($model, $field, $characterNumber);
        }

        return $unique;
    }

    /**
     * set here unique number function
     * @parameter $modelName, $fieldName, $limiteNumber
     * @method private
     * @param object $model
     * @param string $field
     * @param number $limitNumber
     */

    static function uniqueNumber($model, $field, $limitNumber = null){

        // set here default number in 10
        $limit = !empty($limitNumber) ? $limitNumber : 10;

        // check here max number more than 18
        $maxLimit = $limit > 18 ? 18 : $limit;

        // set random number
        $unique = random_int(100000, 9999999999);

        // get current time to converted seconds
        $time_start = microtime(true);
        // replace dot inside of number
        $uniqueNumber = str_replace(".","",$time_start.$unique);

        // set max number in a string
        $configLimitNumber = substr($uniqueNumber,0, $maxLimit);

        // check here already number exits or not
        $check = $model::where($field, $configLimitNumber)->count();

        // set condition in geter than 0
        if($check > 0 ){
            self::uniqueNumber($model, $field, $limitNumber);
        }
        return $configLimitNumber;
    }

}