<x-layout>
  <x-slot:heading>
    Jobs
  </x-slot:heading>
  <h2 class="text-xl font-bold">{{$job['title']}}</h2>
  <p>
    This Job Pays {{$job['salary']}}
  </p>
  <a href="/jobs" class="text-blue-500 hover:underline">Back to Jobs</a>
</x-layout>
