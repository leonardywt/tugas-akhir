<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<!-- Table Section -->
<div class="max-w-[85rem] py-6 lg:py-3 px-8 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-y-auto">
            <div class="sm:px-6 min-w-full inline-block align-middle">

                <div class="p-5 bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                    <!-- Header -->
                    <div class="py-1 flex justify-between items-center border-gray-200 dark:border-gray-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                Sisa Stok Barang Medis
                            </h2>

                        </div>

                    </div>
                    <!-- End Header -->
                    <div class="py-4 grid gap-3 md:items-start">
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

                    <div id="noDataFound" style="display: none;">Data tidak ditemukan</div>
                    <!-- Table -->

                    <table id="myTable" class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        
                        <thead class="bg-gray-50 dark:bg-slate-800">
                            <tr>


                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center justify-center">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Nama Barang
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center justify-center">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Apotek
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center justify-center">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Nomor Faktur
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center justify-center">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Nomor Faktur TEs
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center justify-center">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Nomor Faktur Tos
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center justify-center">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Status
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center justify-center">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Aksi
                                        </span>
                                    </div>
                                </th>

                            </tr>
                        </thead>



                        <div class="overflow-x-auto">
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="h-px w-64 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-center block text-sm font-semibold text-gray-800 dark:text-gray-200">ini medis</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-64 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-center block text-sm font-semibold text-gray-800 dark:text-gray-200">ini medis</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-64 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-center block text-sm font-semibold text-gray-800 dark:text-gray-200">ini medis</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-64 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-center block text-sm font-semibold text-gray-800 dark:text-gray-200">ini medis</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-64 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-center block text-sm font-semibold text-gray-800 dark:text-gray-200">ini medis</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-64 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-center block text-sm font-semibold text-gray-800 dark:text-gray-200">ini medis</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-64 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-center block text-sm font-semibold text-gray-800 dark:text-gray-200">ini medis</span>
                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        </div>

                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                        <!-- Pagination -->

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
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable"); // Pastikan ini mengacu pada ID tabel yang benar

        if (!table) return; // Pastikan tabel ada sebelum melanjutkan

        tr = table.getElementsByTagName("tr");
        var dataFound = false;

        // Iterate over all table rows (including header row)
        for (i = 0; i < tr.length; i++) {
            var found = false;

            // Check if it's a regular row (skip header row)
            if (i > 0) {
                td = tr[i].getElementsByTagName("td");

                // Iterate over all td elements in the row
                for (j = 0; j < td.length; j++) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break; // Break out of inner loop if match found
                    }
                }

                // Show or hide row based on search result
                if (found) {
                    tr[i].style.display = "";
                    dataFound = true;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block'
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
    }

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none'
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Select the warning message element
        var warningMessage = document.getElementById('warningMessage');

        // Check if the warning message exists
        if (warningMessage) {
            // Fade out the warning message after 5 seconds (5000 milliseconds)
            setTimeout(function() {
                warningMessage.style.opacity = '0';
                // Optionally, remove the element from the DOM after fading out
                setTimeout(function() {
                    warningMessage.remove();
                }, 1000); // 1 second delay after fading out
            }, 5000); // 5 seconds delay before fading out
        }
    });
</script>
<?= $this->endSection(); ?>