<x-layout>
        <div class="row">
                @foreach ($monsters as $monster)
            <div class="col-3 mt-5">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{$monster['name']}}</h5>
                        <a href="{{route('monster',$monster)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
            </div>
                @endforeach
        </div>
</x-layout>