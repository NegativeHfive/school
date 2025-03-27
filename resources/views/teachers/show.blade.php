<h2>{{ $teacher->name }}</h2>
<p>Hobbies: {{ $teacher->hobbies }}</p>

<h3>Subjects:</h3>
<ul>
    @forelse ($teacher->subjects as $subject)
        <li>{{ $subject->name }}</li>
    @empty
        <li>No subjects assigned</li>
    @endforelse
</ul>
