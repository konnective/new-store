<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Item;

class ItemController extends Controller
{

    //to show all items
    public function index()
    {
        return view('listings.index', [

            'items' => Item::latest()->filter(request(['search']))->paginate(5), // there was get() here before paginate
        ]);
    }
    // to show single item
    public function show(Item $item)
    {
        return view('listings.show', [
            'item' => $item
        ]);
    }

    //create form
    public function create()
    {
        return view('listings.create', []);
    }

    //store listing data
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'title' => 'required',
            // 'email'=> ['required', Rule::unique('items','email')],  this is for fields you want unique
            'price' => 'required',
            'stock' => 'required',
            'img' => 'required',
            'description' => 'required',
        ]);

        Item::create($formFields);



        return redirect('/manage')->with('message', 'Item created successfully');
    }

    //show edit form
    public function edit(Item $item)
    {
        // dd($item);
        return view('listings.edit', ['item' => $item]);
    }

    //update prodcut controller
    public function update(Request $request, Item $item)
    {

        $formFields = $request->validate([
            'title' => 'required',
            // 'email'=> ['required', Rule::unique('items','email')],  this is for fields you want unique
            'price' => 'required',
            'stock' => 'required',
            'img' => 'required',
            'description' => 'required',
        ]);

        $item->update($formFields);
        // dd($formFields);



        return back()->with('message', 'Item edited successfully');
    }

    //delete Item

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('/')->with('message', 'Product deleted successfully');
    }

    public function resumes()
    {
        return view('listings.resume', [

            'items' => Item::latest()->filter(request(['search']))->paginate(5), // there was get() here before paginate
        ]);
    }

    public function manage()
    {
        return view('listings.manage', [

            'items' => Item::all(), // there was get() here before paginate
        ]);
    }
}