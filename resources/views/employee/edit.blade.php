<x-layout>
  <x-slot:headings>
    Edit Details
  </x-slot:headings>

  <form method="POST" action="/employee/{{ $employee->id }}">
    @csrf
    @method('PATCH')

    <div >
      <label>First Name:</label>
      <input type="text" name="fname" value="{{ $employee->fname }}" required> <br> <br>
      @error('fname')
        <p>{{$message}}</p>
      @enderror

      <label>Last Name:</label>
      <input value="{{ $employee->lname }}" type="text" name="lname" required> <br> <br>
      @error('lname')
        <p>{{$message}}</p>
      @enderror

      <label>Salary:</label>
      <input value="{{ $employee->salary }}" type="text" name="salary" required> <br> <br>
      @error('salary')
        <p>{{$message}}</p>
      @enderror

      <label>Specialization:</label>
      <input value="{{ $employee->spec }}" type="text" name="spec" required> <br> <br>
      @error('spec')
        <p>{{$message}}</p>
      @enderror

      <div>
        <div>
          <button type="submit">Save</button>
          <button type="reset">Clear</button>
        </div>
        <div>
          <a href="/employee">Back</a>
        </div>
      </div>
    </div>
  </form>
</x-layout>