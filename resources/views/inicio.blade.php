<x-layout>

    <!-- Hero -->
    <section class="bg-slate-900 px-6 py-20 text-center text-white">
        <div class="mx-auto max-w-4xl">

            <h1 class="text-4xl font-bold md:text-6xl">
                Libreria en Linea
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-lg text-slate-300">
                Descubre libros para aprender, imaginar y disfrutar.
                Encuentra tu proxima lectura en nuestra coleccion.
            </p>

            <a
                href="{{ route('catalogo') }}"
                class="mt-8 inline-block rounded-lg bg-yellow-400 px-6 py-3 font-bold text-slate-900 transition hover:bg-yellow-300"
            >
                Ver catálogo
            </a>

        </div>
    </section>


    <!-- Libros destacados -->
    <section class="mx-auto max-w-7xl px-6 py-12">

        <div class="mb-8">
            <h2 class="text-3xl font-bold">
                Libros destacados
            </h2>

            <p class="mt-2 text-slate-600">
                Una selección especial de nuestra librería.
            </p>
        </div>


        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($libros as $libro)

                @if ($libro['destacado'] === true)

                    <article
                        class="overflow-hidden rounded-xl bg-white shadow-md transition hover:-translate-y-1 hover:shadow-xl"
                    >

                        <div
                            class="h-48 bg-gradient-to-br {{ $libro['portada'] }}"
                        ></div>

                        <div class="p-5">

                            <h3 class="text-xl font-bold">
                                {{ $libro['titulo'] }}
                            </h3>

                            <p class="mt-2 text-slate-600">
                                {{ $libro['autor'] }}
                            </p>

                        </div>

                    </article>

                @endif

            @endforeach

        </div>

    </section>

</x-layout>
