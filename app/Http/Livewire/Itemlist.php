<?php

namespace App\Http\Livewire;

use App\Models\Item;
use App\Models\Trolly;
use Livewire\Component;


class Itemlist extends Component
{
    public function render()

    {
        $items = Item::get();
        return view('livewire.itemlist', ['items' => $items]);
    }

    public function addToCart($id)
    {
        if (auth()->user()) {
            //add to cart
            $data = [
                'user_id' => auth()->user()->id,
                'item_id' => $id
            ];
            Trolly::updateOrCreate($data);
            session()->flash('success', 'added');
        } else {
            return redirect('/user/login');
        }
    }
}
//1542    2225