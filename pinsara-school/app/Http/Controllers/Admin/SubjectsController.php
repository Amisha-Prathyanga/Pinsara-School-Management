<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Subject;
use App\Models\Grade;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $gradess = Grade::all();
        $sbjc = Subject::count();
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $subjects = Subject::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('videoLink', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('grade_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $subjects = Subject::latest()->paginate($perPage);
        }

        return view('admin.subjects.index', compact('subjects', 'sbjc', 'gradess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $grades = Grade::pluck('grade', 'id');
        return view('admin.subjects.create', compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();

        
 	    $fileName = time().$request->file("image")->getClientOriginalName();
        $path = $request->file("image")->storeAs('images', $fileName, 'public'); 
        $requestData["image"] = '/storage/'.$path;
        
        Subject::create($requestData);

        return redirect('admin/subjects')->with('flash_message', 'Subject added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        
        return view('admin.subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);

        $grades = Grade::pluck('grade', 'id');
        return view('admin.subjects.edit', compact('subject', 'grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();

        $fileName = time().$request->file("image")->getClientOriginalName();
        $path = $request->file("image")->storeAs('images', $fileName, 'public'); 
        $requestData["image"] = '/storage/'.$path;
        
        $subject = Subject::findOrFail($id);
        $subject->update($requestData);

        return redirect('admin/subjects')->with('flash_message', 'Subject updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Subject::destroy($id);

        return redirect('admin/subjects')->with('flash_message', 'Subject deleted!');
    }


}
