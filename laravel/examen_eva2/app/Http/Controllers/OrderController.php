<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function create() {
        $products = Product::all();
        $suppliers = Supplier::all();
        $employees = DB::table('employees')
                    ->where('department', '=', 'Compras')
                    ->get();
        return view('order.update', array('products' => $products, 'suppliers' => $suppliers, 'employees' => $employees));
    }

    public function update(Request $r) {
        $p = new Order();
        $p->product_id = $r->product_id;
        $p->supplier_id = $r->supplier_id;
        $p->employee_id = $r->employee_id;
        $p->amount = $r->amount;
        $p->price = $r->price;
        $p->comments = $r->comments;
        $p->save();
        return redirect()->route('order.update', ['order'=>$p]);
    }

    public function destroy($id) {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('order.status');
    }

    public function showForm(){
        $employees = Employee::all();
        $products = Product::all();
        return view('order.form', ['employees'=>$employees, 'products'=>$products]);
    }

    public function showResume(Request $r){
        $employee = Employee::find($r->employee_id);
        $product = Product::find($r->product);
        $amount = $r->cantidad;
        return view('order.resume', ['employee'=>$employee, 'product'=>$product, 'amount'=>$amount]);
    }

    public function showStatus() {
        $orders = Order::all();
        return view('order.status', ['orders'=>$orders]);
    }
}
