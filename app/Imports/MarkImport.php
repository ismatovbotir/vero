<?php

namespace App\Imports;

use App\Models\Mark;
use App\Models\Transaction;
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
        foreach ($rows as $row) {
            
            Mark::create([
                   'product_id' => $row['artikul'],
                   'sn' => $row['sn'],
                   'transaction_id' => $trans->id
            ]);
                       
        }
    }
}
