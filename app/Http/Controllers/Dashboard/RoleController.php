<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\RolesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index(RolesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.roles.index');
    }


    public function create()
    {
        return view('dashboard.roles.create', [
            'permissions' => Permission::all()
        ]);
    }


    public function store(RoleRequest $request)
    {
        $validator = $request->validated();
        $role = Role::create(['name' => $validator['name']]);
        if ($validator['permission']) {
            $role->syncPermissions($validator['permission']);
        }
        return redirect(route('roles.index'))->with('Added Successfully');
    }


    public function edit(Role $role)
    {
        return view('dashboard.roles.edit', [
            'role' => $role,
            'permission' => Permission::all(),
            'rolePermissions' => DB::table("role_has_permissions")->where("role_has_permissions.role_id", $role->id)
                ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
                ->all(),
        ]);
    }


    public function update(RoleRequest $request, Role $role)
    {
        $validator = $request->validated();

        $role->name = $validator['name'];
        $role->save();

        $permissions = $validator['permission'] ?? [];
        unset($validator['permission']);

        $role->syncPermissions($permissions);
        $role->update($validator);

        return redirect(route('roles.index'))->with('Updated Successfully');
    }


    public function destroy(Role $role)
    {
        $role->delete();
        return 'Done';
    }

}
