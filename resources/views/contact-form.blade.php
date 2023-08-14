<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  </head>
<body>
<div class="container">
    <form method="post" action="{{ route('send') }}">
    <br /><br />
	<h2>Contact Form</h2>
    <br />    
    <div class="row">
        <div class="col-12">
            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name" value="John Doe" required>
        </div>
	</div>	
    <br />
	<div class="row">
        <div class="col-12">
            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email" value="john@example.com" required>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-12">
            <textarea name="message" class="form-control" rows="8" placeholder="Your message"></textarea>
        </div>
    </div>   
    <div class="row">
        <div class="col-12">
            @if(Session::has('success'))  <br />
                <div class="alert alert-success" role="alert">
                    <strong>Success: </strong>{{ session('success') }}
                </div>
            @endif
            @if(Session::has('error'))  <br />
                <div class="alert alert-danger" role="alert">
                    <strong>Error: </strong>{{ session('error') }}
                </div>
            @endif
        </div>
    </div>
    <br />    
    <div class="row">
        <div class="col-3">
            <button type="submit" id="btn-translate" class="btn btn-sm btn-success">Send Message</button>
        </div>                    
    </div>
    {!! csrf_field() !!}
    </form>
 </div>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>