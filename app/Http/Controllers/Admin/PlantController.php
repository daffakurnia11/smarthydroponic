<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plant.index', [
            'title'     => 'Hydroponic Plant Types',
            'plants'    => Plant::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plant.create', [
            'title'     => 'Add New Plant'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'name.required'         => 'Jenis tanaman harus diisi!',
            'nursery_time.required' => 'Lama di persemaian harus diisi!',
            'leaves.required'       => 'Jumlah helai daun harus diisi!',
            'planing_time.required' => 'Masa tanam harus diisi!',
            'image.required'        => 'Gambar tanaman harus diisi',
            'image.mimes'           => 'Gambar tanaman harus menggunakan format: jpg, png, jpeg',
            'image.max'             => 'Gambar tanaman tidak boleh melebihi 2MB'
        ];

        $validated = Validator::make($request->all(), [
            'name'          => 'required',
            'nursery_time'  => 'required',
            'leaves'        => 'required',
            'planing_time'  => 'required',
            'image'         => 'required|mimes:jpg,png,jpeg|max:2048',
        ], $message)->validated();

        if ($request->hasFile('image')) {
            $imageFile = 'Gambar_' . $validated['name'] . '.' . $request->image->extension();
            $validated['image'] = $imageFile;
            $request->image->move(public_path('files/plants'), $imageFile);

            Plant::create($validated);

            return redirect('/admin/plant')->with('message', 'Jenis tanaman berhasil ditambahkan');
        } else {
            return back()->with('message', 'Gambar tanaman harus diupload!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        return view('admin.plant.edit', [
            'title'     => 'Add New Plant',
            'plant'     => $plant
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $message = [
            'name.required'         => 'Jenis tanaman harus diisi!',
            'nursery_time.required' => 'Lama di persemaian harus diisi!',
            'leaves.required'       => 'Jumlah helai daun harus diisi!',
            'planing_time.required' => 'Masa tanam harus diisi!',
            'image.mimes'           => 'Gambar tanaman harus menggunakan format: jpg, png, jpeg',
            'image.max'             => 'Gambar tanaman tidak boleh melebihi 2MB'
        ];

        $validated = Validator::make($request->all(), [
            'name'          => 'required',
            'nursery_time'  => 'required',
            'leaves'        => 'required',
            'planing_time'  => 'required',
            'image'         => 'mimes:jpg,png,jpeg|max:2048',
        ], $message)->validated();

        if ($request->hasFile('image')) {
            unlink(public_path('files/plants/' . $plant->image));
            $imageFile = 'Gambar_' . $validated['name'] . '.' . $request->image->extension();
            $validated['image'] = $imageFile;
            $request->image->move(public_path('files/plants'), $imageFile);
        }
        $plant->update($validated);

        return redirect('/admin/plant')->with('message', 'Jenis tanaman berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        unlink(public_path('files/plants/' . $plant->image));

        $plant->delete();

        return redirect('/admin/plant')->with('message', 'Jenis tanaman berhasil dihapus');
    }
}
