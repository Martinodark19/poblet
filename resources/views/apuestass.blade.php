<body>
    <h1>si ves esto funciono el boton</h1>

    <div class="flex justify-center">
        <form action="{{ route('3DD') }}" method="POST">
            @csrf <!-- Agrega el token CSRF para protección -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                Apuesta 3 dólares
            </button>
        </form>
    </div>
    
    <br>
    <br>
    <div class="flex justify-center">
        <a href="{{ route('6D') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
            Apuesta 6 dolares
        </a>
    </div>
    <BR>
    <BR>
        <div class="flex justify-center">
            <a href="{{ route('9D') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                Apuesta 9 dolares
            </a>
        </div>
</body>