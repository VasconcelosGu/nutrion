<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductImport implements ToCollection
{
    use Importable;

    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            if ($key === 0)
                continue;

            Product::create([
                Product::nome => $row['0'],
            ]);
        }
    }
}