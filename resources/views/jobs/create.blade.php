<x-layout>
  <x-slot:heading>
    Create a Job
  </x-slot:heading>
  <form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">

      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
              <input type="text" name="title" id="title"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                placeholder="Senior Laravel Developer" required>
            </div>
            @error('title')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
          <div class="sm:col-span-3">
            <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
            <div class="mt-2">
              <input type="text" name="salary" id="salary"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                placeholder="$120,000" required>
            </div>
            @error('salary')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
          <x-form-button>Save</x-form-button>
        </div>
  </form>
</x-layout>
