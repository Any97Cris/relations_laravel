<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index(Request $r){
        $invoice = Invoice::all();
        return $invoice;
    }

    public function findOne(Request $r){
        $invoice = Invoice::find($r->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }

    public function insert(Request $r){
        $dados = $r->only(['description', 'valor','address_id','user_id']);
        $invoice = Invoice::create($dados);
        return $invoice;
    }
}
