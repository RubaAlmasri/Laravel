@extends ('2june/master')




@section('content')
<div class="container" style="text-align: center; margin: 10%; ">
    <h1>
        <span style="color: blue;">
        {{$name}}
        </span>
        <br><br>
        This Is My Calculator...
        <br><br>
        <a href="calculator"><input type="button" value="Calculator"></a>
    </h1>
</div>
@endsection