<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Domain\Administration\Models\Administrator;
use App\Domain\Administration\Services\AdministratorService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Exception;

class AdministratorController extends Controller
{
    private $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->service = new AdministratorService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $administrators = $this->service->all();
        return view('backend.administrator.index', compact('administrators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('backend.administrator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|unique:administrators,email',
            'password' => 'required|confirmed',
        ]);

        try {
            $administrator = $this->service->store($request->all());

            flash()->success(__('general.createSuccess', ['model' => 'Administrator']));
            return redirect()->route('backend.administrator.edit', $administrator);
        } catch (Exception $e) {
            flash()->error(__('general.createFail', ['model' => 'Administrator']));
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Administrator  $administrator
     * @return Factory|View
     */
    public function edit(Administrator $administrator)
    {
        return view('backend.administrator.edit', compact('administrator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Administrator  $administrator
     * @return RedirectResponse
     */
    public function update(Request $request, Administrator $administrator)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'confirmed',
        ]);

        try {
            $this->service->set($administrator)->update($request->all());

            flash()->success(__('general.updateSuccess', ['model' => 'Administrator']));
            return redirect()->back();
        } catch (Exception $e) {
            flash()->error(__('general.updateFail', ['model' => 'Administrator']));
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Administrator  $administrator
     * @return RedirectResponse
     */
    public function destroy(Administrator $administrator)
    {
        try {
            $this->service->set($administrator)->destroy();

            flash()->success(__('general.deleteSuccess', ['model' => 'Administrator']));
            return redirect()->route('backend.administrator.index');
        } catch (Exception $e) {
            flash()->error(__('general.deleteFail', ['model' => 'Administrator']));
            return redirect()->back();
        }
    }
}
