<?php require APPROOT . '/views/incFile/sidebar.php'; ?>

<main class="w-full h-[calc(100vh-64px)] bg-slate-100 p-10">

    <div class=" w-[95%] mx-auto my-5 flex items-center justify-between p-3 bg-white rounded-lg">
        <h1 class="text-xl font-bold">BANKS</h1>
        <div class="flex items-center gap-5">
            <div class="relative">
                <div
                    class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300  w-80 bg-white"
                    placeholder="Search...">

            </div>
            <button>
                <a href="<?php echo URLROOT?>/admin/addbank" class="inline-flex items-center px-6 py-2 border border-transparent text-sm
                    leading-6 font-medium rounded-md text-white bg-primary  hover:bg-gray-800 focus:outline-none
                     transition duration-150 ease-in-out">Add Bank</a>
            </button>
        </div>
    </div>

    <div class="relative w-[95%] mx-auto overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-white">
            <thead class="text-sm text-white uppercase  bg-gray-800">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID bank
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Logo
                    </th>

                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['banks'] as $bank) {  ?>
                   

                    <tr class="bg-white border-b  hover:bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap ">
                            <?= $bank->bankID ?>
                        </th>
                        <td class="px-6 py-4 px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                            <?= $bank->bankName ?>
                        </td>
                        <td class="px-6 py-4 px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                            <img src="<?= URLROOT . '/img/uploads/' . $bank->bankLogo?>" alt="Logo" class="w-30 h-16">
                        </td>
    
                        <td class="px-6 py-4 px-6 py-4 gap-1 flex items-center justify-center font-medium text-gray-800 whitespace-nowrap ">
                            <!-- ============ Update Button =============  -->
                            <a href="<?= URLROOT ?>/admin/updateBank?id=<?php echo $bank->bankID; ?>" class="font-medium text-green-400  hover:underline">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                            </a>
                            <!-- ============ Delete Button =============  -->
                            <a href="<?= URLROOT ?>/admin/deleteBank?id=<?php echo $bank->bankID; ?>" class="font-medium text-rose-500  hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>



</main>

</section>
<?php require APPROOT . '/views/incFile/footer.php';?>