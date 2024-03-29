<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 11/12/20
 * Time: 6:13 PM
 */

namespace App\Constants\Dropdowns;
use App\Constants\Base;
use App\Constants\GeneralConstants;


class YesNoDropdown extends Base
{


    const NO = 0;
    const YES = 1;


    static $array = [
        self::NO => GeneralConstants::NO,
        self::YES => GeneralConstants::YES,
    ];
}