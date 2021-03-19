@extends('layout')
        
        @section('content')
        <main class="content">
            <div class="cards">
            <!--Inicia tarjeta dinamica-->
                @forelse ($notas as $nota)
                <div class="card card-small">
                    <div class="card-body">
                        <h4>{{ $nota-> titulo}}</h4>

                        <p>
                           {!! $nota->contenido!!}
                        </p>

                    </div>

                    <footer class="card-footer">
                        <a href="{{ route('notas.edit', ['id' => $nota-> id]) }}" class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <form method="POST" action="{{ url("notas/{$nota->id}") }}">
                        @csrf
                        @method('DELETE')
                        <a class="action-link action-delete">
                        <button class="action-link"><i class="icon icon-trash"></i></button>
                        </a>
                    </form>
                    </footer>
                </div>
            @empty
                <p> No hay elementos disponibles <br/><a href="/agregar">Agregar una nota</a></p>
            @endforelse
            <!--Termina tarjeta dinamica-->
            </div>
        </main>
        @endsection
        