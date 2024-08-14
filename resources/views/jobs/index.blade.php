<x-layout>
  <x-slot:heading>
    Jobs Listing
  </x-slot:heading>
  
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
