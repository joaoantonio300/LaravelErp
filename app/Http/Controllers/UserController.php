<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\DTOs\UserDTO;
use App\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('usuarios.create');
    }

    public function store(StoreUserRequest $request)
    {
        $dto = UserDTO::fromArray($request->validated());
        $this->userService->create($dto);
        return redirect()->route('usuarios.index')
            ->with('success', 'Usuário criado com sucesso!');
    }

    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,{$usuario->id}",
        ]);

        $usuario->update($request->only('name', 'email'));

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