<x-layout>
<div class="row">
        @foreach($classes as $class)
        <div class="col-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$class['name']}}</h5>
                    <a href="{{route('class',$class)}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
        </div>
        @endforeach
</div>
</x-layout>