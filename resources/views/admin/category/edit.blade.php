<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            ແກ້ໄຂປະເພດຜູ້ໃຊ້ <b> <b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">ແກ້ໄຂປະເພດຜູ້ໃຊ້</div>
                        <div class="card-body">
                            <form action="{{ url('category/update/'.$allCate->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInput">ແກ້ໄຂ້ ປະເພດຜູ້ໃຊ້</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInput" aria-describedby="emailHelp" value="{{$allCate->category_name}}">

                                        @error('category_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>
                                <button type="submit" class="btn btn-primary mt-2">ແກ້ໄຂ ປະເພດຜູ້ໃຊ້</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
