<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    //
    public function index(Request $r){
        $endereco = Address::all();
        return $endereco;
    }

    public function findOne(Request $r) {
        $enderec = Address::find($r->id);
        $enderec['user'] = $enderec->user;
        return $enderec;
    }

    public function insert(Request $r){
        $rawData = $r->only(['address']);
        $endereco = Address::create($rawData);
        return $endereco;
    }
}
