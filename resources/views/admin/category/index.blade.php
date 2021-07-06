<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            ປະເພດຜູ້ໃຊ້ທັງໝົດ <b> <b>
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Item -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong> {{ session('success') }}!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header">ຜູ້ໃຊ້ທັງໝົດ</div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL No</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <!-- @php($i = 1) -->
                                    @foreach ($allCate as $item)
                                    <tr>
                                        <th scope="row">{{ $allCate->firstItem()+$loop->index }}</th>
                                        <td> {{ $item->category_name }} </td>
                                        <td> {{ $item->name }} </td>
                                        <td> 
                                            @if($item->created_at == NULL)
                                            <span class="text-danger">NO Date Set</span>
                                            @else
                                            {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('category/edit/'.$item->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ url('softdelete/category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        {{ $allCate->links() }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">ເພີ່ມປະເພດຜູ້ໃຊ້</div>
                        <div class="card-body">
                            <form action="{{route('store.category')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInput">ປະເພດຜູ້ໃຊ້</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="ປ້ອນປະເພດຜູ້ໃຊ້">

                                        @error('category_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>
                                <button type="submit" class="btn btn-primary mt-2">ເພີ່ມ ປະເພດຜູ້ໃຊ້</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TrashItem -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        
                        <div class="card-header"> ຖັງຂີ້ເຫຍື່ອ</div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL No</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <!-- @php($i = 1) -->
                                    @foreach ($trashCat as $trashCat)
                                    <tr>
                                        <th scope="row">{{ $allCate->firstItem()+$loop->index }}</th>
                                        <td> {{ $trashCat->category_name }} </td>
                                        <td> {{ $trashCat->name }} </td>
                                        <td> 
                                            @if($trashCat->created_at == NULL)
                                            <span class="text-danger">NO Date Set</span>
                                            @else
                                            {{ Carbon\Carbon::parse($trashCat->created_at)->diffForHumans() }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('category/restore/'.$trashCat->id) }}" class="btn btn-info">Restore</a>
                                            <a href="{{ url('pdelete/category/'.$trashCat->id) }}" class="btn btn-danger">P Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $allCate->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
