@extends('layouts.layout_dashboard')

@section('title', 'Adicionar Usuário')

@section('content')
    <div class="max-w-3xl mx-auto bg-dark_blue_gray rounded-2xl shadow-lg p-8 border border-gray-700">

        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-base_color">
                Criar Novo Usuário
            </h1>

            <a href="users"
                class="bg-base_color text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue_purple transition duration-200 flex items-center gap-2">
                <i class="ri-arrow-go-back-line text-lg"></i>
                Voltar
            </a>
        </div>

        <form action="{{ route('create-user') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium mb-2 text-light">Nome Completo</label>
                <input type="text" id="name" name="name"
                    class="w-full bg-blue_gray border border-gray-600 rounded-xl p-3 text-white placeholder-gray-400
                    focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    placeholder="Ex: Pedro Moreira" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium mb-2 text-light">E-mail</label>
                <input type="email" id="email" name="email"
                    class="w-full bg-blue_gray border border-gray-600 rounded-xl p-3 text-white placeholder-gray-400
                    focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    placeholder="Ex: pedro@email.com" required>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium mb-2 text-light">Senha</label>
                <input type="password" id="password" name="password"
                    class="w-full bg-blue_gray border border-gray-600 rounded-xl p-3 text-white placeholder-gray-400
                    focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    placeholder="Digite uma senha segura" required>
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm font-medium mb-2 text-light">Telefone (opcional)</label>
                <input type="text" id="phone" name="phone"
                    class="w-full bg-blue_gray border border-gray-600 rounded-xl p-3 text-white placeholder-gray-400
                    focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    placeholder="Ex: (11) 91234-5678">
            </div>

            <!-- CPF -->
            <div>
                <label for="cpf" class="block text-sm font-medium mb-2 text-light">CPF (opcional e sem pontos)</label>
                <input type="text" id="cpf" name="cpf"
                    class="w-full bg-blue_gray border border-gray-600 rounded-xl p-3 text-white placeholder-gray-400
                    focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    placeholder="Somente números">
            </div>

            <!-- Role -->
            <div>
                <label for="role_id" class="block text-sm font-medium mb-2 text-light">Função do Usuário</label>
                <select id="role_id" name="role_id"
                    class="w-full bg-blue_gray border border-gray-600 rounded-xl p-3 text-white placeholder-gray-400
                    focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200" required>
                    <option value="">Selecione uma função</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit -->
            <div class="flex justify-end pt-6">
                <button type="submit"
                    class="bg-base_color text-white font-bold px-6 py-3 rounded-xl hover:bg-blue_purple transform hover:scale-105 transition duration-200">
                    Criar Usuário
                </button>
            </div>
        </form>
    </div>

    <script>
  document.getElementById('cpf').addEventListener('input', function(e) {
    e.target.value = e.target.value
      .replace(/\D/g, '')
      .slice(0, 11)
      .replace(/(\d{3})(\d)/, '$1.$2')
      .replace(/(\d{3})(\d)/, '$1.$2')
      .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
  });

  document.getElementById('phone').addEventListener('input', function(e) {
    e.target.value = e.target.value
      .replace(/\D/g, '')
      .slice(0, 11)
      .replace(/^(\d{2})(\d)/, '($1) $2')
      .replace(/(\d{5})(\d{4})$/, '$1-$2');
  });
</script>
@endsection


