<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;

class PurchaseController extends Controller
{
    public function __invoke(Request $request)
    {
        $response = [ 'message' => "OK" ];
        $response_code = 200;

        $compra = new Compra();
        $compra->produto_id = $request->input('produto_id');
        $compra->preco = $request->input('preco');
        $compra->save();

        // Retornando o json
        return response()->json($response, $response_code);
    }
}
