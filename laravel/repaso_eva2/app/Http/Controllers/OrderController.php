<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; //importo el modelo
use App\Models\Employee; //importo el modelo

class OrderController extends Controller
{
    public function pide() {
        $employees = Employee::all();
        $products = Product::all();
        return view('order.form', array('employees' => $employees, 'products' => $products));
    }

    public function pedido(Request $empl, Request $prod) {
        return view('order.pedido', '???');
    }

}
