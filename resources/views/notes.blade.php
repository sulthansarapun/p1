<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catatan Perjalanan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="table w-full">
                            <!-- head -->
                            <thead class="bg-gray-800 shadow-sm text-white">
                            <tr>
                                <th></th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Suhu Tubuh</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>1</th>
                                <td class="mr-8">18/12/2022</td>
                                <td class="mr-8">14:22</td>
                                <td class="mr-8">Jakarta</td>
                                <td class="mr-8">36,7.C</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
