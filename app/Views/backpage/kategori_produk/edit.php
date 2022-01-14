<?php echo $this->extend('backpage/header') ?>

<?php echo $this->section('content') ?>
<div class="container px-6 mx-auto grid">
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
        Form Edit Kategori Produk
    </h2>

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="p-5">
            <form action="<?= route_to('kategori_produk.edit',$data['id']) ?>" method="POST">
                <!-- General elements -->
                <input type="hidden" name="_method" value="PATCH" />
                <div
                    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
                >
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Name</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Jane Doe"
                            name="name"
                            value="<?= $data['name'] ?>"
                        />
                    </label>
                    <button type="submit"
                            class="px-2 py-2 bg-blue-500 text-white rounded-md mt-2 right-0 text-right"
                    >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>
