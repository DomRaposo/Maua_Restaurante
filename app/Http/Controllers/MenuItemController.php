<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuItemService;

class MenuItemController extends Controller
{
    protected $service;

    public function __construct(MenuItemService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->list();
        return view('menu.index', compact('items'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $this->service->create($request->all());
        return redirect()->route('menu.index')->with('success', 'Item added to menu.');
    }

    public function edit($id)
    {
        $item = $this->service->find($id);
        return view('menu.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->service->update($id, $request->all());
        return redirect()->route('menu.index')->with('success', 'Item updated.');
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return redirect()->route('menu.index')->with('success', 'Item removed.');
    }
}
