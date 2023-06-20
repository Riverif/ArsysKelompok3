@section('content')
<div>
    <h1>Event seminar</h1>
    <table class="table">
        <thead class="thead-dark">
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
                <td>{{ $id->event_id }}</td>
                <td>{{ $id->event_date }}</td>
                <td>{{ $id->application_deadline }}</td>
                <td>{{ $id->draft_deadline }}</td>
                <td>{{ $id->quota }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection