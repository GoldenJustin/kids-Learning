<form method="POST" action="{{ route('student.store-lessons') }}">
    @csrf
    <label for="lesson">Choose a Lesson:</label>
    <select name="lesson" id="lesson">
        @foreach($lessons as $lesson)
            <option value="{{ $lesson->id }}">{{ $lesson->name }}</option>
        @endforeach
    </select>
    <button type="submit">Enroll in Lesson</button>
</form>
