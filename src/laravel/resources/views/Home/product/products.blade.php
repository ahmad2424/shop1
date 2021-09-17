@extends('mLayout.app')

@section('content')
 {{--  <div class="container-fluid">
        <div class="container">

            <h3>{{$title}}</h3>

            <div class="row">
                <div>
                    <col-12>
                        @foreach($errors->all() as $error)
                            <div class="text-muted">
                                {{$error}}
                            </div>
                        @endforeach
                    </col-12>
                </div>
            </div>

            <div class="row">



                @foreach($products as $product)
                    <div class="col-4">
                        <div class="m-3 p-2">
                            <div class="card p-2">
                                <h3 class="card-title p-2"><a href="{{ route( 'product.view' , ['product' => $product]  ) }}">  {{$product->name}}</a></h3>
                                <div class="card-body">
                                    <p>{{ $product->description }}</p>
                                    <a href="{{  route('add.cart' , [ $product ])  }}"></a>
                                </div>

                                <a class="card-link" href="{{route('add.cart' , [ 'product'=>$product->id , 'amount'=> isset( $amount[$product->id]['amount'] ) ? $amount[$product->id]['amount'] + 1  : 1   ] )}}">add</a>
                                <div class="badge-info"> {{ $amount[$product->id]['amount'] ?? 0 }} </div>
                            </div>
                        </div>
                    </div>


                @endforeach

            </div>

            {{ $products->links('vendor/pagination/bootstrap-4') }}
        </div>
    </div>--}}






   <!--begin::Content-->
   <div class="content d-flex flex-column flex-column-fluid" id="kt_content">





       <!--begin::Product Big-->
       <div class="post d-flex flex-column-fluid" id="kt_post">
           <!--begin::Container-->
           <div id="kt_content_container" class="container-fluid">
               <!--begin::Search vertical-->
               <div class="d-flex flex-column flex-lg-row">

                   <!--begin::Layout-->
                   <div class="flex-lg-row-fluid">
                       <!--begin::Toolbar-->
                       <div class="d-flex flex-wrap flex-stack pb-7">
                           <!--begin::Title-->
                           <div class="d-flex flex-wrap align-items-center my-1">
                               <h3 class="fw-bolder me-5 my-1">{{$products->total()}} Items Found
                                   <span class="text-gray-400 fs-6">by Recent Updates ↓</span></h3>
                           </div>
                           <!--end::Title-->
                           <!--begin::Controls-->
                           <div class="d-flex flex-wrap my-1">
                               <!--begin::Tab nav-->
                               <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                                   <li class="nav-item m-0">
                                       <a class="btn btn-sm btn-icon btn-white btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                           <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                           <span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
															</span>
                                           <!--end::Svg Icon-->
                                       </a>
                                   </li>
                                   <li class="nav-item m-0">
                                       <a class="btn btn-sm btn-icon btn-white btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                           <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-horizontal.svg-->
                                           <span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6" rx="1.5" />
																		<rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5" />
																	</g>
																</svg>
															</span>
                                           <!--end::Svg Icon-->
                                       </a>
                                   </li>
                               </ul>
                               <!--end::Tab nav-->

                               <!--begin::Actions-->
                               <div class=" my-0">
                                   <form class="d-flex"  name="my_form" action="{{route('products.view')}}">
                                       <!--begin::Select-->


                                       <select name="orderBy" data-control="select2" data-hide-search="true" data-placeholder="Filter" class="form-select form-select-white form-select-sm w-150px me-5">
                                           {{--<option @if(  request('orderBy')== 1  ) selected @endif value="1">More View</option>
                                           <option @if(  request('orderBy')== 2  ) selected @endif value="2">Last Update</option>
                                           <option @if(  request('orderBy')== 3  ) selected @endif value="3">More Sell</option>--}}
                                           <option @if(  request('orderBy')== 4  ) selected @endif value="4">the most expensive</option>
                                           <option @if(  request('orderBy')== 5  ) selected @endif value="5">cheapest</option>
                                       </select>
                                       <!--end::Select-->
                                       <!--begin::Select-->
                                       <select name="group" data-control="select2" data-hide-search="true" data-placeholder="Export" class="form-select form-select-white form-select-sm w-100px">
                                           <option value="" >select</option>
                                           @foreach( $groups as  $group )
                                               <option value="{{$group->id}}" @if(request('group') == $group->id) selected @endif>{{$group->name}}</option>
                                           @endforeach
                                       </select>
                                       <!--end::Select-->
                                       <!--begin:Search-->

                                       <div class="position-relative ms-3">
                                           <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                           <span onclick="document.getElementById('search').click()" class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                            </span>
                                           <!--end::Svg Icon-->
                                           <input type="text" class="form-control form-control-solid ps-10 bg-white"  name="search"   value="{{request('search')}}"   placeholder="Search" />
                                       </div>

                                       <input id="search" type="submit" style="display: none">

                                       <!--end:Search-->
                                   </form>

                               </div>
                               <!--end::Actions-->
                           </div>
                           <!--end::Controls-->
                       </div>
                       <!--end::Toolbar-->
                       <!--begin::Tab Content-->
                       <div class="tab-content">
                           <!--begin::Tab pane-->
                           <div id="kt_project_users_card_pane" class="tab-pane fade show active">


                               <!--begin::Row-->
                               <div class="row g-6 g-xl-9">
                                   @foreach($products as $product)
                                   <!--begin::Col-->
                                   <div class="col-sm-12 col-md-6  col-xxl-4">
                                       <!--begin::Card-->
                                       <div class="card">
                                           <!--begin::Card body-->
                                           <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                               <!--begin::Avatar-->
                                               <div class="symbol symbol-65px symbol-circle mb-5">
                                                   <img src="{{asset('resources/demo'.rand(1,4).'.png')}}" alt="image" />
                                                   <div class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
                                               </div>
                                               <!--end::Avatar-->
                                               <!--begin::Name-->
                                               <a href="{{route('product.view' , [ $product->id])}}" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{$product->name}}</a>
                                               <!--end::Name-->
                                               <!--begin::Position-->
                                               <div class="fw-bold text-gray-400 mb-6">{{substr( $product->description , 0  ,50) . '...' }}</div>
                                               <!--end::Position-->
                                               <!--begin::Info-->
                                               <div class="d-flex flex-center flex-wrap">
                                                   <!--begin::Stats-->
                                                   <a href="{{route('add.cart' , [$product->id , $product->price])}}" class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                                       <div class="fs-6 fw-bolder text-gray-700">${{$product->price}}</div>
                                                       <div class="fw-bold text-gray-400">Buy</div>
                                                   </a>
                                                   <!--end::Stats-->
                                                   <!--begin::Stats-->
                                                   <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                                       <div class="fs-6 fw-bolder text-gray-700">{{$product->stock}}</div>
                                                       <div class="fw-bold text-gray-400">Stock</div>
                                                   </div>
                                                   <!--end::Stats-->
                                                   <!--begin::Stats-->
                                                   <a title = 'Add to Cart' href="{{route('add.cart' , [ 'product'=>$product->id , 'amount'=> isset( $amount[$product->id]['amount'] ) ? $amount[$product->id]['amount'] + 1  : 1   ] )}}" class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                                       <div class="fs-6 fw-bolder text-gray-700">{{isset( $amount[$product->id]['amount'] ) ? $amount[$product->id]['amount']  : 0 }}</div>
                                                       <div class="fw-bold text-gray-400">
                                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                   <rect x="0" y="0" width="24" height="24"></rect>
                                                                   <path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3"></path>
                                                                   <path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000"></path>
                                                               </g>
                                                           </svg>
                                                       </div>
                                                   </a>
                                                   <!--end::Stats-->
                                               </div>
                                               <!--end::Info-->
                                           </div>
                                           <!--end::Card body-->
                                       </div>
                                       <!--end::Card-->
                                   </div>
                                   <!--end::Col-->
                                   @endforeach
                               </div>
                               <!--end::Row-->


                               <!--begin::Pagination-->
                               <div class="d-flex flex-stack flex-wrap pt-10">
                                   {{ $products->links('vendor/pagination/bootstrap-4') }}
                               </div>
                               <!--end::Pagination-->
                           </div>
                           <!--end::Tab pane-->
                           <!--begin::Tab pane-->
                           <div id="kt_project_users_table_pane" class="tab-pane fade">
                               <!--begin::Card-->
                               <div class="card card-flush">
                                   <!--begin::Card body-->
                                   <div class="card-body pt-0">
                                       <!--begin::Table container-->
                                       <div class="table-responsive">
                                           <!--begin::Table-->
                                           <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                                               <!--begin::Head-->
                                               <thead class="fs-7 text-gray-400 text-uppercase">
                                               <tr>
                                                   <th class="min-w-250px">Product name</th>
                                                   <th class="min-w-150px">Amount</th>
                                                   <th class="min-w-90px">Add to cart</th>
                                                   <th class="min-w-90px">Price</th>
                                                   <th class="min-w-90px">Stock</th>

                                                   <th class="min-w-50px text-end">Details</th>
                                               </tr>
                                               </thead>
                                               <!--end::Head-->
                                               <!--begin::Body-->
                                               <tbody class="fs-6">

                                               @foreach($products as $product)
                                               <tr>
                                                   <td>
                                                       <!--begin::User-->
                                                       <div class="d-flex align-items-center">
                                                           <!--begin::Wrapper-->
                                                           <div class="me-5 position-relative">
                                                               <!--begin::Avatar-->
                                                               <div class="symbol symbol-35px symbol-circle">
                                                                   <img alt="Pic" src="{{asset('resources/demo'.rand(1,4).'.png')}}" />
                                                               </div>
                                                               <!--end::Avatar-->
                                                           </div>
                                                           <!--end::Wrapper-->
                                                           <!--begin::Info-->
                                                           <div class="d-flex flex-column justify-content-center">
                                                               <a href="" class="mb-1 text-gray-800 text-hover-primary">{{$product->name}}</a>
                                                               <div class="fw-bold fs-6 text-gray-400">{{substr($product->description , 0 , 50 )}}</div>
                                                           </div>
                                                           <!--end::Info-->
                                                       </div>
                                                       <!--end::User-->
                                                   </td>
                                                   <td> {{  isset( $amount[$product->id]['amount'] )? $amount[$product->id]['amount'] : 0  }}</td>
                                                   <td>
                                                       <!--begin::Stats-->
                                                       <a title = 'Add to Cart' href="{{route('add.cart' , [ 'product'=>$product->id , 'amount'=> isset( $amount[$product->id]['amount'] ) ? $amount[$product->id]['amount'] + 1  : 1   ] )}}" >
                                                           <div class="fs-6 fw-bolder text-gray-700">{{isset( $amount[$product->id]['amount'] ) ? $amount[$product->id]['amount']  : 0 }}</div>
                                                           <div class="fw-bold text-gray-400">
                                                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                       <rect x="0" y="0" width="24" height="24"></rect>
                                                                       <path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3"></path>
                                                                       <path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000"></path>
                                                                   </g>
                                                               </svg>
                                                           </div>
                                                       </a>
                                                       <!--end::Stats-->

                                                   </td>
                                                   <td>${{$product->price}}</td>
                                                   <td>
                                                       <span class="badge badge-light-info fw-bolder px-4 py-3">{{$product->stock}}</span>
                                                   </td>
                                                   <td class="text-end">
                                                       <a href="#" class="btn btn-light btn-sm">{{$product->info}}</a>
                                                   </td>
                                               </tr>
                                               @endforeach

                                               </tbody>
                                               <!--end::Body-->
                                           </table>
                                           <!--end::Table-->
                                       </div>
                                       <!--end::Table container-->
                                   </div>
                                   <!--end::Card body-->
                               </div>
                               <!--end::Card-->
                           </div>
                           <!--end::Tab pane-->
                       </div>
                       <!--end::Tab Content-->
                   </div>
                   <!--end::Layout-->
               </div>
               <!--begin::Search vertical-->
           </div>
           <!--end::Container-->
       </div>
       <!--end::Product big-->



   </div>
   <!--end::Content-->








@endsection
