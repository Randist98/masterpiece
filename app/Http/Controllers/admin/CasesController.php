<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    public function index(Request $request)
    {
        $cases = Cases::all();

        return view('adminDashboard.cases.casesTable', compact('cases'));
    }

    public function create()
    {
        return view('adminDashboard.cases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            // 'description' => 'required',
            // 'address' => 'required',
            // 'beneficiary' => 'required',
            // 'NoBeneficiary' => 'required',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $case = new Cases;
        $case->name = $request->name;
        $case->beneficiary = $request->Beneficiary;
        $case->NoBeneficiary = $request->NoBeneficiary;
        // $case->city = $request->city;
        $case->address = $request->address;
        $case->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assest\images', $imageName);
            $case->image = $imageName;
        }

        $case->save();

        return redirect()->route('casesTable.index')->with('success', 'Case created successfully.');
    }

    public function show($case)
    {
        // $case = Cases::find($case);
        // return view('singlePage.singlePage')->with('case', $case);
    }


    public function edit(string $id)
    {
        $case = Cases::findOrFail($id);
        return view('adminDashboard.cases.update', compact('case'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'name' => 'required',
            // 'Beneficiary' => 'required',
            // 'NoBeneficiary' => 'required',
            // 'address' => 'required',
            // 'description' => 'required',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $case = Cases::findOrFail($id);
        $case->name = $request->name;
        $case->beneficiary = $request->Beneficiary;
        $case->NoBeneficiary = $request->NoBeneficiary;
        // $case->city = $request->city;
        $case->address = $request->address;
        $case->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assest\images', $imageName);
            $case->image = $imageName;
        }

        $case->save();

        return redirect()->route('casesTable.index')->with('success', 'Case updated successfully.');
    }

    public function destroy(string $id)
    {
        $case = Cases::findOrFail($id);
        $case->delete();

        return redirect()->back()->with('success', 'The Case deleted successfully.');
    }
}
