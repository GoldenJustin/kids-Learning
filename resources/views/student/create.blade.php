<form action="/student" method="POST">
    @csrf
    <div>
        <label for="student_name">Student Name:</label>
        <input type="text" id="student_name" name="student_name" value="{{ Auth::user()->name }}" required>
        @error('student_name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        @error('gender')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="address">Address:</label>
        <textarea id="address" name="address" required>{{ old('address') }}</textarea>
        @error('address')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Create Student</button>
</form>
