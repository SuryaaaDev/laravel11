<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen justify-center items-center">
        <div class="max-w-xl p-16 rounded-xl shadow-xl bg-white">
            <h1 class="text-xl font-bold text-center mb-8">Edit Data Buku</h1>
            <form action="<?php echo e(route('book.update', $book->id)); ?>" method="post" class="flex flex-col gap-5">
                <?php echo csrf_field(); ?>
                
                <?php echo method_field('PUT'); ?>
                <label for="title"
                    class="relative block rounded-md border border-gray-200 shadow-xs focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" id="title"
                        class="peer border-none bg-transparent px-4 h-10 w-72 placeholder-transparent focus:border-transparent focus:ring-0 focus:outline-hidden"
                        placeholder="Judul" name="title" value="<?php echo e($book->title); ?>" />

                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                        Judul
                    </span>
                </label>

                <label for="author"
                    class="relative block rounded-md border border-gray-200 shadow-xs focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" id="author"
                        class="peer border-none bg-transparent px-4 h-10 w-72 placeholder-transparent focus:border-transparent focus:ring-0 focus:outline-hidden"
                        placeholder="Pengarang" name="author" value="<?php echo e($book->author); ?>" />

                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                        Pengarang
                    </span>
                </label>

                <label for="year"
                    class="relative block rounded-md border border-gray-200 shadow-xs focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" id="year"
                        class="peer border-none bg-transparent px-4 h-10 w-72 placeholder-transparent focus:border-transparent focus:ring-0 focus:outline-hidden"
                        placeholder="Tahun Terbit" name="year" value="<?php echo e($book->year); ?>" />

                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                        Tahun Terbit
                    </span>
                </label>
                <button
                    class="group relative inline-flex items-center overflow-hidden rounded-sm border border-current px-8 py-3 text-indigo-600 focus:ring-3 focus:outline-hidden"
                    type="submit">
                    <span class="absolute -end-full transition-all group-hover:end-4">
                        <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>

                    <span class="text-sm font-medium transition-all group-hover:me-4"> Update </span>
                </button>
            </form>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\perpustakaan\resources\views/book/edit.blade.php ENDPATH**/ ?>