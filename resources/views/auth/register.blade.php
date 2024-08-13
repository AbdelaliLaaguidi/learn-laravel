<x-layout>
  <x-slot:heading>
    Register
  </x-slot:heading>
  <form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">

      <div class="border-b border-gray-900/10 pb-12">

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <x-form-label for="email">Email</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="email" id="email" />
            </div>
            <x-form-error name="email" />
          </div>
          <div class="sm:col-span-3">
            <x-form-label for="password"
              class="block text-sm font-medium leading-6 text-gray-900">Password</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="password" id="password" />
            </div>
            <x-form-error name="password" />
          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
          <button type="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
        </div>
  </form>
</x-layout>
