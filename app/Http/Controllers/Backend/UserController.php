<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Domain\Administration\Models\User;
use App\Domain\Administration\Services\UserService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Exception;

class UserController extends Controller
{
    private $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->service = new UserService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $users = $this->service->all();
        return view('backend.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        try {
            $user = $this->service->store($request->all());

            flash()->success(__('general.createSuccess', ['model' => 'User']));
            return redirect()->route('backend.user.edit', $user);
        } catch (Exception $e) {
            flash()->error(__('general.createFail', ['model' => 'User']));
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return Factory|View
     */
    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  User  $user
     * @return RedirectResponse
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'confirmed',
        ]);

        try {
            $this->service->set($user)->update($request->all());

            flash()->success(__('general.updateSuccess', ['model' => 'User']));
            return redirect()->back();
        } catch (Exception $e) {
            flash()->error($e->getMessage());
            flash()->error(__('general.updateFail', ['model' => 'User']));
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        try {
            $this->service->set($user)->destroy();

            flash()->success(__('general.deleteSuccess', ['model' => 'User']));
            return redirect()->route('backend.user.index');
        } catch (Exception $e) {
            flash()->error(__('general.deleteFail', ['model' => 'User']));
            return redirect()->back();
        }
    }
}
