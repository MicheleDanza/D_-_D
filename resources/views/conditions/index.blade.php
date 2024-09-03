<x-layout>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Condition</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
                @foreach($conditionsDetails as $conditionDetail)
                <tr>
                    <td>{{$conditionDetail['name']}}</td>
                    @foreach($conditionDetail['desc'] as $desc)
                    <td>{{$desc}}</td>
                    @endforeach
                </tr>
                @endforeach

                    
            </tbody>
          </table>
    </div>
</x-layout>