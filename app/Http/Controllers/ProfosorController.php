<?php

namespace App\Http\Controllers;

use App\Degree;
use App\Profesorimage;
use App\Profosor;
use Illuminate\Http\Request;

class ProfosorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx()
    {
        $profosor = Profosor::all();
        $profosor_image = Profesorimage::all();
        return view('dash.profosor')
            ->with(compact('profosor'))
            ->with(compact('profosor_image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createe()
    {
        return view('dash.profosor_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storee(Request $request)
    {
        $profosor = new Profosor();

        $file = $request->file('file');
        $namee = time() . "." . $file->getClientOriginalExtension();
        $size = $file->getClientSize();
        $type = $file->getClientMimeType();
        $file->move('profosor/photos', $namee);

        $name = $request->name;
        $family = $request->family;
        $degree = $request->degree;
        $location_birth = $request->location_birth;
        $birthday = $request->birthday;
        $address = $request->address;
        $mobile = $request->mobile;
        $email = $request->email;
        $contact = $request->contact;

        $profosor->name = $name;
        $profosor->family = $family;
        $profosor->degree = $degree;

        $profosor->save();

        $profosor->profosorimages()->create([
            'name' => "{$namee}",
            'size' => "{$size}",
            'type' => "{$type}"
        ]);

        $profosor->degrees()->create([
            'name' => "{$name}",
            'family' => "{$family}",
            'degree' => "{$degree}",
            'location_birth' => "{$location_birth}",
            'birthday' => "{$birthday}",
            'address' => "{$address}",
            'mobile' => "{$mobile}",
            'email' => "{$email}",
            'contact' => "{$contact}"
        ]);

        return back();

    }

    public function delete($id)
    {
        $new = Profosor::find($id);
        $new->delete();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profosor $profosor
     * @return \Illuminate\Http\Response
     */
    public function showw(Profosor $profosor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profosor $profosor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $profosor = Profosor::find($id);

        $degree=$profosor->degrees()->get();
        $profesorimage = $profosor->profosorimages()->get();


        return view('dash.edit_profosor')
            ->with(compact('profosor'))
            ->with(compact('profesorimage'))
            ->with(compact('degree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Profosor $profosor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profosor = Profosor::find($id);
        $file = $request->file('file');
        $profosor->name = $request->name;
        $profosor->family = $request->family;
        $profosor->degree = $request->degree;
        $profosor->save();

//        $name = $request->name;
//        $family = $request->family;
//        $degree = $request->degree;
//        $location_birth = $request->location_birth;
//        $birthday = $request->birthday;
//        $address = $request->address;
//        $mobile = $request->mobile;
//        $email = $request->email;
//        $contact = $request->contact;

//        $profosor->degrees()->update([
//            'name' => "{$name}",
//            'family' => "{$family}",
//            'degree' => "{$degree}",
//            'location_birth' => "{$location_birth}",
//            'birthday' => "{$birthday}",
//            'address' => "{$address}",
//            'mobile' => "{$mobile}",
//            'email' => "{$email}",
//            'contact' => "{$contact}"
//        ]);
        if ($file != null) {
            $namee = time() . "." . $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $type = $file->getClientMimeType();
            $file->move('profosor/photos', $namee);
            $profosor->profosorimages()->update([
                'name' => "{$namee}",
                'size' => "{$size}",
                'type' => "{$type}"
            ]);
        }
        return redirect('dashboard/profosor');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profosor $profosor
     * @return \Illuminate\Http\Response
     */
    public function destroyy(Profosor $profosor)
    {
        //
    }
}
