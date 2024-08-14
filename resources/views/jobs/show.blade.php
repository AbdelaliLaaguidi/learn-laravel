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
    @can('edit', $job)
      <x-button href="/jobs/{{$job['id']}}/edit">Edit</x-button>
    @endcan
  </div>
</x-layout>
