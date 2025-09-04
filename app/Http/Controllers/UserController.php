<?php

namespace App\Http\Controllers;

use App\DTOs\UserDTO;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct(private UserService $userService)
    {
    }

    public function index(Request $request)
    {
        $query = User::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', "%{$request->name}%");
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', "%{$request->email}%");
        }

        $usuarios = $query->latest()->paginate(10)->withQueryString();

        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $roles = \Spatie\Permission\Models\Role::all();
        return view('usuarios.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $dto = UserDTO::fromArray($request->validated());
        $user = $this->userService->create($dto);

        if ($request->filled('roles')) {
            $user->assignRole($request->roles);
        }

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuário criado com sucesso!');
    }

    public function edit(User $usuario)
    {
        $roles = Role::all();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }


    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,{$usuario->id}",
            'roles' => 'array',
        ]);

        $usuario->update($request->only('name', 'email'));

        if ($request->filled('roles')) {
            $usuario->syncRoles($request->roles);
        } else {
            $usuario->syncRoles([]);
        }

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuário excluído com sucesso!');
    }
}
