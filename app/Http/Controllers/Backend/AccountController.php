<?php

namespace App\Http\Controllers\Backend;

use App\Domain\Administration\Services\AdministratorService;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AccountController extends Controller
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
     * @return Factory|View
     */
    public function profile()
    {
        $user = Auth::guard('backend')->user();
        return view('backend.account.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'confirmed',
        ]);

        try {
            $user = Auth::guard('backend')->user();
            $this->service->set($user)->update($request->all());

            flash()->success(__('general.updateSuccess', ['model' => 'Profile']));
            return redirect()->back();
        } catch (Exception $e) {
            flash()->error(__('general.updateFail', ['model' => 'Profile']));
            return redirect()->back();
        }
    }
}
