<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){
        $storedItem = ['qty' => 0, 'unit_price' => $item->unit_price, 'promotion'=> $item->promotion, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['unit_price'] = $item->unit_price * $storedItem['qty'];
        $storedItem['promotion'] = $item->promotion * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        if($storedItem['item']['promotion'] == 0){
            $this->totalPrice += $item->unit_price;
        }else{
            $this->totalPrice += $item->promotion;
        }
    }

    public function add_more($item, $id, $quantity){
        $storedItem = ['qty' => 0, 'unit_price' => $item->unit_price, 'promotion'=> $item->promotion, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty'] = $storedItem['qty'] + $quantity;
        $storedItem['unit_price'] = $item->unit_price * $storedItem['qty'];
        $storedItem['promotion'] = $item->promotion * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty = $this->totalQty + $quantity;
        if($storedItem['item']['promotion'] == 0){
            $this->totalPrice += $item->unit_price * $quantity;
        }else{
            $this->totalPrice += $item->promotion * $quantity;
        }
    }

    public function removeOne($id){
        $this->items[$id]['qty']--;
        $this->totalQty--;
        if($this->items[$id]['item']['promotion'] == 0){
            $this->totalPrice -= $this->items[$id]['item']['unit_price'];
        }else{
            $this->totalPrice -= $this->items[$id]['item']['promotion'];
        }
        if($this->items[$id]['qty'] == 0){
            unset($this->items[$id]);
        }
    }
}
