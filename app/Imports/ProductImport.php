<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Termwind\Components\Dd;

class ProductImport implements ToCollection
{
    use Importable;

    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            if ($key < 2)
                continue;

            Product::create([
                Product::nome => trim(preg_replace("/\d/", '', $row['0'])),
                Product::cal => $row['1'],
                Product::prot => $row['2'],
                Product::gord => $row['3'],
                Product::carbs => $row['4'],
            ]);
        }
    }
}
