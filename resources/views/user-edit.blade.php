@extends('layouts.app')

@section('content')
<body>
	<!-- <?php print_r($users);?> -->
	<!-- inseated -->
	<!-- {{print_r($users)}} -->
<form action="{{ route('user-edit') }}" method="POST">
	{{ csrf_field() }}


	<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">USER DATA</div>

                <div class="card-body">
			<div class="form-group">
				<input type="hidden" name="id" value="{{ $users['id'] }}">
			<input type="text" name="name" placeholder="name" class="form-control" value="{{ $users['name'] }}">
		</div>
		<div class="form-group">
			<input type="email" name="email" placeholder="email" class="form-control" value="{{ $users['email'] }}">
		</div>
		<div class="form-group">
			<input type="text" name="created_at" class="form-control" placeholder="Date" value="{{ $users['created_at'] }}">
		</div>
	
	<input type="submit" name="submit" class="btn btn-success" value="Update">
</div>
</div>
</div>
</div>
</div>
</form>
</body>
   @endsection