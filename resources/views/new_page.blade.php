<h1>New Page</h1>
<a href="{{route('contact')}}">Contact</a>
<br/>
<a href="{{route('about')}}">About</a>
<br/>
<a href="{{route('shoutout', array('text'=>'sdfasdfas'))}}">Shoutout To My Ex</a>
<br/>


@foreach($names as $name)
<a href="{{route('shoutout', array('text'=>$name))}}">{{$name}}</a>
<br/>
@endforeach