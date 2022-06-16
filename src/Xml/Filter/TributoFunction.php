<?php
/**
 * Created by PhpStorm.
 * User: Soporte
 * Date: 11/10/2018
<<<<<<< HEAD
 * Time: 16:40.
=======
 * Time: 16:40
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
 */

namespace Greenter\Xml\Filter;

<<<<<<< HEAD
use Greenter\Model\Sale\SaleDetail;

/**
 * Class TributoFunction.
 *
=======
/**
 * Class TributoFunction
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
 * @internal
 */
class TributoFunction
{
<<<<<<< HEAD
    private static $codigoTributos = [
=======
    private static $tributos = [
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
        '1000' => ['VAT', 'IGV'],
        '1016' => ['VAT', 'IVAP'],
        '2000' => ['EXC', 'ISC'],
        '9995' => ['FRE', 'EXP'],
        '9996' => ['FRE', 'GRA'],
        '9997' => ['VAT', 'EXO'],
        '9998' => ['FRE', 'INA'],
        '9999' => ['OTH', 'OTROS'],
    ];

<<<<<<< HEAD
    public static function getByTributo($code)
    {
        if (isset(self::$codigoTributos[$code])) {
            $values = self::$codigoTributos[$code];

=======
    public static function getByTributo(?string $code)
    {
        if (isset(self::$tributos[$code])) {
            $values = self::$tributos[$code];
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
            return [
              'id' => $code,
              'code' => $values[0],
              'name' => $values[1],
            ];
        }

        return null;
    }

    public static function getByAfectacion($afectacion)
    {
        $code = self::getCode($afectacion);

        return self::getByTributo($code);
    }

<<<<<<< HEAD
    /**
     * @param SaleDetail[] $details
     *
     * @return bool
     */
    public static function hasIvap(array $details)
    {
        foreach ($details as $detail) {
            if ($detail->getTipAfeIgv() === '17') {
                return true;
            }
        }

        return false;
    }

    private static function getCode($afectacion)
    {
        $value = intval($afectacion);

        if ($value === 10) {
            return '1000';
        }
        if ($value === 17) {
            return '1016';
        }
        if ($value === 20) {
            return '9997';
        }
        if ($value === 30) {
            return '9998';
        }
        if ($value === 40) {
            return '9995';
        }

        return '9996';
    }
}
=======
    private static function getCode($afectacion): string
    {
        $value = (int)$afectacion;

        switch ($value) {
            case 10: return '1000';
            case 17: return '1016';
            case 20: return '9997';
            case 30: return '9998';
            case 40: return '9995';
            default: return '9996';
        }
    }
}
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
