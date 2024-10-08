<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
                Tambah Data Barang Medis
            </h2>

        </div>

        <form action="/submittambahmedis" method="post">
            <div class="mb-5 sm:block md:flex items-center">
                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Jenis</label>
                <select id="jenis" name="jenisbrgmedis" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white" required>
                    <option value="" selected>-</option>
                    <option value="Obat">Obat</option>
                    <option value="Alat Kesehatan">Alat Kesehatan</option>
                    <option value="Bahan Habis Pakai">Bahan Habis Pakai</option>
                    <option value="Darah">Darah</option>
                </select>
            </div>
            <div class="mb-5 sm:block md:flex items-center">
                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Nama</label>
                <input type="text" name="nama" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
            </div>


            <!-- Obat -->
            <div class="additionalInputObat hidden">
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Industri Farmasi</label>
                    <select name="industrifarmasi" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <option selected>-</option>
                        <option value="1000">Kalbe Farma</option>
                    </select>
                </div>

                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Kandungan</label>
                    <input type="text" name="kandungan" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
                </div>
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white w-1/5 lg:w-1/4">Isi</label>
                    <input type="text" name="" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white">
                    <label class="block mt-5 md:my-0 md:ml-10 mb-2 text-sm text-gray-900 dark:text-white w-1/5">Satuan Besar</label>
                    <select name="satuanobat" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <?php foreach ($satuan_data as $satuan) : ?>
                            <option value="<?= $satuan['id'] ?>"><?= $satuan['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white w-1/5 lg:w-1/4">Kapasitas</label>
                    <input type="text" name="" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white">
                    <label class="block mt-5 md:my-0 md:ml-10 mb-2 text-sm text-gray-900 dark:text-white w-1/5">Satuan Kecil</label>
                    <select name="satkecil" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <?php foreach ($satuan_data as $satuan) : ?>
                            <option value="<?= $satuan['id'] ?>"><?= $satuan['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Jenis</label>
                    <select name="jenisobat" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <option selected>-</option>
                        <option value="1000">Obat Oral</option>
                        <option value="2000">Obat Topikal</option>
                        <option value="3000">Obat Injeksi</option>
                        <option value="4000">Obat Sublingual</option>
                    </select>
                </div>
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Kategori</label>
                    <select name="kategoriobat" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <option selected>-</option>
                        <option value="1000">Obat Paten</option>
                        <option value="2000">Obat Generik</option>
                        <option value="3000">Obat Merek</option>
                        <option value="4000">Obat Eksklusif</option>
                    </select>
                </div>

                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Golongan</label>
                    <select name="golonganobat" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <option selected>-</option>
                        <option value="1000">Analgesik</option>
                        <option value="2000">Antibiotik</option>
                        <option value="3000">Antijamur</option>
                        <option value="4000">Antivirus</option>
                    </select>
                </div>
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Tanggal Kadaluwarsa</label>
                    <input type="date" name="kadaluwarsaobat" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
                </div>
            </div>

            <div class="additionalInputAlkes hidden">
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Satuan</label>
                    <select name="satuanalkes" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <?php foreach ($satuan_data as $satuan) : ?>
                            <option value="<?= $satuan['id'] ?>"><?= $satuan['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Merek</label>
                    <select name="merekalkes" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <option selected>-</option>
                        <?php
                        $companies = array('Omron', 'Philips', 'GE Healthcare', 'Siemens Healthineers', 'Medtronic', 'Johnson & Johnson', 'Becton', 'Dickinson and Company (BD)', 'Stryker', 'Boston Scientific', 'Olympus Corporation', 'Roche Diagnostics');
                        foreach ($companies as $company) : ?>
                            <option value="<?= $company ?>"><?= $company ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="additionalInputBHP hidden">
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Jumlah</label>
                    <input type="text" name="jumlahbhp" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
                </div>

                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Satuan</label>
                    <select name="satuanbhp" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <?php foreach ($satuan_data as $satuan) : ?>
                            <option value="<?= $satuan['id'] ?>"><?= $satuan['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Tanggal Kadaluwarsa</label>
                    <input type="date" name="kadaluwarsabhp" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
                </div>
            </div>

            <div class="additionalInputDarah hidden">
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Satuan</label>
                    <select name="satuandarah" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white" required>
                        <?php foreach ($satuan_data as $satuan) : ?>
                            <option value="<?= $satuan['id'] ?>"><?= $satuan['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Jenis Darah</label>
                    <select name="jenisdarah" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full md:w-1/4 dark:border-gray-600 dark:text-white">
                        <option value="" selected>-</option>
                        <option value="Whole Blood (WB)">Whole Blood (WB)</option>
                        <option value="Packed Red Cell (PRC)">Packed Red Cell (PRC)</option>
                        <option value="Thrombocyte Concentrate (TC)">Thrombocyte Concentrate (TC)</option>
                        <option value="Fresh Frozen Plasma (FFP)">Fresh Frozen Plasma (FFP)</option>
                    </select>
                </div>
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Keterangan</label>
                    <input type="text" name="keterangandarah" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
                </div>
                <div class="mb-5 sm:block md:flex items-center">
                    <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Tanggal Kadaluwarsa</label>
                    <input type="date" name="kadaluwarsadarah" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
                </div>
            </div>
            <div class="mb-5 sm:block md:flex items-center">
                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Harga</label>
                <input type="text" name="harga" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
            </div>
            <div class="mb-5 sm:block md:flex items-center">
                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Stok</label>
                <input type="text" name="stok" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
            </div>
            <div class="mb-5 sm:block md:flex items-center">

                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Notifikasi kadaluwarsa (hari)</label>
                <input type="text" name="notifkadaluwarsa" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
                <div class="hs-tooltip [--trigger:hover] [--placement:right] inline-block">
                    <button type="button" class="hs-tooltip-toggle flex justify-center items-center size-10 text-sm font-semibold rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 max-w-[200px] whitespace-normal bg-white border text-sm text-gray-600 rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" role="tooltip">
                            Notifikasi akan dikirim sesuai dengan jumlah hari yang ditentukan sebelum tanggal kadaluwarsa. Defaultnya adalah 30 hari sebelum tanggal kadaluwarsa.
                        </span>
                    </button>
                </div>
            </div>
            <div class="mb-5 sm:block md:flex items-center">
                <label class="block mb-2 md:mb-0 text-sm text-gray-900 dark:text-white md:w-1/4">Stok minimum</label>
                <input type="text" name="stokminimum" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 w-full lg:w-1/4 dark:border-gray-600 dark:text-white">
            </div>
            <div class="mt-5 pt-5 border-t flex justify-end gap-x-2">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    Batal
                </button>
                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-[#0A2D27] text-[#ACF2E7] hover:bg-[#13594E] disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    Simpan
                </button>
            </div>
        </form>
    </div>
    <!-- End Card -->
</div>
<!-- End Card Section -->
<script>
    document.getElementById('jenis').addEventListener('change', function() {
        var jenisValue = this.value;
        var additionalInputObats = document.getElementsByClassName('additionalInputObat');
        var additionalInputAlkess = document.getElementsByClassName('additionalInputAlkes');
        var additionalInputBHPs = document.getElementsByClassName('additionalInputBHP');
        var additionalInputDarahs = document.getElementsByClassName('additionalInputDarah');

        // Loop melalui setiap elemen additionalInputObat dan atur tampilan sesuai dengan nilai jenisValue
        for (var i = 0; i < additionalInputObats.length; i++) {
            var additionalInputObat = additionalInputObats[i];
            if (jenisValue === 'Obat') {
                additionalInputObat.style.display = 'block';
            } else {
                additionalInputObat.style.display = 'none';
            }
        }

        // Loop melalui setiap elemen additionalInputAlkes dan atur tampilan sesuai dengan nilai jenisValue
        for (var j = 0; j < additionalInputAlkess.length; j++) {
            var additionalInputAlkes = additionalInputAlkess[j];
            if (jenisValue === 'Alat Kesehatan') {
                additionalInputAlkes.style.display = 'block';
            } else {
                additionalInputAlkes.style.display = 'none';
            }
        }

        for (var k = 0; k < additionalInputBHPs.length; k++) {
            var additionalInputBHP = additionalInputBHPs[k];
            if (jenisValue === 'Bahan Habis Pakai') {
                additionalInputBHP.style.display = 'block';
            } else {
                additionalInputBHP.style.display = 'none';
            }
        }

        for (var l = 0; l < additionalInputDarahs.length; l++) {
            var additionalInputDarah = additionalInputDarahs[l];
            if (jenisValue === 'Darah') {
                additionalInputDarah.style.display = 'block';
            } else {
                additionalInputDarah.style.display = 'none';
            }
        }
    });
</script>
<?= $this->endSection(); ?>