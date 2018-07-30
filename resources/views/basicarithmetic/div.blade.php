<ul>
  <li>Operation: Division</li>
  <li>Dividend: {{$num1}}</li>
  <li>Divisor: {{$num2}}</li>
  <li>Quotient: @if($num2 != 0)
      {{ $num1 / $num2}}
    @else 
      not allowed 
    @endif</li>
</ul>