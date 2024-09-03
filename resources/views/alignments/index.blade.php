<x-layout>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Alignment</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
                @foreach($alignementsDesc as $alignementDesc)
                <tr>
                    <td>{{$alignementDesc['abbreviation']}}</td>
                    <td>{{$alignementDesc['name']}}</td>
                    <td>{{$alignementDesc['desc']}}</td>
                </tr>
                @endforeach

                    
            </tbody>
          </table>
    </div>
</x-layout>