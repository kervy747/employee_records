<x-layout>
  <x-slot:headings>
    Employee List
  </x-slot:headings>

  <div class="mx-auto text-center mb-2 bg-[#fca103] w-35 px-3 py-2  rounded-sm">  
    <a class="block" href="/employee/create">Add Employee</a>
  </div>

  <table class="mt-7 mx-auto w-full max-w-4xl">
    <thead class="bg-[#6e4c08] uppercase text-white">
      <tr>
        <th class="px-6 py-3">First Name</th>
        <th class="px-6 py-3">Last Name</th>
        <th class="px-6 py-3">Salary</th>
        <th class="px-6 py-3">Specialization</th>
        <th class="px-6 py-3" >Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $employee)
        <tr class="border-b bg-[#fff1d4] hover:bg-white">
          <td class="px-6 py-4">{{ $employee->fname }}</td>
          <td class="px-6 py-4">{{ $employee->lname }}</td>
          <td class="px-6 py-4">{{ $employee->salary }}</td>
          <td class="px-6 py-4">{{ $employee->spec }}</td>
          <td class="px-6 py-4 flex items-center gap-4">
            <a class="underline text-blue-500" href="/employee/{{ $employee->id }}/edit">Edit</a>

            <form method="POST" action="/employee/{{ $employee->id }}">
              @csrf
              @method('DELETE')
              <button class="underline text-red-500" type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>  
</form>
</x-layout>