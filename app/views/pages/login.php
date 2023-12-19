<?php require APPROOT . '/views/incFile/header.php'?>
<div class="h-[90vh]">
<?php require APPROOT . '/views/incFile/navbar.php'?>

    <section class="bg-gradient-to-b from-primary to-secondary">
    
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-[calc(100vh-64px)]  lg:py-0">
          <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
            <!-- ========= logo Of bank =========== -->
    
              <div class="p-6 bg-gray-50 space-y-4 md:space-y-6 sm:p-8">
              <div>
                <a href="#" class="flex items-center justify-center gap-3 font-semibold text-gray-900 `">
                    <img class="w-12 h-12" src="<?= URLROOT?>/img/bank-white.png" alt="logo">
                    <h1 class="text-3xl font-bold text-gray-600">C.B.M.</h1> 
                </a>
                </div>
                  <h1 class="text-xl font-bold text-center leading-tight tracking-tight text-gray-900 md:text-2xl ">
                      Sign in to your account
                  </h1>
                  <form class="space-y-4 md:space-y-6"   method="POST">
                      <div>
                          <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                          <input type="text" name="username"  class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Enter username">
                          <span class="text-rose-500 text-sm font-medium"><?= $data['userErr'] ?></span>
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
                          <span class="text-rose-500 text-sm font-medium"><?= $data['passErr'] ?></span>
                        </div>
                      <div class="flex items-center justify-between">
                          <div class="flex items-start">
                              <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                              </div>
                              <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-800 ">Remember me</label>
                              </div>
                          </div>
                      </div>
                      <button type="submit" name="login" class="w-full text-white bg-primary focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-800 block">Sign in</button>
                      <div class="text-rose-500 text-sm font-semibold"><?= $data['loginErr'] ?></div>
                  </form>
              </div>
          </div>
      </div>
    </section>  
</div>
<?php require APPROOT . '/views/incFile/footer.php'?>
