<?php

class CartHelper{

    public function increment($quantity){
        return $quantity++;
    }

    public function decrement($quantity){
        if($quantity>1){
            return $quantity--;
        }
    }

}