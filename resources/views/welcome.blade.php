<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-full bg-grey-200">
 
    <div class="flex h-screen">
        <div class="m-auto">
            <h1 class="text-center pb-12 text-green-400 text-2xl font-bold">
                News Letter
            </h1>
            <form action="{{route('newsletter')}}" method="POST">
                @csrf
                <input 
                name="email"
                placeholder="Type email"
                class="px-4 py-4 shadow-xl rounded-xl placeholder-grey-50::placeholder"
                type="text">

                <button 
                class="bg-blue-500 shadow-xl hover:bg-blue-700 text-white text-bold py-2 px-4 ml-4 rounded-full"
                type="submit">
                    Submit
                </button>

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </form>
        </div>
    </div>
 
</body>
</html>