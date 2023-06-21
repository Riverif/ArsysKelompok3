@section('content')
<div>
    <h1>Event Seminar</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Event Name</th>
                <th scope="col">Event Date</th>
                <th scope="col">Application Deadline</th>
                <th scope="col">Turnitin Deadline</th>
                <th scope="col">Seats Left</th>
            </tr>
        </thead>
        <tbody>
            @foreach($event_id as $id)
            <tr>
                <td>{{ $id->event_id }}
                    <br>EE-Seminar {{ date('j F Y', strtotime($id->event_date)) }}
                </td>
                <td>{{ date('l, j F Y H:i', strtotime($id->event_date))}}</td>
                <td>{{ date('l, j F Y H:i', strtotime($id->application_deadline)) }}</td>
                <td>{{ date('l, j F Y H:i', strtotime($id->draft_deadline)) }}</td>
                <td>{{ $id->quota }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection