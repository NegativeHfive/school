@foreach ($subjects as $subject)
    <h2>{{$subject->name;}}</h2>
    <p>{{$subject->description}}</p>
    <p>{{$subject->teacher}}</p>
@endforeach