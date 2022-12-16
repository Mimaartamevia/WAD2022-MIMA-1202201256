<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomsController extends Controller
{
    public function index ()
    {
        $showrooms = Showroom::orderBy('id')->get();
        return view('ListCar-Mima', compact ("showrooms"));
    }
    public function create()
    {
        return view('Add-Mima');
    }

    public function store(Request $request)
    {
        $imgName = $request->img_path->getClientOriginalName() 
                    . '-' . time(). '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);

        Showroom::create([ 
            'name' => $request -> name,
            'owner' => $request -> owner,
            'brand' => $request -> brand,
            'purchase_date' => $request -> purchase_date,
            'description' => $request -> description,
            'image' => $imgName, 
            'status' => $request -> status,
            'created_at' => $request -> created_at,
            'updated_at' => $request -> updated_at
        ]);

        return redirect ('/showroom');
    }
    
}
