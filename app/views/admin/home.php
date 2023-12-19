<?php require APPROOT . '/views/incFile/sidebar.php'; ?>

<main class="w-full h-[calc(100vh-64px)] bg-slate-100 p-10">
    <div class="">
        <h3 class="text-lg leading-6 font-medium text-gray-900">BANK STATISTICS</h3>

        <dl class="mt-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden w-[280px]">
                <dt>
                    <div class="absolute bg-indigo-500 rounded-md p-3">
                        <!-- Heroicon name: outline/users -->
                        <svg class=" flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <p class="ml-16 text-xm font-medium text-gray-500 truncate">Total Clients</p>
                </dt>
                <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">71,897</p>
                    <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                        <!-- Heroicon name: solid/arrow-sm-up -->
                        <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only"> Increased by </span>
                        122
                    </p>
                    <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span
                                    class="sr-only"> Total Subscribers stats</span></a>
                        </div>
                    </div>
                </dd>
            </div>

            <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden w-[280px]">
                <dt>
                    <div class="absolute bg-indigo-500 rounded-md p-3">
                        <!-- Heroicon name: outline/mail-open -->
                        <svg class=" flex-shrink-0 h-6 w-6 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z" />
                        </svg>
                    </div>
                    <p class="ml-16 text-xm font-medium text-gray-500 truncate">Total Account</p>
                </dt>
                <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">58.16%</p>
                    <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                        <!-- Heroicon name: solid/arrow-sm-up -->
                        <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only"> Increased by </span>
                        33.4%
                    </p>
                    <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span
                                    class="sr-only"> Avg. Open Rate stats</span></a>
                        </div>
                    </div>
                </dd>
            </div>

            <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden w-[280px]">
                <dt>
                    <div class="absolute bg-indigo-500 rounded-md p-3">
                        <!-- Heroicon name: outline/cursor-click -->
                        <svg class=" flex-shrink-0 h-6 w-6 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 14 3-3m-3 3 3 3m-3-3h16v-3m2-7-3 3m3-3-3-3m3 3H3v3" />
                        </svg>
                    </div>
                    <p class="ml-16 text-xm font-medium text-gray-500 truncate">Total Transaction</p>
                </dt>
                <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">24.57%</p>
                    <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                        <!-- Heroicon name: solid/arrow-sm-up -->
                        <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only"> Increased by </span>
                        25.4%
                    </p>
                    <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span
                                    class="sr-only"> Avg. Click Rate stats</span></a>
                        </div>
                    </div>
                </dd>
            </div>


            <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden w-[280px]">
                <dt>
                    <div class="absolute bg-indigo-500 rounded-md p-3">
                        <!-- Heroicon name: outline/cursor-click -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 20">
                            <path
                                d="M18.972.863a.913.913 0 0 0-.041-.207.956.956 0 0 0-.107-.19 1.01 1.01 0 0 0-.065-.116c-.008-.01-.02-.013-.028-.022a1.008 1.008 0 0 0-.174-.137 1.085 1.085 0 0 0-.141-.095 1.051 1.051 0 0 0-.171-.047.985.985 0 0 0-.207-.041C18.025.007 18.014 0 18 0h-3.207a1 1 0 1 0 0 2h.5l-4.552 3.9-3.5-.874a1 1 0 0 0-.867.189l-5 4a1 1 0 0 0 1.25 1.562L7.238 7.09l3.52.88a1 1 0 0 0 .892-.211L17 3.173v1.034a1 1 0 0 0 2 0V1a.9.9 0 0 0-.028-.137ZM13.5 9a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11Zm.24 4.591a3.112 3.112 0 0 1 1.935 1.374 2.036 2.036 0 0 1 .234 1.584 2.255 2.255 0 0 1-1.374 1.469.982.982 0 0 1-1.953.09 2.943 2.943 0 0 1-1.475-.92 1 1 0 0 1 1.536-1.283.953.953 0 0 0 .507.29.778.778 0 0 0 .831-.18 1.108 1.108 0 0 0-.714-.481 3.105 3.105 0 0 1-1.934-1.374 2.042 2.042 0 0 1-.233-1.584 2.264 2.264 0 0 1 1.45-1.493v-.03a1 1 0 0 1 2 0c.517.159.98.457 1.337.862a1.002 1.002 0 1 1-1.524 1.3.962.962 0 0 0-.507-.286.775.775 0 0 0-.829.18 1.113 1.113 0 0 0 .713.482ZM6 20a1 1 0 0 1-1-1v-6a1 1 0 1 1 2 0v6a1 1 0 0 1-1 1Zm-4 0a1 1 0 0 1-1-1v-4a1 1 0 1 1 2 0v4a1 1 0 0 1-1 1Z" />
                        </svg>
                    </div>
                    <p class="ml-16 text-xm font-medium text-gray-500 truncate">Total Bank Money</p>
                </dt>
                <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">24.57%</p>
                    <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                        <!-- Heroicon name: solid/arrow-sm-up -->
                        <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only"> Increased by </span>
                        25.4%
                    </p>
                    <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span
                                    class="sr-only"> Avg. Click Rate stats</span></a>
                        </div>
                    </div>
                </dd>
            </div>
        </dl>
    </div>
    <!-- TABLE Statistique  -->
    <div class="rounded-sm border border-stroke bg-white shadow-default mt-10 w-[1000px]">


        <div class="border-b border-stroke  dark:border-strokedark md:px-6 xl:px-7.5">
            <div class="flex items-center gap-3 p-5">
                <div class="w-2/12 xl:w-3/12">
                    <span class="font-medium">Name</span>
                </div>
                <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                    <span class="font-medium">Email</span>
                </div>
                <div class="hidden w-4/12 md:block xl:w-3/12">
                    <span class="font-medium">Project</span>
                </div>
                <div class="hidden w-1/12 xl:block">
                    <span class="font-medium">Duration</span>
                </div>
                <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                    <span class="font-medium">Status</span>
                </div>
                <div class="hidden w-2/12 text-center 2xsm:block md:w-1/12">
                    <span class="font-medium">Actions</span>
                </div>
            </div>
        </div>



        <div class="flex items-center gap-3">
            <div class="w-2/12 xl:w-3/12 py-3 px-3">
                <div class="flex items-center gap-4">
                    <div class="2xsm:h-11 2xsm:w-full 2xsm:max-w-11 2xsm:rounded-full">
                        <img src="<?php echo URLROOT?>/img/profile.png" alt="User" class="w-8 h-8">
                    </div>
                    <span class="hidden font-medium xl:block">Makenna Carder</span>
                </div>
            </div>
            <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                <span class="font-medium">ltorres@aol.com</span>
            </div>
            <div class="hidden w-4/12 md:block xl:w-3/12">
                <span class="font-medium">25 Dec 2024 - 28 Dec 2024</span>
            </div>
            <div class="hidden w-1/12 xl:block">
                <span class="font-medium">3 Days</span>
            </div>
            <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                <span
                    class="inline-block rounded bg-meta-3/[0.08] py-0.5 px-2.5 text-sm font-medium text-meta-3">Active</span>
            </div>
            <div class="hidden w-2/12 2xsm:block md:w-1/12">
                <button class="mx-auto block hover:text-meta-1">
                    <svg class="mx-auto fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z"
                            fill=""></path>
                        <path
                            d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z"
                            fill=""></path>
                        <path
                            d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z"
                            fill=""></path>
                        <path
                            d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z"
                            fill=""></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <div class="w-2/12 xl:w-3/12 py-3 px-3">
                <div class="flex items-center gap-4">
                    <div class="2xsm:h-11 2xsm:w-full 2xsm:max-w-11 2xsm:rounded-full">
                        <img src="<?php echo URLROOT?>/img/profile.png" alt="User" class="w-8 h-8">
                    </div>
                    <span class="hidden font-medium xl:block">Makenna Carder</span>
                </div>
            </div>
            <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                <span class="font-medium">ltorres@aol.com</span>
            </div>
            <div class="hidden w-4/12 md:block xl:w-3/12">
                <span class="font-medium">25 Dec 2024 - 28 Dec 2024</span>
            </div>
            <div class="hidden w-1/12 xl:block">
                <span class="font-medium">3 Days</span>
            </div>
            <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                <span
                    class="inline-block rounded bg-meta-3/[0.08] py-0.5 px-2.5 text-sm font-medium text-meta-3">Active</span>
            </div>
            <div class="hidden w-2/12 2xsm:block md:w-1/12">
                <button class="mx-auto block hover:text-meta-1">
                    <svg class="mx-auto fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z"
                            fill=""></path>
                        <path
                            d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z"
                            fill=""></path>
                        <path
                            d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z"
                            fill=""></path>
                        <path
                            d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z"
                            fill=""></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <div class="w-2/12 xl:w-3/12 py-3 px-3">
                <div class="flex items-center gap-4">
                    <div class="2xsm:h-11 2xsm:w-full 2xsm:max-w-11 2xsm:rounded-full">
                        <img src="<?php echo URLROOT?>/img/profile.png" alt="User" class="w-8 h-8">
                    </div>
                    <span class="hidden font-medium xl:block">Makenna Carder</span>
                </div>
            </div>
            <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                <span class="font-medium">ltorres@aol.com</span>
            </div>
            <div class="hidden w-4/12 md:block xl:w-3/12">
                <span class="font-medium">25 Dec 2024 - 28 Dec 2024</span>
            </div>
            <div class="hidden w-1/12 xl:block">
                <span class="font-medium">3 Days</span>
            </div>
            <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                <span
                    class="inline-block rounded bg-meta-3/[0.08] py-0.5 px-2.5 text-sm font-medium text-meta-3">Active</span>
            </div>
            <div class="hidden w-2/12 2xsm:block md:w-1/12">
                <button class="mx-auto block hover:text-meta-1">
                    <svg class="mx-auto fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z"
                            fill=""></path>
                        <path
                            d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z"
                            fill=""></path>
                        <path
                            d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z"
                            fill=""></path>
                        <path
                            d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z"
                            fill=""></path>
                    </svg>
                </button>
            </div>
        </div>







    </div>
    </div>
    </div>















    </div>
</main>

</section>
<?php require APPROOT . '/views/incFile/footer.php';?>