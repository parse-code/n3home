<?php

namespace App\Http\Controllers;

use App\Models\Spu;

class SpuController extends Controller
{
    public function create()
    {
        $this->authorize('create', Spu::class);
        return view('spu.create');
    }

    public function store()
    {
        $this->authorize('create', Spu::class);
        Spu::create([
            'name'       => request('name'),
            'company_id' => request()->user()->company_id,
        ]);
        return redirect(route('home'));
    }

    public function edit(Spu $spu)
    {
        $this->authorize('update', $spu);

        return view('spu.edit')->with(compact('spu'));
    }

    public function update(Spu $spu)
    {
        $this->authorize('update', $spu);

        $spu->update([
            'name' => request('name'),
        ]);

        return redirect(route('home'));
    }
}
