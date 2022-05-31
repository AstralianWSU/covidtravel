@extends('auth0.layouts.app')
@section('content')


  
  <article>
    <h1>COVID hotspot zones</h1>
    <p>
    <form method="post" action="{{ route('saveItem')}}" accept-charset="UTF-8">
    {{ csrf_field() }}
<label for="listHotlistItem">new hotspot item</label></br>
<input type="text" name="listHotlistItem"> </br>
<button type="submit">Add hotspot</button>
    </p>
    <div>



    <p>Location:<ul>
    @foreach ($listHotspot as $listHotspot)
    <li>{{ $listHotspot->name }}</li>
    @endforeach
</ul>
    </p>
</div>

  </article>
</section>

@endsection