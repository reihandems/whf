<?= $this->extend('main/trainer/view_main') ?>
<?= $this->section('content') ?>
<div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 flex flex-row gap-3">
        <label class="input w-48">
            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    stroke-width="2.5"
                    fill="none"
                    stroke="currentColor">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </g>
            </svg>
            <input type="search" required placeholder="Cari Booking..." />
        </label>
    </div>
    <div class="col-span-12">
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-300">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Tanggal Booking</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>2</th>
                        <td>Hart Hagerty</td>
                        <td>Desktop Support Technician</td>
                        <td>Purple</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>3</th>
                        <td>Brice Swyre</td>
                        <td>Tax Accountant</td>
                        <td>Red</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>