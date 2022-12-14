@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">Appointments list</h1>
			<div class="text-left"><a href="appt/create" class="btn btn-outline-primary">Add new
				appointment</a></div>

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">Nume</th>
						<th scope="col" class="pr-5">CNP</th>
						<th scope="col">Data</th>
						<th scope="col">POS</th>
					</tr>
				</thead>
				<tbody>
				<?php //print_r($appts); ?>
					@foreach ($appts as $appt)
					<tr>
						<td>{!! $appt->nume !!}</td>
						<td class="pr-5 text-right">{!! $appt->cnp !!}</td>
						<td>{!! $appt->data !!}</td>
						<td>{!! $appt->pos !!}</td>
						<td><a href="appt/{!! $appt->pos !!}/edit"
							class="btn btn-outline-primary">Edit</a>
							<button type="button" class="btn btn-outline-danger ml-1"
								onClick='showModel({!! $appt->id !!})'>Delete</button></td>
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


<div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">Are you sure to delete this record?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
				<form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>

<script>
function showModel(id) {
	var frmDelete = document.getElementById("delete-frm");
	frmDelete.action = 'appt/'+id;
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'block';
	confirmationModal.classList.remove('fade');
	confirmationModal.classList.add('show');
}

function dismissModel() {
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'none';
	confirmationModal.classList.remove('show');
	confirmationModal.classList.add('fade');
}
</script>
@endsection