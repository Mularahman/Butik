
<div class="relative w-full max-w-md max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="editkecamatan{{$item->id}}">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close modal</span>
        </button>
        <div class="px-6 py-6 lg:px-8">
            <div class="flex items-center justify-between border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Data </h3>
            </div>
            <form class="space-y-6" action="/edit_kecamatan/{{$item->id}}" method="POST" >
                @csrf
                @method('PUT')
                <div>
                    <label for="kategori"
                        class="block mb-2 text-sm text-start font-medium text-gray-900 dark:text-white">Provinsi</label>


                    <select id="provinsi" name="provinsi_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="{{$item->provinsi->id}}" selected>{{$item->provinsi->provinsi}}</option>
                        @foreach ($provinsi as $data)

                        <option value="{{$data->id}}">{{$data->provinsi}}</option>
                        @endforeach

                    </select>

                </div>
                <div>
                    <label for="kategori"
                        class="block mb-2 text-sm text-start font-medium text-gray-900 dark:text-white">Kabupaten / Kota</label>


                    <select id="kota" name="kota_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="{{$item->kota->id}}" selected>{{$item->kota->kota}}</option>
                        @foreach ($kota as $data)

                        <option value="{{$data->id}}">{{$data->kota}}</option>
                        @endforeach

                    </select>

                </div>
                <div>
                    <label for="kategori" class="text-start block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                    <input type="text" name="kecamatan" id="kategori" value="{{$item->kecamatan}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                </div>
                {{--  <div>
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-start">Slug</label>
                    <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$item->slug}}"  required>
                </div>  --}}
                <input type="hidden" name="oldicon" value="{{$item->icon}}">


                <div class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">

                    <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3">
                        Submit
                    </button>
                </div>




            </form>
        </div>
    </div>
</div>

