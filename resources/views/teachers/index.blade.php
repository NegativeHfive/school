@foreach ($teachers as $teacher)
    <h2>{{ $teacher->name }}</h2>
    <p>{{ $teacher->hobbies }}</p>
    
    <h3>Subjects:</h3>
    <ul>
        @forelse ($teacher->subjects as $subject)
            <li>{{ $subject->name }}</li>
        @empty
            <li>No subjects assigned</li>
        @endforelse
    </ul>
@endforeach
