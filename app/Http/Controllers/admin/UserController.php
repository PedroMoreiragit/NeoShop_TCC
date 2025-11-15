<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Summary of showUsers
     * @return \Illuminate\Contracts\View\View
     */
    public function showUsers()
    {
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }

    /**
     * Summary of showCreateUsers
     * @return \Illuminate\Contracts\View\View
     */
    public function showCreateUsers()
    {
        $roles = Role::all();
        return view('dashboard.createUser', compact('roles'));
    }

    public function showUpdateUsers($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('dashboard.updateUser', compact('roles', 'user'));
    }

    /**
     * Summary of createUser
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createUser(Request $request)
    {
        $request->merge([
            'cpf' => $request->cpf ? preg_replace('/\D/', '', $request->cpf) : null
        ]);

        $user = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'phone' => 'nullable|string|max:45',
            'cpf' => 'nullable|digits:11|unique:users,cpf',
            'role_id' => 'required|exists:roles,id',
        ]);

        if ($user) {
            $user = User::create([
                ...$user,
                'password' => bcrypt($request->password)
            ]);
        }

        return redirect('users');
    }

    /**
     * Summary of updateUser
     * @param \Illuminate\Http\Request $request
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

         $request->merge([
        'cpf' => $request->cpf ? preg_replace('/\D/', '', $request->cpf) : null
    ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'phone' => 'nullable|string|max:45',
            'cpf' => 'nullable|digits:11|unique:users,cpf,' . $user->id,
            'role_id' => 'required|exists:roles,id',
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('users')->with('success', 'Usuário atualizado com sucesso!');
    }


    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user::destroy($id);
        return redirect('users');
    }



}
