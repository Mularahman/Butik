
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="edit{{$item->id}}">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <div class="flex items-center justify-between border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Data </h3>
                </div>
                <form class="space-y-6" action="/edit_kupon/{{$item->id}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="code" class="block mb-2 text-left  text-sm font-medium text-gray-900 dark:text-white">Kode</label>
                        <input type="text" name="code" id="code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$item->code}}"  required>
                    </div>
                    <div>
                        <label for="deskripsi" class="block mb-2 text-left text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <input type="text" name="description" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$item->description}}" required>
                    </div>
                    <div>
                        <label for="tipe" class="block mb-2 text-left text-sm font-medium text-gray-900 dark:text-white">Tipe Diskon</label>

                        <select id="tipe" name="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{$item->type}}" selected>--- Pilih Tipe Diskon ---</option>

                            <option value="percentage">Persentase Diskon</option>
                            <option value="fixed">Potongan Harga Tetap</option>


                        </select>
                    </div>
                    <div>
                        <label for="amount" class="block mb-2 text-left text-sm font-medium text-gray-900 dark:text-white">Jumlah Diskon</label>
                        <input type="number" name="amount" id="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$item->amount}}"  required>
                    </div>
                    <div>
                        <label for="start_date" class="block mb-2 text-left text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai Diskon</label>
                        <input type="date" name="start_date" id="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$item->start_date}}" required>
                    </div>
                    <div>
                        <label for="end_date" class="block mb-2 text-left text-sm font-medium text-gray-900 dark:text-white">Tanggal Berakhir Diskon</label>
                        <input type="date" value="{{$item->end_date}}" name="end_date" id="end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                    </div>
                    <div>
                        <label for="status" class="block mb-2 text-left text-sm font-medium text-gray-900 dark:text-white">Status</label>

                        <select id="status" name="is_active"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{$item->is_active}}" selected>--- Pilih Status ---</option>


                            <option value=1>Aktif</option>
                            <option value=0>Tidak Aktif</option>


                        </select>
                    </div>



                    <div class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">

                        <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3">
                            Submit
                        </button>
                    </div>




                </form>
            </div>
        </div>
    </div>

