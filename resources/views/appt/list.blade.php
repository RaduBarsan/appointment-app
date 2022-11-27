@extends('layouts.app') @section('content')
<?php
$hrs = ['9:00', '10:30', '12:00', '15:30', '17:00', '18:30', '20:00'];
$n = 0;
?>
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">Future Appointments List</h1>
			<div class="text-left"><a href="appt/select" class="btn btn-outline-primary">Add new
				appointment</a></div>
			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col" class="pr-5">Numeric ID</th>
						<th scope="col">Date</th>
						<th scope="col">Hour</th>
					</tr>					
				</thead>
				<tbody>
					@foreach ($appts as $appt)
					<?php
							$hr = $appt->pos;
							$hr = $hr-1;
							?>
					<tr>
						<td>{!! $appt->nume !!}</td>
						<td class="pr-5 text-left">{!! $appt->cnp !!}</td>
						<td>{!! $appt->data !!}</td>
						<td><?php echo $hrs[$hr]; ?></td>
					</tr>			
					<tr>
						<?php if (!$appt) echo '<td colspan="3">No appointments found</td>'; ?>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div style="margin-top:40px;font-size:1.2em;color:green;font-weight:600;margin-left:50px;">
* this page can be accessed without admin login because it is not required by task creator.
</div>
@endsection