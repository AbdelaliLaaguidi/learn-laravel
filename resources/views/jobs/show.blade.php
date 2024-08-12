<x-layout>
  <x-slot:heading>
    Jobs
  </x-slot:heading>
  <h2 class="text-xl font-bold">{{$job['title']}}</h2>
  <p>
    This Job Pays {{$job['salary']}}
  </p>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Back to Jobs</a>
    <a href="/jobs/{{$job['id']}}/edit"
      class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
  </div>
</x-layout>
