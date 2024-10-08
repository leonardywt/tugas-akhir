<body class="bg-gray-50 dark:bg-slate-900">
    <!-- ========== HEADER ========== -->
    <header class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 sm:py-4 lg:ps-64 dark:bg-gray-800 dark:border-gray-700">
        <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6 md:px-8" aria-label="Global">
            <div class="me-5 lg:me-0 lg:hidden">
                <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">
                    <img src="/img/logo-union.png" class="h-4">
                </a>
            </div>

            <div class="w-full flex items-center justify-end ms-auto sm:justify-between sm:gap-x-3 sm:order-3">
                <div class="sm:hidden">
                    <button type="button" class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </button>
                </div>

                <div class="hidden sm:block">
                    <label for="icon" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                            <svg class="flex-shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </div>
                        <input type="text" id="icon" name="icon" class="py-2 px-4 ps-11 block w-full xl:w-96 border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search">
                    </div>
                </div>

                <div class="flex flex-row items-center justify-end gap-2">
                    <button type="button" class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                        </svg>
                    </button>


                    <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">

                        <button id="hs-dropdown-with-header" type="button" class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-gray-800" src="<?php echo session('user_details')['foto'] ?>" alt="Image Description">
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700" aria-labelledby="hs-dropdown-with-header">
                            <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg dark:bg-gray-700">
                                <p class="text-sm text-gray-500 dark:text-gray-400">Signed in as</p>
                                <p class="text-sm font-medium text-gray-800 dark:text-gray-300"><?php echo session('user_details')['email'] ?></p>
                            </div>
                            <div class="mt-2 py-2 first:pt-0 last:pb-0">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                        <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                                    </svg>
                                    Newsletter
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                                        <path d="M3 6h18" />
                                        <path d="M16 10a4 4 0 0 1-8 0" />
                                    </svg>
                                    Purchases
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                                        <path d="M12 12v9" />
                                        <path d="m8 17 4 4 4-4" />
                                    </svg>
                                    Downloads
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="/profile">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                    Lihat profil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Sidebar Toggle -->
    <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center py-4">
            <!-- Navigation Toggle -->
            <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Toggle navigation">
                <span class="sr-only">Toggle Navigation</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" x2="21" y1="6" y2="6" />
                    <line x1="3" x2="21" y1="12" y2="12" />
                    <line x1="3" x2="21" y1="18" y2="18" />
                </svg>
            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="ms-3 flex items-center whitespace-nowrap" aria-label="Breadcrumb">
                <li class="flex items-center text-sm text-gray-800 dark:text-gray-400">
                    Union
                    <svg class="flex-shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </li>
                <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-400" aria-current="page">
                    Dashboard
                </li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <!-- End Sidebar Toggle -->

    <!-- Sidebar -->
    <div id="application-sidebar" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-6">
            <a class="flex-none text-xl font-semibold dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">

                <img src="/img/logo-union.png" class=" h-12">

            </a>
        </div>

        <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="space-y-1.5">
                <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-teal-900 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    <svg class="flex-shrink-0 size-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" stroke="#1C274C" stroke-width="1.5"></path>
                            <path d="M12 15L12 18" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                    Dashboard
                </a>
                </li>

                <li>
                    <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-teal-900 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                        <svg class="flex-shrink-0 size-4" fill="#00000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>Account Settings</title>

                                <path d="M9.6,3.32a3.86,3.86,0,1,0,3.86,3.85A3.85,3.85,0,0,0,9.6,3.32M16.35,11a.26.26,0,0,0-.25.21l-.18,1.27a4.63,4.63,0,0,0-.82.45l-1.2-.48a.3.3,0,0,0-.3.13l-1,1.66a.24.24,0,0,0,.06.31l1,.79a3.94,3.94,0,0,0,0,1l-1,.79a.23.23,0,0,0-.06.3l1,1.67c.06.13.19.13.3.13l1.2-.49a3.85,3.85,0,0,0,.82.46l.18,1.27a.24.24,0,0,0,.25.2h1.93a.24.24,0,0,0,.23-.2l.18-1.27a5,5,0,0,0,.81-.46l1.19.49c.12,0,.25,0,.32-.13l1-1.67a.23.23,0,0,0-.06-.3l-1-.79a4,4,0,0,0,0-.49,2.67,2.67,0,0,0,0-.48l1-.79a.25.25,0,0,0,.06-.31l-1-1.66c-.06-.13-.19-.13-.31-.13L19.5,13a4.07,4.07,0,0,0-.82-.45l-.18-1.27a.23.23,0,0,0-.22-.21H16.46M9.71,13C5.45,13,2,14.7,2,16.83v1.92h9.33a6.65,6.65,0,0,1,0-5.69A13.56,13.56,0,0,0,9.71,13m7.6,1.43a1.45,1.45,0,1,1,0,2.89,1.45,1.45,0,0,1,0-2.89Z"></path>
                            </g>
                        </svg>
                        Akun
                    </a>

                </li>

                <li>
                    <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-teal-900 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                        <svg class="flex-shrink-0 size-4" fill="#000000" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M68.00586,128.0094a130.696,130.696,0,0,1-13.73438,58.69433,4.00047,4.00047,0,1,1-7.16406-3.5625A122.75147,122.75147,0,0,0,60.00586,128.0094a67.71834,67.71834,0,0,1,25.49805-53.084,4.00012,4.00012,0,0,1,5.0039,6.24219A59.75391,59.75391,0,0,0,68.00586,128.0094Zm60-4a4.00019,4.00019,0,0,0-4,4,188.14011,188.14011,0,0,1-23.47363,91.04,4,4,0,1,0,6.99609,3.87988,196.15115,196.15115,0,0,0,24.47754-94.91992A4.0002,4.0002,0,0,0,128.00586,124.0094Zm0-32a36.04061,36.04061,0,0,0-36,36,4,4,0,0,0,8,0,28,28,0,0,1,56,0,218.07144,218.07144,0,0,1-20.89258,93.70019,4.00022,4.00022,0,1,0,7.23633,3.41211,226.01563,226.01563,0,0,0,21.65625-97.1123A36.04061,36.04061,0,0,0,128.00586,92.0094Zm0-64.001a100.11269,100.11269,0,0,0-100,100,91.75393,91.75393,0,0,1-5.23438,30.667,4.00013,4.00013,0,1,0,7.543,2.666,99.75234,99.75234,0,0,0,5.69141-33.333,92,92,0,0,1,184,0,286.23362,286.23362,0,0,1-5.36621,55.22656,4.00093,4.00093,0,0,0,3.15137,4.69825,4.071,4.071,0,0,0,.77734.07617,4.00267,4.00267,0,0,0,3.9209-3.22754,294.305,294.305,0,0,0,5.5166-56.77344A100.1127,100.1127,0,0,0,128.00586,28.00842ZM93.60156,156.0885a3.99683,3.99683,0,0,0-4.71582,3.124,154.73465,154.73465,0,0,1-17.65918,46.64161,4.00015,4.00015,0,1,0,6.92969,3.998,162.72659,162.72659,0,0,0,18.56934-49.04785A3.99978,3.99978,0,0,0,93.60156,156.0885Zm34.4043-96.0791a68.7229,68.7229,0,0,0-8.49512.52637,3.99952,3.99952,0,0,0,.99024,7.9375,60.92544,60.92544,0,0,1,7.50488-.46387,60.06812,60.06812,0,0,1,60,60,255.60237,255.60237,0,0,1-1.94922,31.5039,3.99966,3.99966,0,0,0,3.47363,4.46485,4.1247,4.1247,0,0,0,.5.03027,3.9994,3.9994,0,0,0,3.96387-3.50488,263.39955,263.39955,0,0,0,2.01172-32.49414A68.07728,68.07728,0,0,0,128.00586,60.0094Zm56.93262,128.125a4.00027,4.00027,0,0,0-4.8711,2.87695c-1.4873,5.78125-3.20312,11.57617-5.09961,17.22363a4.00011,4.00011,0,1,0,7.584,2.54688c1.957-5.83008,3.72754-11.81055,5.26367-17.77637A4.00014,4.00014,0,0,0,184.93848,188.1344Z"></path>
                            </g>
                        </svg>
                        Kehadiran
                    </a>

                </li>

                <li>
                    <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-teal-900 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/datauserpegawai">
                        <svg class="flex-shrink-0 size-4" fill="#000000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>suitcase1</title>
                                <path d="M27 29h-23c-1.105 0-2-0.896-2-2v-12c0 0 5.221 2.685 10 3.784v1.216c0 0.553 0.447 1 1 1h5c0.552 0 1-0.447 1-1v-1.216c4.778-1.099 10-3.784 10-3.784v12c0 1.104-0.896 2-2 2zM17 17c0.552 0 1 0.447 1 1v1c0 0.553-0.448 1-1 1h-3c-0.553 0-1-0.447-1-1v-1c0-0.553 0.447-1 1-1h3zM19 17c0-0.553-0.448-1-1-1h-5c-0.553 0-1 0.447-1 1v0.896c-4.779-1.132-10-3.896-10-3.896v-4c0-1.104 0.895-2 2-2h6v-2c0-1.104 0.896-2 2-2h7c1.104 0 2 0.896 2 2v2h6c1.104 0 2 0.896 2 2v4c0 0-5.222 2.764-10 3.896v-0.896zM19 7c0-0.553-0.448-1-1-1h-5c-0.553 0-1 0.447-1 1 0 0.552 0 1 0 1h7c0 0 0-0.448 0-1z"></path>
                            </g>
                        </svg>
                        Pegawai
                    </a>

                </li>
                <li class="hs-accordion" id="users-accordion">
                    <button type="button" class="hs-accordion-toggle hs-accordion-active:bg-gray-100 w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-teal-900 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.6667 1.66699H3.33341C2.50008 1.66699 1.66675 2.41699 1.66675 3.33366V5.84199C1.66675 6.44199 2.02508 6.95866 2.50008 7.25033V16.667C2.50008 17.5837 3.41675 18.3337 4.16675 18.3337H15.8334C16.5834 18.3337 17.5001 17.5837 17.5001 16.667V7.25033C17.9751 6.95866 18.3334 6.44199 18.3334 5.84199V3.33366C18.3334 2.41699 17.5001 1.66699 16.6667 1.66699ZM15.8334 16.667H4.16675V7.50033H15.8334V16.667ZM16.6667 5.83366H3.33341V3.33366L16.6667 3.31699V5.83366Z" fill="#272727" />
                            <path d="M7.5 10H12.5V11.6667H7.5V10Z" fill="#272727" />
                        </svg>
                        Inventaris

                        <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>

                        <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div id="users-accordion" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                        <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
                            <li class="hs-accordion" id="users-accordion-sub-1">
                                <button type="button" class="hs-accordion-toggle hs-accordion-active:bg-gray-100 w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10.0434 1.04199H9.95675C9.20758 1.04199 8.58341 1.04199 8.08841 1.10866C7.56508 1.17866 7.09258 1.33366 6.71341 1.71283C6.33341 2.09283 6.17841 2.56533 6.10841 3.08783C6.04175 3.58366 6.04175 4.20866 6.04175 4.95699V5.02199C6.42258 5.00949 6.83758 5.00449 7.29175 5.00199V5.00033C7.29175 4.19699 7.29341 3.65699 7.34758 3.25449C7.39925 2.87033 7.48841 2.70533 7.59758 2.59699C7.70591 2.48866 7.87008 2.39949 8.25425 2.34699C8.65675 2.29366 9.19675 2.29199 10.0001 2.29199C10.8034 2.29199 11.3434 2.29366 11.7459 2.34783C12.1301 2.39949 12.2951 2.48866 12.4034 2.59783C12.5117 2.70616 12.6009 2.87033 12.6534 3.25449C12.7067 3.65699 12.7084 4.19699 12.7084 5.00033V5.00199C13.1252 5.00293 13.5419 5.00959 13.9584 5.02199V4.95699C13.9584 4.20866 13.9584 3.58366 13.8917 3.08866C13.8217 2.56533 13.6667 2.09283 13.2867 1.71366C12.9076 1.33366 12.4351 1.17866 11.9117 1.10866C11.4167 1.04199 10.7917 1.04199 10.0434 1.04199Z" fill="#26B29D" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66675 11.6667C1.66675 8.52417 1.66675 6.9525 2.64341 5.97667C3.61925 5 5.19091 5 8.33341 5H11.6667C14.8092 5 16.3809 5 17.3567 5.97667C18.3334 6.9525 18.3334 8.52417 18.3334 11.6667C18.3334 14.8092 18.3334 16.3808 17.3567 17.3567C16.3809 18.3333 14.8092 18.3333 11.6667 18.3333H8.33341C5.19091 18.3333 3.61925 18.3333 2.64341 17.3567C1.66675 16.3808 1.66675 14.8092 1.66675 11.6667ZM10.6251 10.4167C10.6251 10.2509 10.5592 10.0919 10.442 9.97473C10.3248 9.85751 10.1658 9.79167 10.0001 9.79167C9.83432 9.79167 9.67535 9.85751 9.55814 9.97473C9.44093 10.0919 9.37508 10.2509 9.37508 10.4167V11.0417H8.75008C8.58432 11.0417 8.42535 11.1075 8.30814 11.2247C8.19093 11.3419 8.12508 11.5009 8.12508 11.6667C8.12508 11.8324 8.19093 11.9914 8.30814 12.1086C8.42535 12.2258 8.58432 12.2917 8.75008 12.2917H9.37508V12.9167C9.37508 13.0824 9.44093 13.2414 9.55814 13.3586C9.67535 13.4758 9.83432 13.5417 10.0001 13.5417C10.1658 13.5417 10.3248 13.4758 10.442 13.3586C10.5592 13.2414 10.6251 13.0824 10.6251 12.9167V12.2917H11.2501C11.4158 12.2917 11.5748 12.2258 11.692 12.1086C11.8092 11.9914 11.8751 11.8324 11.8751 11.6667C11.8751 11.5009 11.8092 11.3419 11.692 11.2247C11.5748 11.1075 11.4158 11.0417 11.2501 11.0417H10.6251V10.4167Z" fill="#0A2D27" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 14.9997C10.8841 14.9997 11.732 14.6485 12.3571 14.0234C12.9822 13.3982 13.3334 12.5504 13.3334 11.6663C13.3334 10.7823 12.9822 9.93444 12.3571 9.30932C11.732 8.6842 10.8841 8.33301 10.0001 8.33301C9.11603 8.33301 8.26818 8.6842 7.64306 9.30932C7.01794 9.93444 6.66675 10.7823 6.66675 11.6663C6.66675 12.5504 7.01794 13.3982 7.64306 14.0234C8.26818 14.6485 9.11603 14.9997 10.0001 14.9997ZM10.6251 10.4163C10.6251 10.2506 10.5592 10.0916 10.442 9.9744C10.3248 9.85719 10.1658 9.79134 10.0001 9.79134C9.83432 9.79134 9.67535 9.85719 9.55814 9.9744C9.44093 10.0916 9.37508 10.2506 9.37508 10.4163V11.0413H8.75008C8.58432 11.0413 8.42535 11.1072 8.30814 11.2244C8.19093 11.3416 8.12508 11.5006 8.12508 11.6663C8.12508 11.8321 8.19093 11.9911 8.30814 12.1083C8.42535 12.2255 8.58432 12.2913 8.75008 12.2913H9.37508V12.9163C9.37508 13.0821 9.44093 13.2411 9.55814 13.3583C9.67535 13.4755 9.83432 13.5413 10.0001 13.5413C10.1658 13.5413 10.3248 13.4755 10.442 13.3583C10.5592 13.2411 10.6251 13.0821 10.6251 12.9163V12.2913H11.2501C11.4158 12.2913 11.5748 12.2255 11.692 12.1083C11.8092 11.9911 11.8751 11.8321 11.8751 11.6663C11.8751 11.5006 11.8092 11.3416 11.692 11.2244C11.5748 11.1072 11.4158 11.0413 11.2501 11.0413H10.6251V10.4163Z" fill="#26B29D" />
                                    </svg>
                                    Barang Medis

                                    <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>

                                    <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                </button>

                                <div id="users-accordion-sub-1" class="border-[#F1F1F1] border-l-[2px] mt-2 hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                    <ul class="ps-2">
                                        <li>
                                            <a href="/datamedis" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                Data
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/stokkeluarmedis" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                                                Stok Keluar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="hs-accordion" id="users-accordion">
                    <button type="button" class="hs-accordion-toggle hs-accordion-active:bg-gray-100 w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-teal-900 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9583 5.8334C18.958 5.11119 18.7944 4.3984 18.4798 3.74831C18.1652 3.09823 17.7077 2.52767 17.1416 2.07928C16.5754 1.6309 15.9152 1.3163 15.2104 1.15899C14.5055 1.00168 13.7742 1.00575 13.0711 1.17087C12.368 1.336 11.7114 1.65792 11.1502 2.11256C10.5891 2.56721 10.138 3.14282 9.8306 3.79636C9.52324 4.4499 9.36758 5.16446 9.37527 5.88663C9.38296 6.60879 9.55379 7.31988 9.875 7.96673C9.88041 7.97717 9.88407 7.98843 9.88583 8.00006V8.0059L9.63833 8.9334C9.58549 9.13112 9.58559 9.33927 9.63863 9.53694C9.69166 9.73462 9.79576 9.91486 9.94048 10.0596C10.0852 10.2043 10.2654 10.3084 10.4631 10.3614C10.6608 10.4145 10.8689 10.4146 11.0667 10.3617L11.9942 10.1134C11.9925 10.1134 11.9933 10.1134 11.9942 10.1134H12C12.0117 10.1154 12.023 10.1193 12.0333 10.1251C12.764 10.4883 13.5753 10.659 14.3903 10.6209C15.2054 10.5829 15.9972 10.3373 16.6908 9.90743C17.3844 9.4776 17.9567 8.87778 18.3535 8.16481C18.7503 7.45185 18.9585 6.64936 18.9583 5.8334ZM14.1667 2.29173C14.7004 2.29208 15.2272 2.41305 15.7076 2.64562C16.188 2.87818 16.6096 3.21632 16.941 3.63476C17.2723 4.0532 17.5048 4.54112 17.621 5.06205C17.7373 5.58298 17.7343 6.12344 17.6122 6.64305C17.4902 7.16266 17.2523 7.64796 16.9164 8.0627C16.5804 8.47744 16.1551 8.81088 15.6721 9.0381C15.1891 9.26532 14.6611 9.38045 14.1274 9.37487C13.5937 9.36929 13.0681 9.24316 12.59 9.0059C12.3063 8.86179 11.9797 8.82623 11.6717 8.9059L10.8833 9.11673L11.0942 8.3284C11.1739 8.02033 11.1384 7.69374 10.9942 7.41006C10.7257 6.87001 10.5995 6.27033 10.6277 5.66788C10.6559 5.06542 10.8375 4.48015 11.1552 3.96752C11.473 3.45489 11.9164 3.0319 12.4434 2.73863C12.9704 2.44536 13.5636 2.29154 14.1667 2.29173Z" fill="#272727" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1666 3.54199C14.3323 3.54199 14.4913 3.60784 14.6085 3.72505C14.7257 3.84226 14.7916 4.00123 14.7916 4.16699V5.20866H15.8332C15.999 5.20866 16.158 5.27451 16.2752 5.39172C16.3924 5.50893 16.4582 5.6679 16.4582 5.83366C16.4582 5.99942 16.3924 6.15839 16.2752 6.2756C16.158 6.39281 15.999 6.45866 15.8332 6.45866H14.7916V7.50033C14.7916 7.66609 14.7257 7.82506 14.6085 7.94227C14.4913 8.05948 14.3323 8.12533 14.1666 8.12533C14.0008 8.12533 13.8418 8.05948 13.7246 7.94227C13.6074 7.82506 13.5416 7.66609 13.5416 7.50033V6.45866H12.4999C12.3341 6.45866 12.1752 6.39281 12.058 6.2756C11.9408 6.15839 11.8749 5.99942 11.8749 5.83366C11.8749 5.6679 11.9408 5.50893 12.058 5.39172C12.1752 5.27451 12.3341 5.20866 12.4999 5.20866H13.5416V4.16699C13.5416 4.00123 13.6074 3.84226 13.7246 3.72505C13.8418 3.60784 14.0008 3.54199 14.1666 3.54199ZM2.50573 5.33949C3.90573 3.93949 6.26907 4.04616 7.24324 5.79283L7.7849 6.76199C8.42073 7.90199 8.1499 9.34116 7.21823 10.2845C7.1632 10.3679 7.13313 10.4654 7.13157 10.5653C7.12073 10.7787 7.19657 11.2728 7.9624 12.0378C8.7274 12.8028 9.22073 12.8795 9.4349 12.8687C9.53485 12.8671 9.63228 12.837 9.71574 12.782C10.6582 11.8503 12.0982 11.5795 13.2382 12.2153L14.2074 12.757C15.9541 13.732 16.0607 16.0945 14.6607 17.4945C13.9116 18.2428 12.9157 18.9087 11.7457 18.9528C10.0124 19.0187 7.1324 18.5703 4.28074 15.7195C1.4299 12.8678 0.981568 9.98866 1.0474 8.25449C1.09157 7.08366 1.7574 6.08783 2.50573 5.33949ZM6.1524 6.40199C5.6524 5.50699 4.31073 5.30199 3.3899 6.22366C2.74407 6.86949 2.32323 7.58199 2.29657 8.30116C2.24157 9.74783 2.59907 12.2695 5.1649 14.8353C7.73157 17.402 10.2524 17.7587 11.6982 17.7037C12.4174 17.6762 13.1316 17.2562 13.7766 16.6103C14.6982 15.6887 14.4932 14.347 13.5982 13.8478L12.6291 13.307C12.0266 12.9712 11.1791 13.0853 10.5857 13.6803C10.5274 13.7387 10.1549 14.0853 9.49574 14.117C8.82073 14.1503 8.00323 13.847 7.07907 12.922C6.15323 11.997 5.8499 11.1795 5.88323 10.5037C5.9149 9.84449 6.2624 9.47283 6.3199 9.41533C6.9149 8.82033 7.02907 7.97366 6.69323 7.37116L6.1524 6.40199Z" fill="#272727" />
                        </svg>
                        Pengadaan

                        <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>

                        <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div id="users-accordion" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                        <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
                            <li>
                                <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-teal-900 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/dashboardpengadaanmedis">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M15.8333 2.5H4.16667C3.25 2.5 2.5 3.25 2.5 4.16667V15.8333C2.5 16.75 3.25 17.5 4.16667 17.5H15.8333C16.75 17.5 17.5 16.75 17.5 15.8333V4.16667C17.5 3.25 16.75 2.5 15.8333 2.5ZM4.16667 15.8333V4.16667H9.16667V15.8333H4.16667ZM15.8333 15.8333H10.8333V10H15.8333V15.8333ZM15.8333 8.33333H10.8333V4.16667H15.8333V8.33333Z" fill="#272727" />
                                    </svg>
                                    Dashboard
                                </a>

                            </li>

                            <li class="hs-accordion pt-1" id="users-accordion-sub-1">
                                <button type="button" class="hs-accordion-toggle hs-accordion-active:bg-[#ACF2E7] w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10.0434 1.04199H9.95675C9.20758 1.04199 8.58341 1.04199 8.08841 1.10866C7.56508 1.17866 7.09258 1.33366 6.71341 1.71283C6.33341 2.09283 6.17841 2.56533 6.10841 3.08783C6.04175 3.58366 6.04175 4.20866 6.04175 4.95699V5.02199C6.42258 5.00949 6.83758 5.00449 7.29175 5.00199V5.00033C7.29175 4.19699 7.29341 3.65699 7.34758 3.25449C7.39925 2.87033 7.48841 2.70533 7.59758 2.59699C7.70591 2.48866 7.87008 2.39949 8.25425 2.34699C8.65675 2.29366 9.19675 2.29199 10.0001 2.29199C10.8034 2.29199 11.3434 2.29366 11.7459 2.34783C12.1301 2.39949 12.2951 2.48866 12.4034 2.59783C12.5117 2.70616 12.6009 2.87033 12.6534 3.25449C12.7067 3.65699 12.7084 4.19699 12.7084 5.00033V5.00199C13.1252 5.00293 13.5419 5.00959 13.9584 5.02199V4.95699C13.9584 4.20866 13.9584 3.58366 13.8917 3.08866C13.8217 2.56533 13.6667 2.09283 13.2867 1.71366C12.9076 1.33366 12.4351 1.17866 11.9117 1.10866C11.4167 1.04199 10.7917 1.04199 10.0434 1.04199Z" fill="#26B29D" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66675 11.6667C1.66675 8.52417 1.66675 6.9525 2.64341 5.97667C3.61925 5 5.19091 5 8.33341 5H11.6667C14.8092 5 16.3809 5 17.3567 5.97667C18.3334 6.9525 18.3334 8.52417 18.3334 11.6667C18.3334 14.8092 18.3334 16.3808 17.3567 17.3567C16.3809 18.3333 14.8092 18.3333 11.6667 18.3333H8.33341C5.19091 18.3333 3.61925 18.3333 2.64341 17.3567C1.66675 16.3808 1.66675 14.8092 1.66675 11.6667ZM10.6251 10.4167C10.6251 10.2509 10.5592 10.0919 10.442 9.97473C10.3248 9.85751 10.1658 9.79167 10.0001 9.79167C9.83432 9.79167 9.67535 9.85751 9.55814 9.97473C9.44093 10.0919 9.37508 10.2509 9.37508 10.4167V11.0417H8.75008C8.58432 11.0417 8.42535 11.1075 8.30814 11.2247C8.19093 11.3419 8.12508 11.5009 8.12508 11.6667C8.12508 11.8324 8.19093 11.9914 8.30814 12.1086C8.42535 12.2258 8.58432 12.2917 8.75008 12.2917H9.37508V12.9167C9.37508 13.0824 9.44093 13.2414 9.55814 13.3586C9.67535 13.4758 9.83432 13.5417 10.0001 13.5417C10.1658 13.5417 10.3248 13.4758 10.442 13.3586C10.5592 13.2414 10.6251 13.0824 10.6251 12.9167V12.2917H11.2501C11.4158 12.2917 11.5748 12.2258 11.692 12.1086C11.8092 11.9914 11.8751 11.8324 11.8751 11.6667C11.8751 11.5009 11.8092 11.3419 11.692 11.2247C11.5748 11.1075 11.4158 11.0417 11.2501 11.0417H10.6251V10.4167Z" fill="#0A2D27" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 14.9997C10.8841 14.9997 11.732 14.6485 12.3571 14.0234C12.9822 13.3982 13.3334 12.5504 13.3334 11.6663C13.3334 10.7823 12.9822 9.93444 12.3571 9.30932C11.732 8.6842 10.8841 8.33301 10.0001 8.33301C9.11603 8.33301 8.26818 8.6842 7.64306 9.30932C7.01794 9.93444 6.66675 10.7823 6.66675 11.6663C6.66675 12.5504 7.01794 13.3982 7.64306 14.0234C8.26818 14.6485 9.11603 14.9997 10.0001 14.9997ZM10.6251 10.4163C10.6251 10.2506 10.5592 10.0916 10.442 9.9744C10.3248 9.85719 10.1658 9.79134 10.0001 9.79134C9.83432 9.79134 9.67535 9.85719 9.55814 9.9744C9.44093 10.0916 9.37508 10.2506 9.37508 10.4163V11.0413H8.75008C8.58432 11.0413 8.42535 11.1072 8.30814 11.2244C8.19093 11.3416 8.12508 11.5006 8.12508 11.6663C8.12508 11.8321 8.19093 11.9911 8.30814 12.1083C8.42535 12.2255 8.58432 12.2913 8.75008 12.2913H9.37508V12.9163C9.37508 13.0821 9.44093 13.2411 9.55814 13.3583C9.67535 13.4755 9.83432 13.5413 10.0001 13.5413C10.1658 13.5413 10.3248 13.4755 10.442 13.3583C10.5592 13.2411 10.6251 13.0821 10.6251 12.9163V12.2913H11.2501C11.4158 12.2913 11.5748 12.2255 11.692 12.1083C11.8092 11.9911 11.8751 11.8321 11.8751 11.6663C11.8751 11.5006 11.8092 11.3416 11.692 11.2244C11.5748 11.1072 11.4158 11.0413 11.2501 11.0413H10.6251V10.4163Z" fill="#26B29D" />
                                    </svg>
                                    Barang Medis

                                    <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>

                                    <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                </button>

                                <div id="users-accordion-sub-1" class="border-[#F1F1F1] border-l-[2px] mt-2 hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                    <ul class="ps-2">
                                        <li>
                                            <a href="/pengajuanmedis" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                Pengajuan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/pemesananmedis" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                                                Pemesanan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/penerimaanmedis" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                Penerimaan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/tagihanmedis" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                                                Bayar Tagihan
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-teal-900 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/persetujuanpengadaan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M11.1458 18.1869L5.83325 16.6869V9.16602H7.16659C7.26381 9.16602 7.36103 9.17657 7.45825 9.19768C7.55547 9.21879 7.6527 9.24296 7.74992 9.27018L13.5208 11.416C13.7152 11.4855 13.8716 11.6105 13.9899 11.791C14.1083 11.9716 14.1671 12.1591 14.1666 12.3535C14.1666 12.6452 14.0658 12.8813 13.8641 13.0619C13.6624 13.2424 13.4299 13.3327 13.1666 13.3327H10.9791C10.9096 13.3327 10.8577 13.3294 10.8233 13.3227C10.7888 13.316 10.7435 13.2985 10.6874 13.2702L9.74992 12.916C9.63881 12.8744 9.5277 12.8813 9.41658 12.9369C9.30547 12.9924 9.23603 13.0688 9.20825 13.166C9.18047 13.2771 9.18742 13.3813 9.22908 13.4785C9.27075 13.5757 9.34714 13.6452 9.45825 13.6869L10.6874 14.1244C10.7152 14.1382 10.7569 14.1488 10.8124 14.156C10.868 14.1632 10.9166 14.1666 10.9583 14.166H16.6666C17.111 14.166 17.4999 14.3257 17.8333 14.6452C18.1666 14.9646 18.3333 15.3605 18.3333 15.8327L12.1874 18.1452C12.0485 18.2007 11.8785 18.2321 11.6774 18.2394C11.4763 18.2466 11.2991 18.2291 11.1458 18.1869ZM0.833252 16.666V10.8327C0.833252 10.3744 0.996585 9.98213 1.32325 9.65602C1.64992 9.32991 2.04214 9.16657 2.49992 9.16602C2.9577 9.16546 3.3502 9.3288 3.67742 9.65602C4.00464 9.98324 4.1677 10.3755 4.16659 10.8327V16.666C4.16659 17.1244 4.00353 17.5169 3.67742 17.8435C3.35131 18.1702 2.95881 18.3332 2.49992 18.3327C2.04103 18.3321 1.64881 18.1691 1.32325 17.8435C0.997696 17.518 0.834363 17.1255 0.833252 16.666Z" fill="#0A2D27" />
                            <path d="M14.9166 2.72873L10.7707 6.85373L8.99991 5.0829C8.83324 4.91567 8.6388 4.83567 8.41657 4.8429C8.19435 4.85012 7.99991 4.93012 7.83324 5.0829C7.66602 5.24956 7.57907 5.44401 7.57241 5.66623C7.56574 5.88845 7.64574 6.0829 7.81241 6.24956L10.1874 8.62456C10.3541 8.79123 10.5485 8.87456 10.7707 8.87456C10.993 8.87456 11.1874 8.79123 11.3541 8.62456L16.0832 3.8954C16.236 3.74262 16.3124 3.54817 16.3124 3.31206C16.3124 3.07595 16.236 2.88151 16.0832 2.72873C15.9171 2.56151 15.7193 2.48151 15.4899 2.48873C15.2605 2.49595 15.0694 2.57595 14.9166 2.72873Z" fill="#26B29D" />
                        </svg>
                        Persetujuan
                    </a>

                </li>
                </li>


                <li><a href="<?= base_url('/logout') ?>" class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-teal-900 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- End Sidebar -->


    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
</body>