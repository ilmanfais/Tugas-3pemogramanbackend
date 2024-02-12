<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;

class MahasantriController extends Controller
{
    public function dataMahasantri()
    {
        $mhs1 = 'Ilman';
        $asal1 = 'Riau';
        $mhs2 = 'Rio';
        $asal2 = 'Jaksel';
        $mhs3 = 'Aldi';
        $asal3 = 'Babel';
        $mhs4 = 'Arya';
        $asal4 = 'Lombok';
        $mhs5 = 'Nanto';
        $asal5 = 'Indramayu';
        return view(
            'data_mahasantri',
            compact('mhs1', 'mhs2', 'mhs3', 'mhs4', 'mhs5', 'asal1', 'asal2', 'asal3', 'asal4','asal5')
        );
    }
}
