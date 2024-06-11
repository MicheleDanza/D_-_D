<x-layout>
  <table class="table">
    <thead>
      <tr>
        @foreach ($abilityScores['results'] as $item)
        <th scope="row">
          {{$item['name']}}
        </th>
          @endforeach
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($array as $item)
        <td>
          <ul>
            <li>{{$item['full_name']}}</li>
                @foreach($item['desc'] as $desc)
                   <li>{{$desc}}</li>
                @endforeach
                @foreach($item['skills'] as $skill)
                  <li>{{$skill['name']}}</li>
                @endforeach
          </ul>
        </td>
        @endforeach
      </tr>
    </tbody>
  </table>
 
</x-layout>

