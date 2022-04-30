<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    	@include('sweetalert::alert')
    	<!-- component -->
		<div class="flex items-center justify-center h-screen bg-yellow-100">
	      <div class="bg-white rounded-2xl border shadow-x1 p-10 max-w-lg">
	        <div class="flex flex-col items-center space-y-4">
	          <h1 class="font-bold text-2xl text-gray-700 w-4/6 text-center">
	            700
	          </h1>
	          <form action="/onemail" method="post">
	          	@csrf
	          <input
	            type="email"
	            placeholder="Email"
	            name="email"
	            class="border-2 rounded-lg w-full h-12 px-4"
	          />
	          <button
	          type="submit"
	            class="bg-red-400 text-white rounded-md hover:bg-red-500 font-semibold px-4 py-3 w-full"
	          >
	            700提交
	          </button>
	          </form>
	        </div>
	      </div>
	    </div>
    </body>
</html>
