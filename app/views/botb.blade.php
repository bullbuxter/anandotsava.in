@extends('layouts.default')
@section('content')

<div class="container" id="dbWrapper">

    <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                        <strong>Participants</strong>
                </li>
                <li>
                    <a href="coll/events">Event Registration</a>
                </li>
                <li>
                    <a href="#">Payment</a>
                </li>
                <li>
                    <a href="#">Print</a>
                </li>
                <li>
                    <a href="member/logout">Logout</a>
                </li>
            </ul>
        </div>
      </div>
      <div class="row" id="page-content-wrapper">
        <div class="col-sm-offset-6 col-sm-6">
          <h3>
            <strong>College: </strong> {{$data->collName}}
          </h3>
        </div>
      </div>

@endsection
