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
                            <h2 class="mb-2 text-xl font-semibold text-gray-800 dark:text-gray-200">
                                Tagihan Barang Medis
                            </h2>

                        </div>


                    </div>
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
                    <!-- End Header -->

                    <!-- Table -->
                    <table id="myTable" class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <colgroup>
                            <col width="18%">
                            <col width="18%">
                            <col width="18%">
                            <col width="22%">
                            <col width="24%">
                        </colgroup>
                        <thead class="bg-gray-50 dark:bg-slate-800">
                            <tr>
                                <!-- <th scope="col" class="ps-6 py-3 text-start">
                                    <label for="hs-at-with-checkboxes-main" class="flex">
                                        <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-main">
                                        <span class="sr-only">Checkbox</span>
                                    </label>
                                </th> -->

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center justify-center gap-x-2">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Tanggal Bayar
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-center gap-x-2">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            No Faktur
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center justify-center gap-x-2">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Jumlah bayar
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center justify-center gap-x-2">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Status
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center justify-center gap-x-2">
                                        <span class="text-xs tracking-wide text-[#666666]">
                                            Aksi
                                        </span>
                                    </div>
                                </th>

                            </tr>
                        </thead>




                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <?php foreach ($pengajuan_data as $pengajuan) : ?>
                                <?php if ($pengajuan['status_pesanan'] === '6' || $pengajuan['status_pesanan'] === '7') { ?>
                                    <?php foreach ($pemesanan_data as $pemesanan) : ?>
                                        <?php foreach ($penerimaan_data as $penerimaan) : ?>
                                            <?php foreach ($tagihan_medis_data as $tagihan) : ?>
                                                <?php if ($tagihan['id_pengajuan'] === $pengajuan['id'] && $tagihan['id_penerimaan'] === $penerimaan['id'] && $pemesanan['id_pengajuan'] === $pengajuan['id']) : ?>
                                                    <div id="hs-vertically-centered-scrollable-modal-<?= $tagihan['id'] ?>" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                                                            <div class="w-full max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                                    <h3 class="font-bold text-gray-800 dark:text-white">
                                                                        <?= $penerimaan['no_faktur'] ?>
                                                                    </h3>
                                                                    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-vertically-centered-scrollable-modal-<?= $tagihan['id'] ?>">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                            <path d="M18 6 6 18"></path>
                                                                            <path d="m6 6 12 12"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="p-4 overflow-y-auto">
                                                                    <div class="space-y-12">
                                                                        <div>
                                                                            <div class="mb-5 sm:block md:flex items-center">
                                                                                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/2">Nomor Faktur</label>
                                                                                <input type="text" name="" value="<?= $penerimaan['no_faktur'] ?>" class="bg-gray-100 text-gray-900 text-sm rounded-lg p-2 w-full md:w-1/2 dark:border-gray-600 dark:text-white" readonly>
                                                                            </div>

                                                                            <div class="mb-5 sm:block md:flex items-center">
                                                                                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/2">Tanggal Pemesanan</label>
                                                                                <input type="text" name="" value="<?php
                                                                                                                    // Tanggal asli dari data
                                                                                                                    $original_date = $tagihan['tanggal_bayar'];


                                                                                                                    // Format tanggal sebagai dd-Bulan-yyyy (misal: 27 Juni 2024)

                                                                                                                    // Pisahkan tanggal, bulan, dan tahun dari tanggal asli
                                                                                                                    $day = date("d", strtotime($original_date));
                                                                                                                    $month = date("m", strtotime($original_date));
                                                                                                                    $year = date("Y", strtotime($original_date));

                                                                                                                    // Daftar nama bulan dalam bahasa Indonesia
                                                                                                                    $bulan = array(
                                                                                                                        1 => "Januari", 2 => "Februari", 3 => "Maret", 4 => "April", 5 => "Mei", 6 => "Juni",
                                                                                                                        7 => "Juli", 8 => "Agustus", 9 => "September", 10 => "Oktober", 11 => "November", 12 => "Desember"
                                                                                                                    );

                                                                                                                    // Format tanggal sesuai dengan format yang diinginkan
                                                                                                                    $formatted_date = $day . ' ' . $bulan[(int)$month] . ' ' . $year;

                                                                                                                    echo $formatted_date;

                                                                                                                    ?>" class="bg-gray-100 text-gray-900 text-sm rounded-lg p-2 w-full md:w-1/2 dark:border-gray-600 dark:text-white" readonly>
                                                                            </div>

                                                                            <div class="mb-5 sm:block md:flex items-center">
                                                                                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/2">Jumlah Bayar</label>
                                                                                <input type="text" name="" value="<?= $tagihan['jumlah_bayar'] ?>" class="bg-gray-100 text-gray-900 text-sm rounded-lg p-2 w-full md:w-1/2 dark:border-gray-600 dark:text-white" readonly>
                                                                            </div>
                                                                            <div class="mb-5 sm:block md:flex items-center">
                                                                                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/2">Pegawai</label>
                                                                                <input type="text" name="" value="<?php foreach ($pegawai_data as $pegawai) {
                                                                                                                        if ($pegawai['id'] === $tagihan['id_pegawai']) {
                                                                                                                            echo $pegawai['nama'];
                                                                                                                        }
                                                                                                                    } ?>" class="bg-gray-100 text-gray-900 text-sm rounded-lg p-2 w-full md:w-1/2 dark:border-gray-600 dark:text-white" readonly>
                                                                            </div>
                                                                            <div class="mb-5 sm:block md:flex items-center">
                                                                                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/2">Keterangan</label>
                                                                                <input type="text" name="" value="<?= $tagihan['keterangan'] ?>" class="bg-gray-100 text-gray-900 text-sm rounded-lg p-2 w-full md:w-1/2 dark:border-gray-600 dark:text-white" readonly>
                                                                            </div>
                                                                            <div class="mb-5 sm:block md:flex items-center">
                                                                                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/2">Nomor Bukti</label>
                                                                                <input type="text" name="" value="<?= $tagihan['no_bukti'] ?>" class="bg-gray-100 text-gray-900 text-sm rounded-lg p-2 w-full md:w-1/2 dark:border-gray-600 dark:text-white" readonly>
                                                                            </div>
                                                                            <div class="mb-5 sm:block md:flex items-center">
                                                                                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/2">Akun Bayar</label>
                                                                                <input type="text" name="" value="<?= $tagihan['id_akun_bayar'] ?>" class="bg-gray-100 text-gray-900 text-sm rounded-lg p-2 w-full md:w-1/2 dark:border-gray-600 dark:text-white" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="pt-2 border-t border-[#F1F1F1]">
                                                                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Pesanan</h3>
                                                                            <div>

                                                                                <div class="flex items-center justify-between mb-2">
                                                                                    <div class="w-1/2">


                                                                                    </div>
                                                                                    <div class="flex justify-end w-1/2">
                                                                                        <p class="font-bold mr-2 text-center text-gray-900 text-sm rounded-lg w-full">Harga/Item</p>
                                                                                        <p class="font-bold text-center text-gray-900 text-sm rounded-lg w-full">Total/Item</p>
                                                                                    </div>
                                                                                </div>



                                                                                <?php $subtotal = 0;
                                                                                foreach ($pesanan_data as $pesanan) {

                                                                                    if ($pesanan['id_pengajuan'] === $pemesanan['id_pengajuan']) {
                                                                                        $subtotal += $pesanan['total_per_item'] ?>

                                                                                        <div class="flex items-center justify-between">
                                                                                            <div class="w-1/2 font-medium">
                                                                                                <?php foreach ($medis_data as $medis) {
                                                                                                    if ($medis['id'] === $pesanan['id_barang_medis']) {
                                                                                                        echo $medis['nama'];
                                                                                                    }
                                                                                                } ?>
                                                                                                <br>
                                                                                            </div>
                                                                                            <div class="flex justify-end w-1/2">
                                                                                                <input type="text" name="" value="<?= "Rp " . number_format($pesanan['harga_satuan_pemesanan'], 0, ',', '.') ?>" class="text-center mr-2 bg-gray-100 text-gray-900 text-sm rounded-lg px-2 py-1 w-full dark:border-gray-600 dark:text-white" readonly>
                                                                                                <input type="text" name="" value="<?= "Rp " . number_format($pesanan['total_per_item'], 0, ',', '.') ?? "Belum ada total" ?>" class="text-center bg-gray-100 font-[600] text-gray-900 text-sm rounded-lg px-2 py-1 w-full dark:border-gray-600 dark:text-white" readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div><small>Jumlah:
                                                                                                <?= $pesanan['jumlah_pesanan'] ?> <?php foreach ($satuan_data as $satuan) {
                                                                                                                                        if ($satuan['id'] === $pesanan['satuan'] && $pesanan['satuan'] !== 1) {
                                                                                                                                            echo $satuan['nama'];
                                                                                                                                        } else {
                                                                                                                                            echo '';
                                                                                                                                        }
                                                                                                                                    } ?>
                                                                                            </small></div>
                                                                                        <div class="flex justify-between py-1">
                                                                                            <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white md:w-1/2">Diskon Persen (Jumlah)</label>
                                                                                            <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white"><?= number_format($pesanan['diskon_persen'], 0, ',', '.') . "% (Rp" . number_format($pesanan['diskon_jumlah'], 0, ',', '.') . ")" ?></label>
                                                                                        </div>
                                                                                        <div class="flex justify-between py-1">
                                                                                            <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white md:w-1/2">Total/Item</label>
                                                                                            <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white">Rp <?= number_format($pesanan['total_per_item'], 0, ',', '.'); ?></label>
                                                                                        </div>
                                                                                        <br>

                                                                                <?php }
                                                                                } ?>
                                                                                <div>
                                                                                    <div class="flex justify-between py-1">
                                                                                        <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white md:w-1/2">Total (Sblm Pajak)</label>
                                                                                        <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white">Rp <?= number_format($subtotal, 0, ',', '.') ?> </label>
                                                                                    </div>

                                                                                    <div class="flex justify-between py-1">
                                                                                        <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white md:w-1/2">Pajak Persen (Jumlah)</label>
                                                                                        <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white"> <?= $pemesanan['pajak_persen'] ?>% (<?= number_format($pemesanan['pajak_jumlah'], 0, ',', '.') ?>)</label>
                                                                                    </div>
                                                                                    <div class="flex justify-between py-1">
                                                                                        <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white md:w-1/2">Materai</label>
                                                                                        <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white">Rp <?= number_format($pemesanan['materai'], 0, ',', '.') ?></label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="border-t border-[#F1F1F1] my-2">
                                                                                    <div class="flex justify-between pt-1">
                                                                                        <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white md:w-1/2">Total Tagihan</label>
                                                                                        <label class="block mb-2 md:mb-0 text-sm font-[600] text-gray-900 dark:text-white">Rp <?= number_format($pemesanan['total_pemesanan'], 0, ',', '.') ?></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <tr>
                                                        <td class="h-px w-64 whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <span class=" text-center block text-sm font-semibold text-gray-800 cursor-pointer dark:text-gray-200 hover:underline" data-id="<?= $tagihan['id'] ?>"><?php $original_date = $tagihan['tanggal_bayar'];
                                                                                                                                                                                                                        $day = date("d", strtotime($original_date));
                                                                                                                                                                                                                        $month = date("m", strtotime($original_date));
                                                                                                                                                                                                                        $year = date("Y", strtotime($original_date));

                                                                                                                                                                                                                        // Daftar nama bulan dalam bahasa Indonesia
                                                                                                                                                                                                                        $bulan = array(
                                                                                                                                                                                                                            1 => "Januari", 2 => "Februari", 3 => "Maret", 4 => "April", 5 => "Mei", 6 => "Juni",
                                                                                                                                                                                                                            7 => "Juli", 8 => "Agustus", 9 => "September", 10 => "Oktober", 11 => "November", 12 => "Desember"
                                                                                                                                                                                                                        );

                                                                                                                                                                                                                        // Format tanggal sesuai dengan format yang diinginkan
                                                                                                                                                                                                                        $formatted_date = $day . ' ' . $bulan[(int)$month] . ' ' . $year;

                                                                                                                                                                                                                        echo $formatted_date; ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-72 whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <span class=" text-center block text-sm font-semibold cursor-pointer hover:underline text-gray-800 dark:text-gray-200" data-hs-overlay="#hs-vertically-centered-scrollable-modal-<?= $tagihan['id'] ?>"><?= $penerimaan['no_faktur'] ?? 'N/A' ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-72 whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <span class=" text-center block cursor-default text-sm font-semibold text-gray-800 dark:text-gray-200"><?= $tagihan['jumlah_bayar'] ?? 'N/A' ?></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="px-6 py-3 text-center ">
                                                                <?php
                                                                switch ($pengajuan['status_pesanan']) {

                                                                    case '6':
                                                                        echo '<span class="px-2 py-1.5 inline-flex items-center gap-x-1 text-xs font-semibold bg-[#FEF9C3] text-[#F49A35] rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                                                            <path d="M0 0V12.6667L2 11.3333L4 12.6667L6 11.3333L6.86667 11.9067C6.73333 11.52 6.66667 11.1 6.66667 10.6667C6.66708 10.0268 6.82086 9.39641 7.1151 8.82825C7.40935 8.26009 7.83549 7.77073 8.35782 7.40118C8.88014 7.03163 9.48344 6.79267 10.1171 6.70431C10.7509 6.61594 11.3965 6.68077 12 6.89333V0H0ZM9.33333 2.66667V4H2.66667V2.66667H9.33333ZM8 5.33333V6.66667H2.66667V5.33333H8ZM8.33333 10.6667L10.1667 12.6667L13.3333 9.48667L12.56 8.54667L10.1667 10.94L9.10667 9.88L8.33333 10.6667Z" fill="#D97706"/>
                                                                            </svg>
                                                                        Tagihan belum lunas
                                                                    </span>';
                                                                        break;
                                                                    case '7':
                                                                        echo '<span class="px-2 py-1.5 inline-flex items-center gap-x-1 text-xs font-semibold bg-[#D6F9F3] text-[#13594E] rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                        <path d="M10 11.1267V8.66667H11V10.5467L12.6267 11.4867L12.1267 12.3533L10 11.1267ZM2 14.6667V2H14V7.4C14.8267 8.24 15.3333 9.39333 15.3333 10.6667C15.3333 13.2467 13.2467 15.3333 10.6667 15.3333C10.0242 15.3351 9.38844 15.2033 8.79967 14.9462C8.21091 14.6891 7.68205 14.3124 7.24667 13.84L6 14.6667L4 13.3333L2 14.6667ZM6.44667 8.66667C6.68667 8.16667 7 7.71333 7.4 7.33333H4.66667V8.66667H6.44667ZM11.3333 6V4.66667H4.66667V6H11.3333ZM10.6667 14C12.5067 14 14 12.5067 14 10.6667C14 8.82667 12.5067 7.33333 10.6667 7.33333C8.82667 7.33333 7.33333 8.82667 7.33333 10.6667C7.33333 12.5067 8.82667 14 10.6667 14Z" fill="#13594E"/>
                                                                        </svg>
                                                                            Tagihan telah Dibayar
                                                                        </span>';
                                                                        break;
                                                                    default:
                                                                        echo '<span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-[#F1F1F1]">
                                                                    <span class="size-1.5 inline-block rounded-full bg-[#535353]"></span>
                                                                         Tidak ada status
                                                                    </span>';
                                                                        break;
                                                                }
                                                                ?>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-1.5 inline-flex">
                                                                <div class="px-3 py-1.5">
                                                                    <button type="button" class="gap-x-1 text-sm decoration-2 hover:underline font-semibold dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-vertically-centered-scrollable-modal-<?= $tagihan['id'] ?>">
                                                                        Lihat Detail
                                                                    </button>
                                                                </div>
                                                                <div class="px-3 py-1.5">
                                                                    <a href="/tagihanmedis/edit/<?= $tagihan['id'] ?>" class="gap-x-1 text-sm text-blue-600 decoration-2 hover:underline font-semibold dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                                                                        Ubah
                                                                    </a>
                                                                </div>
                                                                <div class="px-3 py-1.5">
                                                                    <button class="gap-x-1 text-sm text-red-600 decoration-2 hover:underline font-semibold dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" onclick="openModal('modelConfirm-<?= $tagihan['id'] ?>')" href="#">
                                                                        Hapus
                                                                    </button>
                                                                    <div id="modelConfirm-<?= $tagihan['id'] ?>" class="fixed hidden z-[70] inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
                                                                        <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">

                                                                            <div class="flex justify-end p-2">
                                                                                <button onclick="closeModal('modelConfirm-<?= $tagihan['id'] ?>')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>

                                                                            <div class="p-6 pt-0 text-center">
                                                                                <div class="flex justify-center mb-6"> <!-- Container for SVG, centered -->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                                                                        <path d="M8.5 11H40.5" stroke="#DA4141" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                                                        <path d="M18.5 5H30.5" stroke="#DA4141" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                                                        <path d="M12.5 17H36.5V40C36.5 41.6569 35.1569 43 33.5 43H15.5C13.8431 43 12.5 41.6569 12.5 40V17Z" fill="#FEE2E2" stroke="#DA4141" stroke-width="4" stroke-linejoin="round" />
                                                                                        <path d="M20.5 25L28.5 33" stroke="#DA4141" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                                                        <path d="M28.5 25L20.5 33" stroke="#DA4141" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                                                    </svg>
                                                                                </div>
                                                                                Hapus data
                                                                                <h3 class="text-xl text-wrap font-normal text-gray-500 mt-5 mb-6">Apakah anda yakin untuk menghapus data ini?</h3>
                                                                                <form action="/tagihanmedis/hapus/<?= $tagihan['id'] ?>" method="POST">
                                                                                    <?= csrf_field() ?>
                                                                                    <div class="w-full sm:flex justify-center">
                                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                                        <button onclick="closeModal('modelConfirm-<?= $tagihan['id'] ?>')" class="w-full text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center justify-center px-3 py-2.5 text-center mr-2">
                                                                                            Hapus
                                                                                        </button>
                                                                                        <a href="#" onclick="closeModal('modelConfirm-<?= $tagihan['id'] ?>')" class="w-full text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center justify-center rounded-lg text-base px-3 py-2.5 text-center" data-modal-toggle="delete-user-modal">
                                                                                            Batal
                                                                                        </a>
                                                                                    </div>
                                                                                </form>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>


                                                    </tr>

                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                <?php } ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                        <!-- Pagination -->
                        <nav class="flex w-full justify-between items-center gap-x-1">
                            <!-- Previous Button -->
                            <div class="inline-flex gap-x-2">
                                <button type="button" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Previous page" <?= $meta_data['page'] <= 1 ? 'disabled' : '' ?> onclick="window.location.href='/tagihanmedis?page=<?= $meta_data['page'] - 1 ?>&size=<?= $meta_data['size'] ?>'">
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6"></path>
                                    </svg>
                                    <span aria-hidden="true" class="hidden sm:block">Previous</span>
                                </button>
                            </div>

                            <!-- Page Numbers -->
                            <div class="flex items-center gap-x-1">
                                <?php
                                $total_pages = $meta_data['total'];
                                $current_page = $meta_data['page'];
                                $range = 2; // Number of pages to show before and after the current page
                                $show_items = ($range * 2) + 1;

                                if ($total_pages <= $show_items) {
                                    for ($i = 1; $i <= $total_pages; $i++) {
                                        echo '<button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center ' . ($current_page == $i ? 'bg-gray-200 text-gray-800 dark:bg-neutral-600 dark:focus:bg-neutral-500' : 'text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10') . ' py-2 px-3 text-sm rounded-lg" ' . ($current_page == $i ? 'aria-current="page"' : '') . ' onclick="window.location.href=\'/tagihanmedis?page=' . $i . '&size=' . $meta_data['size'] . '\'">' . $i . '</button>';
                                    }
                                } else {
                                    if ($current_page > $range + 1) {
                                        echo '<button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10 py-2 px-3 text-sm rounded-lg" onclick="window.location.href=\'/tagihanmedis?page=1&size=' . $meta_data['size'] . '\'">1</button>';
                                        if ($current_page > $range + 2) {
                                            echo '<span class="py-2 px-3 text-sm">...</span>';
                                        }
                                    }

                                    for ($i = max($current_page - $range, 1); $i <= min($current_page + $range, $total_pages); $i++) {
                                        echo '<button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center ' . ($current_page == $i ? 'bg-gray-200 text-gray-800 dark:bg-neutral-600 dark:focus:bg-neutral-500' : 'text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10') . ' py-2 px-3 text-sm rounded-lg" ' . ($current_page == $i ? 'aria-current="page"' : '') . ' onclick="window.location.href=\'/tagihanmedis?page=' . $i . '&size=' . $meta_data['size'] . '\'">' . $i . '</button>';
                                    }

                                    if ($current_page < $total_pages - $range - 1) {
                                        if ($current_page < $total_pages - $range - 2) {
                                            echo '<span class="py-2 px-3 text-sm">...</span>';
                                        }
                                        echo '<button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10 py-2 px-3 text-sm rounded-lg" onclick="window.location.href=\'/tagihanmedis?page=' . $total_pages . '&size=' . $meta_data['size'] . '\'">' . $total_pages . '</button>';
                                    }
                                }
                                ?>
                            </div>

                            <!-- Next Button -->
                            <div class="inline-flex gap-x-2">
                                <button type="button" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Next page" <?= $current_page >= $total_pages ? 'disabled' : '' ?> onclick="window.location.href='/tagihanmedis?page=<?= $current_page + 1 ?>&size=<?= $meta_data['size'] ?>'">
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
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        th = table.getElementsByTagName("th"); // Get all th elements

        var dataFound = false;

        // Iterate over table rows (including header row)
        for (i = 0; i < tr.length; i++) {
            var found = false;

            // Check if it's a header row (th elements)
            if (i === 0) {
                // Iterate over th elements
                for (j = 0; j < th.length; j++) {
                    txtValue = th[j].textContent || th[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }
            } else {
                // Iterate over td elements in regular rows
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }
            }

            if (found) {
                tr[i].style.display = "";
                dataFound = true;
            } else {
                tr[i].style.display = "none";
            }
        }

        // Show/hide message if no data found
        if (!dataFound) {
            document.getElementById("noDataFound").style.display = "block";
        } else {
            document.getElementById("noDataFound").style.display = "none";
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
</script>
<?= $this->endSection(); ?>