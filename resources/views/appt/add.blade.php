@extends('layouts.app')

@section('content')
   <div class="container">
        <div class="row" style="max-width:600px">
            <div class="col-12 pt-2">
                
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create New Appointment</h1> <br><?php $data = $_GET['data2'];
					$pos = $_GET['pos2'];$hr = $_GET['hr']; echo "on $data at $hr";?>
                    <p>Fill and submit this form</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Name</label>
                                <input type="text" id="title" class="form-control" name="nume"
                                       placeholder="Enter Name" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Numeric ID <small>(easier to type than an email address)</small> <span style="color:red">see***</span></label>
                                <textarea id="body" class="form-control" name="cnp" placeholder="Enter some random numeric ID ***"
                                          rows="" required></textarea>
                            </div>
							<?php
							echo "<input type='hidden' name='data' value='$data'></input><input type='hidden' name='pos' value='$pos'></input>";
							?>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary" style="margin-top:40px;">
                                    Make Appointment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<div style="margin-top:40px;font-size:1.2em;color:green;font-weight:600;margin-left:50px;">
*** -> I put 'Numeric ID' field as an unique numeric identifier for a person just to make quick fill when testing. <br>This field may be an email address but who want to type xx@yy.zz over and over? 
</div>
@endsection