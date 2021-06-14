<?php

namespace App\Exports;

use App\pdp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class pdpExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pdp::all();
    }
    public function map($expdp):array
    {
        return [
            $expdp->nama,
            $expdp->usia,
            $expdp->kelamin,
            $expdp->alamat,
            $expdp->tgl_konfirmasi,
            $expdp->status,
            $expdp->keterangan,
        ];
    }
    public function headings(): array
    {
        return [
            'NAMA',
            'USIA',
            'JENIS KELAMIN',
            'ALAMAT',
            'TANGGAL KONFIRMASI',
            'STATUS',
            'KETERANGAN',
        ];
    }
}
