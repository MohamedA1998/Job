<x-layout>
    @foreach ($jobs as $job)
        <div>
            {{ $job->title }}
            <a href="{{ route('jobs.show', $job) }}">show</a>
        </div>
    @endforeach
</x-layout>