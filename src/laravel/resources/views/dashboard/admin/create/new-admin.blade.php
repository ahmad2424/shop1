@extends('mLayout.admin.appAdmin')

@section('content')

<div class="container-fluid mt-5" >

        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Over {{$memeber_admin}} members</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                        <tr class="fw-bolder text-muted">
                            <th class="w-25px">
                                <div class="form-check form-check-sm form-check-custom form-check-solid" data-bs-toggle="tooltip" data-bs-placement="right" title="select all admins for same change" >
                                    S/A
                                </div>
                            </th>
                            <th class="min-w-150px">Authors</th>
                            <th class="min-w-140px">Email</th>
                            <th class="min-w-120px">Progress</th>
                            <th class="min-w-100px text-end">Actions</th>
                        </tr>
                        </thead>
                       @include('dashboard.admin.create.new_admin.search')
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                       @include('dashboard.admin.create.new_admin.admin_list')
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>





</div>





@endsection


