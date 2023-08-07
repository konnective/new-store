<?php

namespace App\Http\Livewire;

use App\Models\Trolly;
use Livewire\Component;

class Shoppingcart extends Component
{

    public $cartitems;
    public $cartcount;
    public $total = 0;
    public function render()
    {
        $this->cartitems = Trolly::with('item')->where(['user_id' => auth()->user()->id])->get();
        $this->cartcount = Trolly::count();
        $this->total = 0;
        foreach ($this->cartitems as $pro) {
            $this->total += $pro->item->price *  $pro->quantity;
        }
        //dd($this->cartcount);
        return view('livewire.shoppingcart', ['cartitems' => $this->cartitems]);
    }

    //for increase button
    public function inc($id)
    {
        $item = Trolly::whereId($id)->first();
        $item->quantity += 1;
        $item->update();
        // dd($item->id);
        session()->flash('success', 'increased');
    }

    public function dec($id)
    {
        $item = Trolly::whereId($id)->first();
        $item->quantity -= 1;
        $item->update();
        // dd($item->id);
        session()->flash('success', 'decreased');
    }

    public function removecart($id)
    {
        $item = Trolly::whereId($id)->delete();
    }
}


//'cartcount' => $this->cartcount