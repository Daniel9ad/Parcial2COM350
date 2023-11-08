<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium">
              <tr>
                <th scope="col" class="px-6 py-4">id</th>
                <th scope="col" class="px-6 py-4">Titulo</th>
                <th scope="col" class="px-6 py-4">Editorial</th>    
                <th scope="col" class="px-6 py-4">Edicion</th>
                <th scope="col" class="px-6 py-4">pais</th>
                <th scope="col" class="px-6 py-4">precio</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                <tr class="border-b">
                    <td class="whitespace-nowrap px-6 py-4">{{$libro->id}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$libro->titulo}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$libro->editorial->nombre}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$libro->edicion}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$libro->pais}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$libro->precio}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>