@extends('admin/main')

@section('content')
		<div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Transfers summary</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors -> all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 ">
                <div class="col-lg-10 justify-content-center">
                    <table class="table table-bordered">
                        <tr>
                            <th>Account number</th>
                            <th>Description</th>
							<th>Sum</th>
							<th>Receiver name</th>
                        </tr>
                        @foreach($transfers as $transfer)
                            <tr>
                                <td>{{$transfer->accnumber}}</td>
                                <td>{{$transfer->description}}</td>
								<td>{{$transfer->sum}}</td>
								<td>{{$transfer->name}}</td>
								

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop