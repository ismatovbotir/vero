<?php

namespace App\Imports;

use App\Models\Mark;
use App\Models\Transaction;
use App\Models\Product;
//use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MarkImport implements ToCollection, WithHeadingRow
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        $trans = Transaction::create();
        $art='';
        foreach ($rows as $row) {
            //dd($row);
            if ($art!=$row['artikul']){
                $articul = Product::firstOrCreate(
                    ['id' => $row["artikul"]],
                    ['name' => $row["naimenovaniia"],'gtin' => $row["strix_kod"]]
                );
                $art=$articul->id;
            }
            
            Mark::insertOrIgnore([
                [
                   'product_id' => $row['artikul'],
                   'sn' => $row['seriia_nomer'],
                   'transaction_id' => $trans->id
                ]
            ]);
                       
        }

        
    }
}
