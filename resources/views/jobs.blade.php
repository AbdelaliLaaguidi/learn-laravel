<x-layout>
  <x-slot:heading>
    Jobs Listing
  </x-slot:heading>
  <ul>
    @foreach ($jobs as $job)
      <li>
        <a href="/job/{{$job['id']}}" class="block px-8 py-4 mb-4 border border-gray-300 rounded-lg hover:bg-gray-200">
          <div></div>
          <div>
            <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}}
          </div>
        </a>
      </li>
    @endforeach
  </ul>
</x-layout>
