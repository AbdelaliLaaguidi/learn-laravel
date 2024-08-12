<x-layout>
  <x-slot:heading>
    Jobs Listing
  </x-slot:heading>
  <a href="/jobs/create" class="inline-block mb-6 bg-gray-800 text-white px-8 py-4 rounded-lg hover:bg-gray-500">Create a job</a>
  <ul>
    @foreach ($jobs as $job)
      <li>
        <a href="/jobs/{{$job['id']}}" class="block px-8 py-4 mb-4 border border-gray-300 rounded-lg hover:bg-gray-200">
          <div class="font-bold text-blue-500">
            {{$job->employer->name}}
          </div>
          <div>
            <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}}
          </div>
        </a>
      </li>
    @endforeach
  </ul>
  <div>
    {{$jobs->links()}}
  </div>
</x-layout>
