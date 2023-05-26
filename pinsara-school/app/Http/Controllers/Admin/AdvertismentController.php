<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Advertisment;
use Illuminate\Http\Request;

class AdvertismentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $ac = Advertisment::count();
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $advertisment = Advertisment::where('ad_ID', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('popImage', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $advertisment = Advertisment::latest()->paginate($perPage);
        }

        return view('admin.advertisment.index', compact('advertisment', 'ac'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.advertisment.create');
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

        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public'); 
        $requestData["image"] = '/storage/'.$path;

        $fileName = time().$request->file('popImage')->getClientOriginalName();
        $path = $request->file('popImage')->storeAs('images', $fileName, 'public'); 
        $requestData["popImage"] = '/storage/'.$path;
        
        Advertisment::create($requestData);

        return redirect('admin/advertisment')->with('flash_message', 'Advertisment added!');
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
        $advertisment = Advertisment::findOrFail($id);

        return view('admin.advertisment.show', compact('advertisment'));
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
        $advertisment = Advertisment::findOrFail($id);


        return view('admin.advertisment.edit', compact('advertisment'));
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

        
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public'); 
        $requestData["image"] = '/storage/'.$path;

        
        $fileName = time().$request->file('popImage')->getClientOriginalName();
        $path = $request->file('popImage')->storeAs('images', $fileName, 'public'); 
        $requestData["popImage"] = '/storage/'.$path;
        
        $advertisment = Advertisment::findOrFail($id);
        $advertisment->update($requestData);

        return redirect('admin/advertisment')->with('flash_message', 'Advertisment updated!');
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
        Advertisment::destroy($id);

        return redirect('admin/advertisment')->with('flash_message', 'Advertisment deleted!');
    }
}
