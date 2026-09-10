<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria en linea</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-100 text-slate-900">

    <nav class="bg-slate-900 text-white shadow-lg">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <a href="{{ route('inicio') }}" class="text-xl font-bold">
                Libreria en Linea
            </a>

            <div class="flex gap-6">
                <a
                    href="{{ route('inicio') }}"
                    @class([
                        'font-bold text-yellow-400' => request()->routeIs('inicio'),
                        'text-white hover:text-yellow-300 transition' => !request()->routeIs('inicio'),
                    ])
                >
                    Inicio
                </a>

                <a
                    href="{{ route('catalogo') }}"
                    @class([
                        'font-bold text-yellow-400' => request()->routeIs('catalogo'),
                        'text-white hover:text-yellow-300 transition' => !request()->routeIs('catalogo'),
                    ])
                >
                    Catalogo
                </a>

                <a
                    href="{{ route('nosotros') }}"
                    @class([
                        'font-bold text-yellow-400' => request()->routeIs('nosotros'),
                        'text-white hover:text-yellow-300 transition' => !request()->routeIs('nosotros'),
                    ])
                >
                    Nosotros
                </a>
            </div>
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer class="mt-12 bg-slate-900 py-6 text-center text-sm text-white">
        <p>Libreria en Linea {{ date('Y') }}</p>
        <p>Todos los derechos reservados.</p>
    </footer>

</body>
</html>
