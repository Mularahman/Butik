@extends('layouts.app')
@section('title')
    Detail Produk
@endsection
@section('content')
    <section class="mt-32">
        <div class="container">

            <ol class="px-8 ml-3 flex flex-wrap ">
                <li class=" text-dark opacity-50"><a href="/home">Home</a></li>
                <span class="mx-2 text-gray-400">/</span>
                <li class=" font-bold">Detail Produk</li>
            </ol>


        </div>
        <div class="container p-4 px-4">
            <div class="px-8">
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <div class="flex-wrap flex">

                            <div
                                class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                <img class="h-96 w-full rounded-lg justify-center align-middle items-center"
                                    src="/frontend/img/model1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex-wrap flex ">


                                <div
                                    class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                    <img class="h-32 w-full rounded-lg justify-center align-middle items-center"
                                        src="/frontend/img/model1.png" alt="">
                                </div>
                                <div
                                    class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                    <img class="h-32 w-full rounded-lg justify-center align-middle items-center"
                                        src="/frontend/img/model1.png" alt="">
                                </div>
                                <div
                                    class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                    <img class="h-32 w-full rounded-lg justify-center align-middle items-center"
                                        src="/frontend/img/model1.png" alt="">
                                </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
