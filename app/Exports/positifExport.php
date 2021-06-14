<?php

namespace App\Exports;

use App\positif;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class positifExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return positif::all();
    }
    public function map($expositif):array
    {
        return [
            $expositif->nama,
            $expositif->usia,
            $expositif->kelamin,
            $expositif->alamat,
            $expositif->tgl_konfirmasi,
            $expositif->status,
            $expositif->keterangan,
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
