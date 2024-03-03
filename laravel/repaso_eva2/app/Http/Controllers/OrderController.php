<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; //importo el modelo
use App\Models\Employee; //importo el modelo
use App\Models\Supplier;

class OrderController extends Controller
{
    public function pide() {
        $employees = Employee::all();
        $products = Product::all();
        return view('order.form', array('employees' => $employees, 'products' => $products));
    }

    public function pedido(Request $r) {
        $employee = Employee::find($r->employee_id);
        $product = Product::find($r->product_id);
        $amount = $r->numero;
        return view('order.pedido', array('employee' => $employee, 'product' => $product, 'amount'=> $amount));
    }

}
