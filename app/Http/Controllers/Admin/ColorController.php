<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorFormRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('admin.color.index', compact('colors'));
    }

    public function create()
    {
        return view('admin.color.create');
    }

    public function store(ColorFormRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);

        $name = $request->name;
        $code = $request->code;
        $status = $request->status == true ? '1' : '0';

        $color = new Color;
        $color->name = $name;
        $color->status = $status;
        $color->code = $code;

        $color->save();

        return redirect('admin/colors')->with('success', "Rang qo'shildi");
    }

    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('admin.color.edit', compact('color'));
    }

    public function update(ColorFormRequest $request, $color_id)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);

        $name = $request->name;
        $code = $request->code;
        $status = $request->status == true ? '1' : '0';

        $color = Color::findOrFail($color_id);
        $color->name = $name;
        $color->status = $status;
        $color->code = $code;

        $color->save();

        return redirect('admin/colors')->with('success', "Rang o'zgartirildi");
    }

    public function destroy($color_id)
    {
        $color = Color::findOrFail($color_id);
        $color->delete();

        return redirect('admin/colors')->with('success', "Rang o'chirildi");
    }
    
}
