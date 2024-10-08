<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <form method='POST' action=' {{ route('admin.store') }}'>
        @csrf
        <input type='text' name='title' placeholder='title'></input>
        <input type='text' name='Description' placeholder='Description'></input>
        <input type='text' name='projectLink' placeholder='Link'></input>
        <input type='text' name='Notices' placeholder='Notices'></input>


        <input type="file" id="image-input" multiple accept="image/*" class='opacity-0 absolute h-10 w-40 cursor-pointer' ></input>
        
        <div id="image-container" class="flex flex-wrap gap-4"></div>


        <input type='submit'></input>
    </form>
</body>
</html>