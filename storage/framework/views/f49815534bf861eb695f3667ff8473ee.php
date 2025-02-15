<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-gray-100">

    <div class="overflow-x-auto max-w-screen-lg flex m-auto my-5 shadow-lg">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-1 py-2 font-medium text-gray-900">#</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Judul</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Pengarang</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Tahun Terbit</th>
                    <th class="whitespace-nowrap px-2 py-2 font-medium text-gray-900">Action</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd:bg-gray-50">
                        <td class="whitespace-nowrap px-1 py-2 font-medium text-gray-900 text-center">
                            <?php echo e($loop->iteration); ?></td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700 border-l border-gray-300">
                            <?php echo e($book->title); ?></td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700 border-l border-gray-300">
                            <?php echo e($book->author); ?></td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700 border-l border-gray-300">
                            <?php echo e($book->year); ?></td>
                        <td
                            class="border-l border-gray-300 py-2 flex gap-2 justify-center items-center whitespace-nowrap">
                            <a href="<?php echo e(route('book.edit', $book->id)); ?>" type="button"
                                class="inline-block rounded-md bg-yellow-500 px-4 py-2 text-xs font-medium text-white hover:bg-yellow-700">
                                Edit
                            </a>
                            <form action="<?php echo e(route('book.destroy', $book->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit"
                                    class="inline-block rounded-md bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">
                                    Hapus
                                </button>
                            </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="max-w-screen-lg flex m-auto">
        <a href="<?php echo e(route('book.create')); ?>" type="button" class="inline-block rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">Tambah Data</a>
    </div>
        
</body>

</html>
<?php /**PATH C:\laragon\www\perpustakaan\resources\views/book/index.blade.php ENDPATH**/ ?>