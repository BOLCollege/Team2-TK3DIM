<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-5">
                <h4 class="mb-5">Report Created</h4>
                <div class="row">
                    <div class="col-4">
                        <div class="bg-white shadow rounded p-4 text-center">
                            <label class="d-block mb-3 fs-4 text-uppercase">Today</label>
                            <span class="d-block fs-2 text-primary font-weight-bold">200</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-white shadow rounded p-4 text-center">
                            <label class="d-block mb-3 fs-4 text-uppercase">This Week</label>
                            <span class="d-block fs-2 text-primary font-weight-bold">1000</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-white shadow rounded p-4 text-center">
                            <label class="d-block mb-3 fs-4 text-uppercase">Today</label>
                            <span class="d-block fs-2 text-primary font-weight-bold">4500</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h4 class="mb-5">Overview</h4>
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="bg-white shadow rounded d-flex justify-content-between p-4">
                            <label class="d-block fs-4">Report 1</label>
                            <span class="d-block fs-4">Created: 20/07/2022, 14:30:12</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-white shadow rounded d-flex justify-content-between p-4">
                            <label class="d-block fs-4">Report 2</label>
                            <span class="d-block fs-4">Created: 20/07/2022, 07:26:12</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-white shadow rounded d-flex justify-content-between p-4">
                            <label class="d-block fs-4">Report 3</label>
                            <span class="d-block fs-4">Created: 20/07/2022, 18:43:12</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
