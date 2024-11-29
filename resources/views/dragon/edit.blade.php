@extends('layouts.base')

@section('content')

    

    <form class="max-w-sm mx-auto" action="{{ url('dragon/'.$dragon->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name" value ="{{ $dragon->name}}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="mb-5">
                <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                <input type="text" name="age" value ="{{ $dragon->age}}" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="mb-5">
                <label for="element" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Element</label>
                <input type="text" name="element" value ="{{ $dragon->element}}" id="element" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="mb-5">
                <img src="{{ asset($dragon->image) }}" alt="">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-5">
                <label for="trainer_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                <select name="trainer_id" id="trainer_id" required>
                    <option value="">Select a trainer</option>
                    @foreach ($trainers as $trainer)
                        @if($trainer->id === $dragon->trainer->id)
                            <option value="{{ $trainer->id}}" selected>{{$trainer->name}}</option>
                        @else
                            <option value="{{ $trainer->id}}">{{$trainer->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Update Pokemon</button>

    </form>

@endsection