<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Skin;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $req)
    {
        $skinadd = Skin::find($req->id);

        $uuid = (string) Uuid::uuid4();
        Cart::add(['id' => $uuid, 'name' => $skinadd->nome, 'qty' => 1, 'price' => $skinadd->valor, 'weight' => 0, 'options' => []]);
        return back()->with('succes', "$skinadd->nome adicionado com sucesso!");
    }
    public function cart()
    {
        return view('site.cart-checkout');
    }
    public function cartstore(){
        Cart::store('username');
    }
    public function paymentPicPay(){
        dd(Cart::content());

    }
    public function paymentTransfer(){

        return view('site.payment');

    }


    public function removeitem(Request $req)
    {
        $rowId = $req->rowId;
        Cart::remove($rowId);
        return back();
    }
}
