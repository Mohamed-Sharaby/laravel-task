<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('dashboard.users.index');
    }


    public function create()
    {
        return view('dashboard.users.create',[
            'roles' => Role::get()->pluck('name', 'id')
        ]);
    }


    public function store(UserRequest $request)
    {
        $validator = $request->validated();
        $roles = $validator['roles'] ?? [];
        unset($validator['roles']);
        $user = User::create($validator);
        $user->syncRoles($roles);
        return redirect(route('users.index'))->with('success', 'User Added Successfully');
    }


    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user,
            'roles' => Role::pluck('name', 'id')->toArray()
        ]);
    }


    public function update(UserRequest $request, User $user)
    {
        $validator = $request->validated();
        $roles = $validator['roles'] ?? [];
        unset($validator['roles']);
        $user->syncRoles($roles);
        $user->update($validator);
        return redirect(route('users.index'))->with('success', 'Updated Successfully');
    }


    public function destroy(User $user)
    {
        if (auth()->user()->id == $user->id) {
            return redirect(route('users.index'))->with('error', 'Sorry .. You Can\'t delete your Account');
        }

        $user->delete();
        return 'Done';
    }

}
