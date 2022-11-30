@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">Laravel Appointments App</h1>
                
                <h2><a href="appt/select" class="btn btn-outline-primary" style='font-size:1.8em'>Make New Appointment</a></h2>
				<br>
				<h2><a href="appt" class="btn btn-outline-primary" style='font-size:1.7em'>Show Appointments* </a></h2> <i>*protected admin login mode not implemented because is not a required task (see bellow)</i>
             <hr><h2><a href="uml" class="btn btn-outline-primary" style='font-size:1.7em'>UML Diagram </a></h2>
			</hr>
            </div>
        </div>
    </div>
	<div style='text-align:center;width:100%;max-width:1100px;font-width:thin;margin:0 auto; margin-top:100px;color:green'>
	**Note: the only way to maximize the apointment numbers in a day is to start the appointments at '9:00', '10:30', '12:00', '15:30', '17:00', '18:30' and '20:00'.<br>
	There is no room for flexibillity for the person who want to make an appointment if we want to make as much appointments as possible. (and that's supposed to be the goal).<br>
	That fact simplify our app :).
	</div>
	<div style='margin-top:130px;'>
	<p><strong style='font-size:1.6em'>Task:</strong></p>
<p></p>
<p><em>"All the ""MUST"", ""MAY"" and ""SHOULD"" words, with their negative forms, follow the standard defined in RFC2119.</em></p>
<p><em>Appointment calendar: develop a small web application that lets book a consulting appointment.</em></p>
<p><em>In a day may be various appointments, each one lasts 1 hour and is set 30 minutes apart from the others. The consultants are available from Monday to Friday, 9:00-13:00, 15:30-21:00.</em></p>
<p><em>You MUST develop the front-office and the back-office;</em></p>
<p><em>You MUST use PHP (>= ) language and at least one AJAX call;</em></p>
<p><em>You MUST use any RDBMS (SQLite, MySQL, PostgreSQL);</em></p>
<p><em>You MUST use Laravel;</em></p>
<p><em>You MAY provide UML diagrams;</em></p>
<p><em>You SHOULD NOT focus on front-end/UI."</em></p>
	</div>
@endsection
