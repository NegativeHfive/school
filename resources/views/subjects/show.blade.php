<h2>{{ $subject->name }}</h2>
<p>{{ $subject->description }}</p>

<p>Teacher: {{ $subject->teacher->name ?? 'No Teacher Assigned' }}</p>
