@extends('admin.layouts.app')

@section('title')
    Produk
@endsection
@section('breadcrum')
    <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page">Produk</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Edit Produk</h6>
    </nav>
@endsection
@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 ">

@foreach ($produk as $item)




                <div
                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                    <div class="flex-auto  px-0 pb-2">
                        <div class="overflow-x-auto">

                            <div class="px-6 py-6 lg:px-8">
                                <div
                                    class="flex items-center justify-between border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                                    <h3
                                        class="pt-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent  text-xxs whitespace-nowrap text-slate-400 opacity-70">
                                        Edit Data Produk</h3>
                                </div>
                                <form class="space-y-6" action="/produk-admin_edit_aksi/{{$item->id}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                        <div>
                                            <label for="namaproduk"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                Produk</label>
                                            <input type="text" name="namaproduk" placeholder="Nama Produk" value="{{$item->namaproduk}}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="kodeproduk"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                                                Produk</label>
                                            <input type="text" value="{{$item->kodeproduk}}" name="kodeproduk" placeholder="Kode Produk"
                                                id="kodeproduk"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="beratproduk"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat
                                                Produk</label>
                                            <input type="number" value="{{$item->beratproduk}}" name="beratproduk" placeholder="Berat Produk"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="warnaproduk"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna
                                                Produk</label>
                                            <input type="text" value="{{$item->warnaproduk}}" name="warnaproduk" placeholder="Warna Produk"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="ukuranproduk"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran
                                                Produk</label>
                                            <input type="text" value="{{$item->ukuranproduk}}" name="ukuranproduk" placeholder="Ukuran Produk"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="stokproduk"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok
                                                Produk</label>
                                            <input type="number" value="{{$item->stokproduk}}" name="stokproduk" placeholder="Jumlah Stok Produk"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="hargaproduk"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                                                Produk</label>
                                            <input type="number" value="{{$item->hargaproduk}}" name="hargaproduk" placeholder="Harga Produk"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        {{--  <div>
                                            <label for="diskon"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                                                Diskon</label>
                                            <input type="number" value="{{$item->diskon}}" name="diskon" placeholder="Harga Diskon"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>  --}}
                                        <div>
                                            <label for="produkkategori"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                                Kategori</label>
                                            <select id="produkkategori" name="kategori_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected value="{{$item->kategori_id}}">{{$item->kategori->kategori}}</option>
                                                @foreach ($kategori as $data)
                                                    <option value="{{ $data->id }}">{{ $data->kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label for="subkategori"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                                Sub Kategori</label>
                                            <select id="subkategori" name="subkategori_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected value="{{$item->subkategori_id}}">{{$item->subkategori->subkategori}}</option>


                                                        <option value="">
                                                        </option>



                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-4 gap-4">
                                        <div class="col-span-2">
                                            <label class="block mb-2 text-sm  font-medium text-gray-900 dark:text-white"
                                                for="deskripsishort">Deskripsi Produk</label>
                                            <input
                                                class="block w-full text-sm text-gray-600 border border-gray-300 rounded-lg  bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400"
                                                name="deskripsishort" value="{{$item->deskripsishort}}" type="text" placeholder="Deskripsi Short">
                                        </div>
                                       {{--  <div>
                                        <div>
                                            <label class="block mb-2 text-sm  font-medium text-gray-900 dark:text-white"
                                                for="produkbaru"></label>
                                            <div class="flex items-center mb-4">
                                                <input id="default-checkbox" type="checkbox" value=1 name="produkbaru"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-checkbox"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Produk Baru</label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm  font-medium text-gray-900 dark:text-white"
                                                for="promo"></label>

                                            <div class="flex items-center mb-4">
                                                <input id="default-checkbox" type="checkbox" value=1 name="promo"
                                                     class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-checkbox"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Promo</label>
                                            </div>
                                        </div>
                                       </div>
                                       <div>
                                        <div>
                                            <label class="block mb-2 text-sm  font-medium text-gray-900 dark:text-white"
                                                for="bestseller"></label>
                                            <div class="flex items-center mb-4">
                                                <input id="default-checkbox" type="checkbox" value=1 name="bestseller"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-checkbox"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Best Seller</label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm  font-medium text-gray-900 dark:text-white"
                                                for="barudatang"></label>
                                            <div class="flex items-center mb-4">
                                                <input id="default-checkbox" type="checkbox" value=1 name="barudatang"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-checkbox"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Baru Datang</label>
                                            </div>
                                        </div>
                                       </div>  --}}
                                    </div>
                                    <div>
                                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>

                                        <select id="status" name="status"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="" selected>--- Pilih Status ---</option>


                                            <option value=1>Aktif</option>
                                            <option value=2>Tidak Aktif</option>


                                        </select>
                                    </div>
                                    <div>
                                        <label class="block mb-2 text-sm  font-medium text-gray-900 dark:text-white"
                                            for="deskripsiproduk">Deskripsi Produk</label>
                                        <textarea id="message" rows="4" name="deskripsiproduk"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Deskripsi Long">{{$item->deskripsiproduk}}</textarea>
                                    </div>
                                    <input type="hidden" name="oldthumbnail" value="{{$item->thumbnail}}">

                                    <div
                                        class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                                        <button type="submit"
                                            class="inline-block px-6 py-3 font-bold text-center w-full text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                <div
                    class="border-black/12.5 mt-8 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                    <div class="flex-auto  px-0 pb-2">
                        <div class="overflow-x-auto">

                            <div class="px-6 py-3 lg:px-8">

                                <form class="space-y-6" action="/produk-admin/gallery" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="produk_id" value="{{ $id }}">
                                    <div>
                                        <label class="block mb-2 text-sm  font-medium text-gray-900 dark:text-white"
                                            for="thumbail">Thumbnail</label>
                                        <input
                                            class="block w-full text-sm text-gray-600 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400"
                                            name="thumbnail" multiple="multiple" id="file"  style="display: none;"
                                             type="file" onchange="form.submit()">
                                    </div>
                                    <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-4">
                                        @foreach ($produk as $gambar)
                                        @foreach ($gambar->gambar as $item)



                                        <div
                                        class="w-48 h-48 justify-center items-center align-middle flex bg-grey-700 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 me-3">

                                        <img class="h-44 w-44 p-3 rounded-[20px]"
                                        src=" {{ asset('storage/' . $item->thumbnail) }}" alt="" />

                                                <a href="{{ route('dashboard-product-gallery-delete', $item->id) }}" class="-mt-44">
                                                    <img src="/frontend/img/icon-delete.svg" alt="" />
                                                  </a>

                                        </div>

                                        @endforeach
                                        @endforeach

                                    </div>




                                    <div
                                        class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                                        <button onclick="thisFileUpload()" type="button"
                                            class="inline-block px-6 py-3 font-bold text-center text-white uppercase w-full align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 active:opacity-85 hover:shadow-soft-xs mb-3">
                                            Add Image
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const produkkategori = document.getElementById('produkkategori');

        produkkategori.addEventListener('change', function() {
            var id = this.value;
            if (id) {
                fetch('/getsubkategori/' + id)
                    .then(response => response.json())
                    .then(data => {
                        var subkategoriSelect = document.getElementById('subkategori');
                        subkategoriSelect.innerHTML = '<option value="">--- Pilih Sub Kategori ---</option>';
                        data.forEach(subkategori => {

                            var option = document.createElement('option');
                            option.value = subkategori.id;
                            option.textContent = subkategori.subkategori;
                            subkategoriSelect.appendChild(option);
                        });
                    });
            } else {
                var subkategoriSelect = document.getElementById('subkategori');
                subkategoriSelect.innerHTML = '<option value="">--- Pilih Sub Kategori ---</option>';
            }
        });
    </script>
@endsection
@push('addon-script')

  <script>
    function thisFileUpload() {
      document.getElementById("file").click();
    }
  </script>

@endpush
