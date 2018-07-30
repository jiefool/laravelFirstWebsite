<h1>Shoutout to: {{$text}}</h1>

@if($text=="gwapo")
  <h1>Gwapo</h1>
@elseif($text=="gwapa")
  <h1>Gwapa</h1>
@endif



<table border=1>
  <thead>
    <tr>
      <td>#</td>
      <td>Color</td>
      <td>Description</td>
    </tr>
  </thead>
  <tbody>

@foreach($colors as $color => $description)
  <tr>
    <td> {{ $loop->iteration }}</td>
    <td> {{ $color }}          </td>
    <td> {{ $description }}    </td>
  </tr>
@endforeach
  </tbody>
</table>


