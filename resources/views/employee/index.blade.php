<x-layout>
  <x-slot:headings>
    Employee List
  </x-slot:headings>

  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Salary</th>
        <th>Specialization</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $employee)
        <tr>
          <td>{{ $employee->fname }}</td>
          <td>{{ $employee->lname }}</td>
          <td>{{ $employee->salary }}</td>
          <td>{{ $employee->spec }}</td>
          <td>
            <a href="/employee/{{ $employee->id }}/edit">Edit</a>

            <form method="POST" action="/employee/{{ $employee->id }}">
              @csrf
              @method('DELETE')
              <button type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <a href="/employee/create">Add Employee</a>
  
</form>
</x-layout>