<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Isi Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- <p>Hi, {{ Auth::user()->name }} ini halaman Isi Data</p> -->
                    <form action="post">
                        <!-- Label Form to = tanggal -->
                        <label for="tanggal">Tanggal : </label>
                        <input type="date" name="tanggal" id="tanggal" class="rounded text-pink-500">
                        <br>
                        <br>
                        <!-- Label Form to = jam -->
                        <label for="jam">Jam : </label>
                        <input type="time" name="jam" id="jam" class="rounded text-pink-500">
                        <br>
                        <br>
                        <!-- label form to = lokasi -->
                        <label for="lokasi">Lokasi : </label>
                        <input type="text" name="lokasi" id="lokasi" class="rounded text-pink-500">
                        <br>
                        <br>
                        <!-- label form to = suhu tubuh -->
                        <label for="suhu_tubuh">Suhu Tubuh : </label>
                        <input type="number" name="suhu_tubuh" id="suhu_tubuh" class="rounded text-pink-500">
                         <br><br>
                         
                        <button class="hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                        <span>Kirim Data Sekarang</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
