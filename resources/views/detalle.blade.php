<x-layout>

    <section class="mx-auto max-w-5xl px-6 py-12">

        @php
            $libro = collect($libros)->firstWhere('id', $id);
        @endphp

        @if ($libro)

            <div class="overflow-hidden rounded-2xl bg-white shadow-lg">

                <div class="grid md:grid-cols-2">

                    <!-- Portada -->
                    <div
                        class="min-h-96 bg-gradient-to-br {{ $libro['portada'] }}"
                    ></div>

                    <!-- Información -->
                    <div class="p-8">

                        <span class="rounded-full bg-slate-100 px-3 py-1 text-sm font-semibold text-slate-700">
                            {{ $libro['categoria'] }}
                        </span>

                        <h1 class="mt-5 text-4xl font-bold">
                            {{ $libro['titulo'] }}
                        </h1>

                        <p class="mt-3 text-lg text-slate-600">
                            {{ $libro['autor'] }}
                        </p>

                        <div class="mt-6 space-y-3">

                            <p>
                                <strong>Año:</strong>
                                {{ $libro['anio'] }}
                            </p>

                            <p>
                                <strong>Sinopsis:</strong>
                                {{ $libro['sinopsis'] }}
                            </p>

                            <p class="text-2xl font-bold">
                                Bs {{ number_format($libro['precio'], 2, ',', '.') }}
                            </p>

                            <p>
                                <span class="font-semibold">Stock:</span>

                                <span
                                    @class([
                                        'ml-2 rounded-full px-3 py-1 text-sm font-semibold',
                                        'bg-green-100 text-green-700' => $libro['stock'] > 0,
                                        'bg-red-100 text-red-700' => $libro['stock'] == 0,
                                    ])
                                >
                                    @if ($libro['stock'] > 0)
                                        Disponible
                                    @else
                                        Agotado
                                    @endif
                                </span>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        @else

            <div class="rounded-xl bg-white p-10 text-center shadow">

                <h1 class="text-3xl font-bold">
                    Libro no encontrado
                </h1>

            </div>

        @endif

    </section>

</x-layout>
