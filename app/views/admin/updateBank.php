<?php require APPROOT . '/views/incFile/sidebar.php'; ?>

<main class="w-full h-[calc(100vh-64px)] bg-slate-100 p-10">

    <div class=" w-[95%] mx-auto my-5 flex items-center justify-between p-3 bg-white rounded-lg">
        <h1 class="text-xl font-bold">UPDATE BANK</h1>
        <div class="flex items-center gap-5">
            <button>
                <a href="<?php echo URLROOT?>/admin/bank" class="inline-flex items-center px-6 py-2 border border-transparent text-sm
                    leading-6 font-medium rounded-md text-white bg-primary  hover:bg-gray-800 focus:outline-none
                     transition duration-150 ease-in-out">Go back</a>
            </button>
        </div>
    </div>





    <div class="mt-20">

        <form class="max-w-lg mx-auto bg-gray-800 p-6 rounded-lg" method="POST" enctype="multipart/form-data">
            <div class="py-3">
                <label for="error" class="block mb-2 text-sm font-medium text-white">Bank
                    name</label>
                <input type="text" id="error" required value="<?= $data['bank']->bankName ?>" 
                    class="<?php if(!empty($data['bankNameErr'])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                    placeholder="Enter name bank" name="bankname">
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">
                    Bank image</label>
                <input
                    class="<?php if(!empty($data['bankNameErr'])){echo 'border border-rose-500';}else{echo '';}?> block w-full text-sm text-gray-900 border border-gray-300 rounded-lg  cursor-pointer bg-gray-50 "
                    aria-describedby="user_avatar_help" id="user_avatar" type="file" name="logo">
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>

            </div>
            <button type="submit" name="updateBank" class="w-full mt-10 block items-center px-6 py-2 w-full text-center border
                border-transparent text-sm leading-6 font-medium rounded-md text-white bg-primary focus:outline-none
                transition duration-150 ease-in-out">
                Update Bank
            </button>
        </form>
        <div>
        </div>

</main>

</section>
<?php require APPROOT . '/views/incFile/footer.php';?>