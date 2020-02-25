<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role Form</title>
    <link href="//unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div id="app" class="container mx-auto min-h-screen flex flex-wrap justify-center items-center">
        <div class="flex w-full justify-center">
            <div class="w-full max-w-xs">
                <h1 class="text-center mb-4">Role Form</h1>
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="rolename">User Role Name</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="rolename" type="text" placeholder="Role Name">
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Add User Role
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex text-center">
            <span class="w-full vue-message">{{ message }}</span>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        let app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        });
    </script>
</body>
</html>
