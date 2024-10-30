<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form class="py-20 h-screen bg-gray-300 px-2" action="/buscarUsuario" method="POST">
                        @csrf
                        <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
                            <div class="md:flex">
                                <div class="w-full p-3">
                                    <div class="relative">
                                        <i class="absolute fa fa-search text-gray-400 top-5 left-4"></i>
                                        <input type="text"
                                            class="bg-white h-14 w-full px-12 rounded-lg focus:outline-none hover:cursor-pointer"
                                            name="textInput">
                                        <span class="absolute top-4 right-5 border-l pl-4"><i
                                                class="fa fa-microphone text-gray-500 hover:text-green-500 hover:cursor-pointer"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    @if(session('usuarios') && count(session('usuarios')) > 0)
                    <div  class="mt-5">
                        <h2>Usuários encontrados:</h2>
                    <ul>
                        @foreach(session('usuarios') as $usuario)
                            <li>{{ $usuario->name }}</li>
                        @endforeach
                    </ul>
                    </div>

                    @elseif(session('usuarios') && count(session('usuarios')) == 0)
                        <h2>Nenhum usuário encontrado</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
