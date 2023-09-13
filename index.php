<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructora SAYA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#FF8000] to-[#804000] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Constructora SAYA</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Estamos comprometidos contigo, tu bienestar económico es nuestra preocupación</p>
            </div>  
        <form method="post">
        <label>Longitud del muro</label>
        <input type="phone" name="ancho" placeholder="Ancho (m)">
        <input type="phone" name="alto" placeholder="Alto (m)">
        <select name="tladrillo">Tipo de ladrillo
            <option value="kingkong">King Kong</option>
            <option value="modular">Modular</option>
        </select>
            <input type="radio" name="tmuro" value="soga">Soga</option>
            <input type="radio" name="tmuro" value="tizon">Tizon</option>
        <label>Espesor Juntas</label>
            <input type="phone" step="any" name="jhorizontal" placeholder="Horizontal (m)">
            <input type="phone" step="any" name="jvertical" placeholder="Vertical (m)">
        <label>Costo ladrillo</label>
        <input type="price" name="costo">
        <button class="px-2 rounded-full border-2 border-orange-950">Calcular</button>
        <?php include 'calcular.php'; ?>
        </form>
    </div> 
</body>
</html>