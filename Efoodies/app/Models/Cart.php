<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->harga, 'item' => $item, 'nama' => $item->nama_makanan, 'slug_food' => $item->slug_food, 'image' => $item->foto_makanan ];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->harga * $storedItem['qty'];
        $storedItem['nama'] = $item->nama_makanan;
        $storedItem['image'] = $item->foto_makanan;
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->harga ;
    }

    public function reduceByOne($id)
    {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['harga'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['harga'];
        
        if ($this->items[$id]['qty'] <= 0 ){
            unset($this->items[$id]);
        }
    }
    public function increaseByOne($id)
    {
        $this->items[$id]['qty']++;
        $this->items[$id]['price'] += $this->items[$id]['item']['harga'];
        $this->totalQty++;
        $this->totalPrice += $this->items[$id]['item']['harga'];
        
    }
    public function removeItem($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
        
    }
}