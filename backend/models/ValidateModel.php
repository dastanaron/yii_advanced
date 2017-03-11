<?php
namespace backend\models;

use Yii;
use common\models\User;

class ValidateModel {
    
    public static function DateToTimestamp($value) {
        if (empty($value)) {
            return null;
        }
        else {
            
            if (self::IsTimestamp($value)) {
                return $value;
            }
            
            $ditetimearray = explode(' ', $value);

            $datearray = explode('.', $ditetimearray[0]);
            $timearray = explode(':', $ditetimearray[1]);
            
            if ($timearray[0]=='__' || $timearray[1]=='__' || $timearray[2]=='__' || empty($timearray[0]) || empty($timearray[1]) || empty($timearray[2])) {
                $timearray = ['0', '0', '0'];
            }

            return mktime ($timearray[0], $timearray[1], $timearray[2], $datearray[1], $datearray[0], $datearray[2]);
        }
    }
    
    public static function IsTimestamp($value) {
        
        if (preg_match('#\d+#U', $value)) {
            return true;
        }
        else {
            return false;
        }
        
    }
    
}

