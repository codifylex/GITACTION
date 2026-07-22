<?php

namespace App\Services;

use App\Models\Product;

class BarcodeService
{
    public function generateEAN13(): string
    {
        do {

            $code = '789' . random_int(100000000, 999999999);

            $code = substr($code, 0, 12);

            $code .= $this->calculateDigit($code);


        } while (
            Product::where('barcode', $code)->exists()
        );


        return $code;
    }


    private function calculateDigit(string $code): int
    {
        $sum = 0;


        for ($i = 0; $i < 12; $i++) {

            $number = intval($code[$i]);


            $sum += ($i % 2 == 0)
                ? $number
                : $number * 3;
        }


        return (10 - ($sum % 10)) % 10;
    }
}