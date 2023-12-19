<?php require APPROOT . '/views/incFile/sidebar.php'; ?>

<main class="w-full h-[calc(100vh-64px)] bg-slate-100 p-10">

    <div class=" w-[95%] mx-auto my-5 flex items-center justify-between p-3 bg-white rounded-lg">
        <h1 class="text-xl font-bold">ADD NEW USER</h1>
        <div class="flex items-center gap-5">
            <button>
                <a href="<?php echo URLROOT?>/admin/user" class="inline-flex items-center px-6 py-2 border border-transparent text-sm
                    leading-6 font-medium rounded-md text-white bg-primary  hover:bg-gray-800 focus:outline-none
                     transition duration-150 ease-in-out">Go back</a>
            </button>
        </div>
    </div>





    <div class="mt-20">

        <form class="w-[60%] mx-auto bg-gray-800 p-6 rounded-lg" method="POST" >
        <h1 class="text-2xl font-bold text-center pb-5 text-white">USER</h1>

            <div class="flex items-center gap-4">
                <div class="py-2 flex-grow">
                    <label for="error" class="block mb-2 text-sm font-medium text-white">Username
                        </label>
                    <input type="text" id="error" required
                        class="<?php if(!empty($data[''])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                        placeholder="Enter Username" name="username">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                </div>
            
                <div class="py-2 flex-grow ">                    
                            <label for="bankname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                            <select id="" name="rolename" class="bg-gray-50 block w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected disabled value="">Select Role</option>
                             
                            <option value="admin">Admin</option>
                            <option value="client">Client</option>
                            </select>

                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                </div>
                <div class="py-2 flex-grow ">                    
                            <label for="bankname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agency</label>
                            <select id="" name="agencyID" class="bg-gray-50 block w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected disabled value="">Select Agency</option>
                            <?php foreach($data['agencies'] as $agency) {?> 
                            <option value="<?= $agency->agencyID ?>"><?= $agency->ville ?></option>
                            <?php } ?>
                            </select>

                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="py-2 flex-grow">
                    <label for="error" class="block mb-2 text-sm font-medium text-white">Password
                        </label>
                    <input type="text" id="error" required
                        class="<?php if(!empty($data[''])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                        placeholder="Enter password" name="password">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                </div>
                <div class="py-2 flex-grow">
                    <label for="error" class="block mb-2 text-sm font-medium text-white">Confirm password
                        </label>
                    <input type="text" id="error" required
                        class="<?php if(!empty($data[''])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                        placeholder="Enter password" name="Confirmpassword">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="py-2 flex-grow">
                    <label for="error" class="block mb-2 text-sm font-medium text-white">Ville</label>
                    <input type="text" id="error" required
                        class="<?php if(!empty($data[''])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                        placeholder="Enter Ville" name="ville">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                </div>
                <div class="py-2 flex-grow">
                    <label for="error" class="block mb-2 text-sm font-medium text-white">Quartier</label>
                    <input type="text" id="error" required
                        class="<?php if(!empty($data[''])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                        placeholder="Enter Quartier" name="quartier">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                </div>

            </div>
            <div class="flex items-center gap-4">
                    <div class="py-2 flex-grow">
                            <label for="error" class="block mb-2 text-sm font-medium text-white">Rue</label>
                            <input type="text" id="error" required
                                class="<?php if(!empty($data[''])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                                placeholder="Enter Rue" name="rue">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                    </div>
                    <div class="py-2 flex-grow">
                            <label for="error" class="block mb-2 text-sm font-medium text-white">Email</label>
                            <input type="text" id="error" required
                                class="<?php if(!empty($data[''])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                                placeholder="Enter Email" name="email">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                    </div>
            </div>
            <div class="flex items-center gap-4">

                <div class="py-2 flex-grow">
                    <label for="error" class="block mb-2 text-sm font-medium text-white">Phone</label>
                    <input type="text" id="error" required
                        class="<?php if(!empty($data[''])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                        placeholder="Enter Phone" name="phone">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                </div>
                <div class="py-2 flex-grow">
                    <label for="error" class="block mb-2 text-sm font-medium text-white">Code Postal</label>
                    <input type="text" id="error" required
                        class="<?php if(!empty($data[''])){echo 'border border-rose-500';}else{echo '';}?> bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                        placeholder="Enter Code postal" name="code">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                </div>
            </div>
            <button type="submit" name="user" class="w-full mt-10 block items-center px-6 py-2 w-full text-center border
                border-transparent text-sm leading-6 font-medium rounded-md text-white bg-primary focus:outline-none
                transition duration-150 ease-in-out">
                Add User
            </button>
        </form>
        <div>
        </div>

</main>

</section>
<?php require APPROOT . '/views/incFile/footer.php';?>