<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Каталог;
use App\Http\Requests\CreateКаталогRequest;
use App\Http\Requests\UpdateКаталогRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class КаталогController extends Controller {

	/**
	 * Display a listing of �������
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $������� = Каталог::all();

		return view('admin.�������.index', compact('�������'));
	}

	/**
	 * Show the form for creating a new �������
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
        $showhide = Каталог::$showhide;

	    return view('admin.�������.create', compact("showhide"));
	}

	/**
	 * Store a newly created ������� in storage.
	 *
     * @param CreateКаталогRequest|Request $request
	 */
	public function store(CreateКаталогRequest $request)
	{
	    $request = $this->saveFiles($request);
		Каталог::create($request->all());

		return redirect()->route(config('quickadmin.route').'.�������.index');
	}

	/**
	 * Show the form for editing the specified �������.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$������� = Каталог::find($id);
	    
	    
        $showhide = Каталог::$showhide;

		return view('admin.�������.edit', compact('�������', "showhide"));
	}

	/**
	 * Update the specified ������� in storage.
     * @param UpdateКаталогRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateКаталогRequest $request)
	{
		$������� = Каталог::findOrFail($id);

        $request = $this->saveFiles($request);

		$�������->update($request->all());

		return redirect()->route(config('quickadmin.route').'.�������.index');
	}

	/**
	 * Remove the specified ������� from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Каталог::destroy($id);

		return redirect()->route(config('quickadmin.route').'.�������.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Каталог::destroy($toDelete);
        } else {
            Каталог::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.�������.index');
    }

}
