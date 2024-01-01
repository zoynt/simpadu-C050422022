<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Http\Requests\StoreSubjectRequestSubjectRequest;
use App\Models\Subject;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subjects = DB::table('subjects')
        ->when($request->input('title'), function ($query, $title) {
            return $query->where('title', 'like', '%' . $title . '%');
        })
        ->select('id', 'title','lecturer_id', 'semester', 'academic_year', 'sks', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
        ->orderBy('id', 'asc')
        ->paginate(10);
        return view('pages.subject.index', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(){
        return view('pages.subject.create');
    }

    public function store(StoreSubjectRequest $request)
    {
        Subject::create([
            'title'=> $request['title'],
            'lecturer_id'=> $request['lecturer_id'],
            'semester'=> $request['semester'],
            'academic_year'=> ($request['academic_year']),
            'sks'=> $request['sks'],
            'code'=> $request['code'],
            'description'=> $request['description']
        ]);
        
        return redirect(route('subject.index'))->with('success', 'New Subject Successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Subject $subject)
    {
        return view('pages.subject.edit')->with('subject', $subject);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $Subject)
    {
        $validate = $request->validated();
        $Subject->update($validate);
        return redirect()->route('subject.index')->with('success', 'Edit User Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subject.index')->with('success', 'Delete User Successfully');
    }
}
