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
            <p class="mt-2 text-lg leading-8 text-gray-600">Innovación en construcción, calidad en cada obra.</p>
        </div>  
        <form method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="relative flex flex-col gap-6">
                <div class="grid grid-cols-2 items-center"> 
                    <label class="text-sm font-semibold leading-6 text-gray-900">Longitud del muro:</label>
                    <div class="inline-flex gap-2">
                        <input type="phone" name="widthW" placeholder="Ancho (m)" class="block w-1/2 rounded-md border-0 px-3 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <input type="phone" name="heightW" placeholder="Alto (m)" class="block w-1/2 rounded-md border-0 px-3 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>    
                <div class="grid grid-cols-2 items-center">
                    <label class="text-sm font-semibold leading-6 text-gray-900">Tipo de ladrillo:</label>
                    <select name="bricksT" class="block w-full rounded-md border-0 bg-transparent bg-none px-3 py-2 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <option value="kingkong">King Kong</option>
                        <option value="modular">Modular</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 items-center"> 
                    <label class="text-sm font-semibold leading-6 text-gray-900">Tipo de muro:</label>
                    <div class="inline-flex gap-4">    
                        <input type="radio" name="wallT" value="soga">Soga</option>
                        <input type="radio" name="wallT" value="tizon">Tizon</option>
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center">     
                    <label class="text-sm font-semibold leading-6 text-gray-900">Espesor juntas:</label>
                    <div class="inline-flex gap-2">
                        <input type="phone" step="any" name="horizontalG" placeholder="Horizontal (m)" class="block w-1/2 rounded-md border-0 px-3 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <input type="phone" step="any" name="verticalG" placeholder="Vertical (m)" class="block w-1/2 rounded-md border-0 px-3 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center">    
                    <label class="text-sm font-semibold leading-6 text-gray-900">Costo ladrillo</label>
                    <input type="price" name="costBrick" placeholder="10000" class="block w-full rounded-md border-0 px-3 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                <div class="grid grid-cols-1 place-items-center mt-8">      
                    <button class="w-1/4 px-2 rounded-full border-2 border-orange-950">Calcular</button>
                </div>
                <?php include 'calcular.php'; ?>
        </form>
    </div>   
</body>
</html>