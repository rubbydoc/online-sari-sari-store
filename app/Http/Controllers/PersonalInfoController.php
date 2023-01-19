<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;

use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function index()
    {
        return PersonalInfo::all();
    }

    public function store(Request $request)
    {
        return PersonalInfo::create([
            'user_id' => $request->user_id,
            'address' => $request->address,
            'contact_number' => $request->contact_number,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,

        ]);
    }



    public function update(Request $request, $id)
    {
        return PersonalInfo::find($id)->update(
            [
                'user_id' => $request->user_id,
                'address' => $request->address,
                'contact_number' => $request->contact_number,
                'birth_date' => $request->birth_date,
                'gender' => $request->gender,
            ]
        );
    }

    public function destroy(PersonalInfo $personalInfo)
    {
        $personalInfo->delete();
    }

    public function show(PersonalInfo $personalInfo)
    {
        return $personalInfo;
    }
}
