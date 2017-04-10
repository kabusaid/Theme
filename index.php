<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Manager </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>

<div class="container">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Manager</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">All</a></li>
			<li><a href="#">Add</a></li>
		</ul>
	</nav>

	
		  
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Person Search</h3>
				</div>
				
				<div class="panel-body">
					<div class="col-md-3">
						<input id="1" class="form-control" placeholder="1" required="" autofocus="">
					</div>
					<div class="col-md-3">
						<input id="2" class="form-control" placeholder="2" required="" autofocus="">
					</div>
					<div class="col-md-3">
						<input id="3" class="form-control" placeholder="3" required="" autofocus="">
					</div>
					<div class="col-md-3">
						<input id="4" class="form-control" placeholder="4" required="" autofocus="">
					</div>
					
					<div style="clear:both"></div>
					<br/>
					
					<div class="col-md-3">
						<select class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</div>

					<div class="col-md-3">
						<select class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</div>
					
					<div class="col-md-3">
						<a class="btn btn-primary" href="#"> Search </a> 
					</div>
				</div>
			</div>
		</div>
	
	</div>


<br/>	
    <table class="table table-striped table-bordered" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number ID</th>
            <th>Edit</th>
            <th>Show</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td> ID </td>
                <td> Name </td>
                <td> Number ID </td>
                <td> <a class="btn btn-xs btn-info" href="/products/{{$product->id }}/edit/"> Edit </a> </td>
                <td> <a class="btn btn-xs btn-success" href="/products/{{$product->id }}"> Show </a> </td>
                <td>
                    <form action="#" method="post">
                        <input class="btn btn-xs btn-danger" type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
			
			<tr>
                <td> ID </td>
                <td> Name </td>
                <td> Number ID </td>
                <td> <a class="btn btn-xs btn-info" href="/products/{{$product->id }}/edit/"> Edit </a> </td>
                <td> <a class="btn btn-xs btn-success" href="/products/{{$product->id }}"> Show </a> </td>
                <td>
                    <form action="#" method="post">
                        <input class="btn btn-xs btn-danger" type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
			
			<tr>
                <td> ID </td>
                <td> Name </td>
                <td> Number ID </td>
                <td> <a class="btn btn-xs btn-info" href="/products/{{$product->id }}/edit/"> Edit </a> </td>
                <td> <a class="btn btn-xs btn-success" href="/products/{{$product->id }}"> Show </a> </td>
                <td>
                    <form action="#" method="post">
                        <input class="btn btn-xs btn-danger" type="submit" value="Delete" />
                    </form>
                </td>
            </tr>

        </tbody>
    </table>

</div>

</body>
</html>