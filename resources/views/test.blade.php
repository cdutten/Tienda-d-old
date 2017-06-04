@extends('auth.layouts.app')

@section('content')

<div class="panel panel-default">
  <div class="panel-body">
	<p> This can view for all </p>
	@role('vendedor')
	    <p>This is visible to users with the admin and Vendedor role. Gets translated to 
	    \Laratrust::role('admin')</p>
	@endrole
	@role('admin')
	    <p>This is visible to users with the Admin role. Gets translated to 
	    \Laratrust::role('admin')</p>
	@endrole
  </div>
</div>
@endsection