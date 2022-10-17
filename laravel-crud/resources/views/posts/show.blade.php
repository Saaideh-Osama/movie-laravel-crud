<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	<style> 
	body{color:white;
		background:black;}
		div{background:Black }
	</style>
</head>
<body>
    



 <div class="card">
<div class="card-header">
		<div class="row">
			
			<div class="col col-md-6"><b>Movie Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('posts.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">

		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>movie Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $post->image) }}" width="200" class="img-thumbnail" />
			</div>
		</div> 


		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>movie Name</b></label>
			<div class="col-sm-10">
				{{ $post->title }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>movie description</b></label>
			<div class="col-sm-10">
				{{ $post->description }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>movie Gender</b></label>
			<div class="col-sm-10">
				{{ $post->genre }}
			</div>
		</div>
		
	</div>
</div> 
</body>
</html>