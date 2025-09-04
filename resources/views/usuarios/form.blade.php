<div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $usuario->name ?? '') }}"
        required>
</div>

<div class="mb-3">
    <label for="roles" class="form-label">Perfis</label>
    <select name="roles[]" id="roles" class="form-select" multiple>
        @foreach($roles as $role)
        <option value="{{ $role->name }}" {{ $usuario->roles->contains('name', $role->name) ? 'selected' : '' }}>
            {{ $role->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $usuario->email ?? '') }}"
        required>
</div>

<div class="mb-3">
    <label for="password" class="form-label">Senha</label>
    <input type="password" name="password" id="password" class="form-control is-invalid">
</div>