@extends('auth0.layouts.app')
@section('content')

<article>
    <h1>Reporting</h1>
    <div class="postimage">
    <img src="images/post1_pictsa.jpeg" alt="PLACE PICTURE TO SHOW PLACES">
</div>

<form method="post" action="{{ route('saveItem')}}" accept-charset="UTF-8">
    {{ csrf_field() }}
<label for="listHotlistItem">new hotspot item</label></br>
<input type="text" name="listHotlistItem"> </br>
<button type="submit">Add hotspot</button>
    </p>
        <div>
            <p>Location:

        </div>
    </p>
        
</article>
</section>
@endsection