@extends ('layouts.dashboard')
@section('page_heading','Visits')
@section('section')
<div class="col-sm-12">

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>IP ADDRESS</th>
                    <th>COUNTRY/CITY</th>
                    <th>USER</th>
                    <th>DEVICE</th>
                    <th>BROWSER</th>
                    <th>REFERER</th>
                    <th>PAGE VIEW</th>
                    <th>LAST ACTIVITY</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $db)
                <tr class="success">
                    <td>{{$data}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>
@stop
