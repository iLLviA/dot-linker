@extends('layout.app')

@section('content')
<div class="wrapper">  
  <div class="box">
      <h2 class="box-title red">@yield("err-title")</h2>
      <div>
        <p>@yield("err-wording")</p>
        <div class="error-btns">
          @yield("err-btn")
        </div>
      </div>      
  </div>  
</div>

@endsection
