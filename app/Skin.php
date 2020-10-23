<?php

namespace App;

use Gloudemans\Shoppingcart\Contracts\Buyable;

use Illuminate\Database\Eloquent\Model;

class Skin extends Model implements Buyable
{
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }
    public function getBuyableDescription($options = null)
    {
        return $this->nome;
    }
    public function getBuyablePrice($options = null)
    {
        return $this->valor;
    }
    public function getBuyableWeight($options = null)
    {
        return 0.0;
    }
}
