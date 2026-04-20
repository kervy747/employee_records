<x-layout>
  <x-slot:headings>
    Add New Employee
  </x-slot:headings>

  <form class="mx-auto w-full max-w-sm rounded-lg border-2 border-black p-4" method="POST" action="/employee">
    @csrf

    <div class="grid">
      <label class="mb-1">First Name</label>
      <input class="mb-3 outline-none focus:border-b-1 bg-gray-200 h-7" type="text" name="fname" required>
      @error('fname')
        <p>{{$message}}</p>
      @enderror

      <label class="mb-1">Last Name</label>  
      <input class=" outline-none focus:border-b-1 bg-gray-200 h-7" type="text" name="lname" required>
      @error('lname')
        <p>{{$message}}</p>
      @enderror

      <label class="mb-1">Salary</label>
      <input class="mb-3 outline-none focus:border-b-1 bg-gray-200 h-7"  type="text" name="salary" required>
      @error('salary')
        <p>{{$message}}</p>
      @enderror

      <label class="mb-1" >Specialization</label>
      <input class="mb-3 outline-none focus:border-b-1 bg-gray-200 h-7"  type="text" name="spec" required>
      @error('spec')
        <p>{{$message}}</p>
      @enderror

      <hr class="mb-3">

      <div class="flex justify-between">
        <div class="flex gap-7">
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