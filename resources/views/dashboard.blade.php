<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            ສະບາຍດີ ທ່ານ: <b> {{Auth::user()->name}} <b>

            {{-- <b style="float:right;"> ຜູ້ໃຊ້ທັງໝົດ :
                <span class="badge badge-danger">{{ count($users) }}</span>
            </b> --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">SL No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach ($users as $item)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</x-app-layout>
