@extends('layouts.base')

@section('content')


<div class="flex flex-wrap justify-center">


    @foreach($trainer as $entity)

        <div class="p-4 max-w-sm">
            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-stone-300 p-8 flex-col">
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $entity->name }}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Elemento: {{ $entity->rank }}</span>
                
                <div class="flex mt-4 md:mt-6">
                    <a href="{{ url('trainer/'.$entity->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Edit</a>
                        <form action="{{ url('trainer/'.$entity->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-black-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Delete</button>
                        </form>
                </div>
            </div>
        </div>
        
    @endforeach
</div>
<div class="text-center p-10">
<a href="http://localhost:8000/trainer/create" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-black-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Register trainer</a>
</div>
@endsection
