<?php

namespace Greenter\Xml\Filter;

/**
 * Class FormatFilter.
 * @internal
 */
class FormatFilter
{
<<<<<<< HEAD
    public function number($number, $decimals = 2)
=======
    public function number($number, $decimals = 2): ?string
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
    {
        return number_format($number, $decimals, '.', '');
    }

<<<<<<< HEAD
    public function numberLimit($number, $decimals)
    {
        $nroDecimals = strlen(substr(strrchr($number, '.'), 1));

        return $nroDecimals > $decimals ? $this->number($number, $decimals) : $number;
=======
    public function numberLimit($number, $decimals): ?string
    {
        $nroDecimals = $this->getDecimalsLenght($number);

        return $nroDecimals > $decimals ? $this->number($number, $decimals) : (string)$number;
    }

    private function getDecimalsLenght($number): int
    {
        $lasPosition = strrchr((string)$number, '.');
        if ($lasPosition === false) {
            return 0;
        }

        return strlen(substr($lasPosition, 1));
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
    }
}
