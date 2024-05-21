<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>




<!-- Table Section -->
<div class="overflow overflow-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-3.5 overflow-x-auto">
            <div class="p-1.5 w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
                    <!-- Header -->
                    <div class="px-6 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                        <div class="border-b border-gray-200 dark:border-neutral-700">
                            <nav class="flex space-x-1" aria-label="Tabs" role="tablist">
                                <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-gray-800 hs-tab-active:text-gray-800 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-gray-500 active" id="tabs-with-icons-item-1" data-hs-tab="#tabs-with-icons-1" aria-controls="tabs-with-icons-1" role="tab">
                                    <svg class="flex-shrink-0 size-4" fill="#00000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">

                                            <path d="M9.6,3.32a3.86,3.86,0,1,0,3.86,3.85A3.85,3.85,0,0,0,9.6,3.32M16.35,11a.26.26,0,0,0-.25.21l-.18,1.27a4.63,4.63,0,0,0-.82.45l-1.2-.48a.3.3,0,0,0-.3.13l-1,1.66a.24.24,0,0,0,.06.31l1,.79a3.94,3.94,0,0,0,0,1l-1,.79a.23.23,0,0,0-.06.3l1,1.67c.06.13.19.13.3.13l1.2-.49a3.85,3.85,0,0,0,.82.46l.18,1.27a.24.24,0,0,0,.25.2h1.93a.24.24,0,0,0,.23-.2l.18-1.27a5,5,0,0,0,.81-.46l1.19.49c.12,0,.25,0,.32-.13l1-1.67a.23.23,0,0,0-.06-.3l-1-.79a4,4,0,0,0,0-.49,2.67,2.67,0,0,0,0-.48l1-.79a.25.25,0,0,0,.06-.31l-1-1.66c-.06-.13-.19-.13-.31-.13L19.5,13a4.07,4.07,0,0,0-.82-.45l-.18-1.27a.23.23,0,0,0-.22-.21H16.46M9.71,13C5.45,13,2,14.7,2,16.83v1.92h9.33a6.65,6.65,0,0,1,0-5.69A13.56,13.56,0,0,0,9.71,13m7.6,1.43a1.45,1.45,0,1,1,0,2.89,1.45,1.45,0,0,1,0-2.89Z"></path>
                                        </g>
                                    </svg>
                                    Daftar Pegawai
                                </button>
                                <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-gray-800 hs-tab-active:text-gray-800 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-gray-500" id="tabs-with-icons-item-2" data-hs-tab="#tabs-with-icons-2" aria-controls="tabs-with-icons-2" role="tab">
                                    <svg class="flex-shrink-0 size-4" fill="#00000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M2,21H8a1,1,0,0,0,0-2H3.071A7.011,7.011,0,0,1,10,13a5.044,5.044,0,1,0-3.377-1.337A9.01,9.01,0,0,0,1,20,1,1,0,0,0,2,21ZM10,5A3,3,0,1,1,7,8,3,3,0,0,1,10,5ZM20.207,9.293a1,1,0,0,0-1.414,0l-6.25,6.25a1.011,1.011,0,0,0-.241.391l-1.25,3.75A1,1,0,0,0,12,21a1.014,1.014,0,0,0,.316-.051l3.75-1.25a1,1,0,0,0,.391-.242l6.25-6.25a1,1,0,0,0,0-1.414Zm-5,8.583-1.629.543.543-1.629L19.5,11.414,20.586,12.5Z"></path>
                                        </g>
                                    </svg>
                                    Ketersediaan Pegawai
                                </button>
                            </nav>
                        </div>

                    </div>
                    <!-- End Header -->





                    <div id="tabs-with-icons-1" role="tabpanel" aria-labelledby="tabs-with-icons-item-1">

                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-gray-200 dark:border-neutral-700">
                            <div class="sm:col-span-1">
                                <label for="hs-as-table-product-review-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <input type="text" id="myInput" onkeyup="myFunction()" class="py-2 px-4 ps-11 block border w-full xl:w-96 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                        <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <table id="myTable" class="min-w-full divide-y divide-gray-50 dark:divid e-neutral-700 text-xs">
                            <thead class="bg-gray-50 divide-y divide-gray-200 dark:bg-neutral-800 dark:divide-neutral-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 dark:border-neutral-700">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Nama
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            NIP
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Jenis Kelamin
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Jabatan
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Departemen
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Status
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Jenis Pegawai
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            No. Telepon
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Awal Masuk
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Aksi
                                        </span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700 text-xs">
                                <?php foreach ($akun_data as $pegawaiEntry) : ?>
                                    <tr>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2 flex items-center gap-x-3">
                                                <a class="flex items-center gap-x-2" href="/detailberkaspegawai/<?= $pegawaiEntry['id'] ?>">
                                                    <span class="font-semibold hover:underline"><?= $pegawaiEntry['nama'] ?? 'N/A' ?></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="font-semibold text-gray-800 dark:text-neutral-200"><?= $pegawaiEntry['nip'] ?? 'N/A' ?></span>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="font-semibold text-gray-800 dark:text-neutral-200"><?= $pegawaiEntry['jenis_kelamin'] ?? 'N/A' ?></span>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="font-semibold text-gray-800 dark:text-neutral-200"><?= $pegawaiEntry['jabatan'] ?? 'N/A' ?></span>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="font-semibold text-gray-800 dark:text-neutral-200"><?= $pegawaiEntry['departemen'] ?? 'N/A' ?></span>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="font-semibold text-gray-800 dark:text-neutral-200"><?= $pegawaiEntry['status_aktif'] ?? 'N/A' ?></span>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="font-semibold text-gray-800 dark:text-neutral-200"><?= $pegawaiEntry['jenis_pegawai'] ?? 'N/A' ?></span>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="font-semibold text-gray-800 dark:text-neutral-200"><?= $pegawaiEntry['telepon'] ?? 'N/A' ?></span>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="font-semibold text-gray-800 dark:text-neutral-200"><?= $pegawaiEntry['tanggal_masuk'] ?? 'N/A' ?></span>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <a class="flex items-center gap-x-2" href="#">
                                                    <span class="font-semibold text-teal-500 decoration-2 hover:underline dark:text-blue-500">Hubungi</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table -->
                    </div>


                    <div id="tabs-with-icons-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-2">
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-gray-200 dark:border-neutral-700">
                            <div class="sm:col-span-1">
                                <label for="hs-as-table-product-review-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <input type="text" id="myInput" onkeyup="myFunction()" class="py-2 px-4 ps-11 block border w-full xl:w-96 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                        <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>


                    <!-- Footer -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                        <!-- Pagination -->
                        <nav class="flex w-full justify-between items-center gap-x-1">
                            <!-- Previous Button -->
                            <div class="inline-flex gap-x-2">
                                <button type="button" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Previous page" <?= $meta_data['page'] <= 1 ? 'disabled' : '' ?> onclick="window.location.href='/datauserpegawai?page=<?= $meta_data['page'] - 1 ?>&size=<?= $meta_data['size'] ?>'">
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6"></path>
                                    </svg>
                                    <span aria-hidden="true" class="hidden sm:block">Previous</span>
                                </button>
                            </div>

                            <!-- Page Numbers -->
                            <div class="flex items-center gap-x-1">
                                <?php for ($i = 1; $i <= $meta_data['total']; $i++) : ?>
                                    <button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center <?= $meta_data['page'] == $i ? 'bg-gray-200 text-gray-800 dark:bg-neutral-600 dark:focus:bg-neutral-500' : 'text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10' ?> py-2 px-3 text-sm rounded-lg" <?= $meta_data['page'] == $i ? 'aria-current="page"' : '' ?> onclick="window.location.href='/datauserpegawai?page=<?= $i ?>&size=<?= $meta_data['size'] ?>'">
                                        <?= $i ?>
                                    </button>
                                <?php endfor; ?>
                            </div>

                            <!-- Next Button -->
                            <div class="inline-flex gap-x-2">
                                <button type="button" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Next page" <?= $meta_data['page'] >= $meta_data['total'] ? 'disabled' : '' ?> onclick="window.location.href='/datauserpegawai?page=<?= $meta_data['page'] + 1 ?>&size=<?= $meta_data['size'] ?>'">
                                    <span aria-hidden="true" class="hidden sm:block">Next</span>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>
                                </button>
                            </div>
                        </nav>
                    </div>

                    <!-- End Footer -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
</div>
<!-- End Table Section -->

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");


        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

<?= $this->endSection(); ?>