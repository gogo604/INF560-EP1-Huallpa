<x-layout>

    <section class="mx-auto max-w-7xl px-6 py-12">

        <div class="mb-10">
            <h1 class="text-4xl font-bold">
                Catalogo
            </h1>

            <p class="mt-2 text-slate-600">
                Explora todos los libros disponibles en nuestra librería.
            </p>
        </div>


        @forelse ($libros as $libro)

            @if ($loop->first)
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @endif

                <article
                    class="overflow-hidden rounded-xl bg-white shadow-md transition hover:-translate-y-1 hover:shadow-xl"
                >

                    <!-- Portada -->
                    <div
                        class="h-52 bg-gradient-to-br {{ $libro['portada'] }}"
                    ></div>


                    <div class="p-5">

                        <!-- Numero y categoria -->
                        <div class="mb-3 flex items-center justify-between">

                            <span class="text-sm text-slate-400">
                                #{{ $loop->iteration }}
                            </span>

                            <span
                                class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700"
                            >
                                {{ $libro['categoria'] }}
                            </span>

                        </div>


                        <!-- Título -->
                        <h2 class="text-xl font-bold">
                            {{ $libro['titulo'] }}
                        </h2>


                        <!-- Autor -->
                        <p class="mt-2 text-slate-600">
                            {{ $libro['autor'] }}
                        </p>


                        <!-- Precio -->
                        <p class="mt-4 text-lg font-bold text-slate-900">
                            Bs {{ number_format($libro['precio'], 2, ',', '.') }}
                        </p>


                        <!-- Boton -->
                        <a
                            href="{{ route('libro.detalle', $libro['id']) }}"
                            class="mt-4 block rounded-lg bg-slate-900 px-4 py-2 text-center font-semibold text-white transition hover:bg-slate-700"
                        >
                            Ver detalle
                        </a>

                    </div>

                </article>

            @if ($loop->last)
                </div>
            @endif

        @empty

            <div class="rounded-xl bg-white p-10 text-center shadow">
                <p class="text-lg text-slate-600">
                    No hay libros disponibles.
                </p>
            </div>

        @endforelse

    </section>

</x-layout>
