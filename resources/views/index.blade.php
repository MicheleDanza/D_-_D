<x-layout>
  <table class="table">
    <thead>
      <tr>
        @foreach ($abilityScores['results'] as $abilityScore)
        <th scope="row">
          {{$abilityScore['name']}}
        </th>
          @endforeach
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($array as $item)
        <td>
          <h6>Nome</h6>
            <li>{{$item['full_name']}}</li>
          <h6>Descrizione</h6>
          <ul>
          @foreach($item['desc'] as $desc)
            <li>{{$desc}}</li>
          @endforeach
        </ul>
          <h6>Skills</h6>
          <ul>
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

