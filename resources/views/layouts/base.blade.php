<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
<nav class="bg-gradient-to-l from-purple-600 to-red-700">
    <div class="w-52 px-4 pt-4">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
            <a href="{{url ('dragon')}}" class="block py-2 px-3 rounded md:bg-transparent md:text-gray-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Dragons</a>
            </li>
            <li>
            <a href="{{url ('trainer')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Trainers</a>
            </li> 
        </ul>
        
    </div>
    </nav>    




<div class="bg-gradient-to-l from-purple-600 to-red-700 w-screen h-screen">
    @yield('content')


</div>



</body>
</html>