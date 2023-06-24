@extends('admin.layouts.admin')

@section('layout', __('Orders'))

@section('breadcrumbs')
    <li><span>{{ __('Orders') }}</span></li>
    <li><span>{{ __('index') }}</span></li>
@endsection

@section('content')
    <div class="row media-gallery">
        <div class="col-lg-12 mg-main">
            <div class="col">

                <div class="card card-modern">
                    <div class="card-body">
                        <div class="datatables-header-footer-wrapper">
                            <div class="datatable-header">
                                <div class="row align-items-center mb-3">
                                    <div class="col-12 col-lg-auto mb-3 mb-lg-0">
                                        <a href="ecommerce-customers-form.html" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Add Customer</a>
                                    </div>
                                    <div class="col-8 col-lg-auto ml-auto mb-3 mb-lg-0">
                                        <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                            <label class="ws-nowrap mr-3 mb-0">Filter By:</label>
                                            <select class="form-control select-style-1 filter-by" name="filter-by">
                                                <option value="all" selected="">All</option>
                                                <option value="1">ID</option>
                                                <option value="2">Name</option>
                                                <option value="3">Phone</option>
                                                <option value="4">E-mail</option>
                                                <option value="5">Orders</option>
                                                <option value="6">Total Amount</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-auto pl-lg-1 mb-3 mb-lg-0">
                                        <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                            <label class="ws-nowrap mr-3 mb-0">Show:</label>
                                            <select class="form-control select-style-1 results-per-page" name="results-per-page">
                                                <option value="12" selected="">12</option>
                                                <option value="24">24</option>
                                                <option value="36">36</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-auto pl-lg-1">
                                        <div class="search search-style-1 search-style-1-lg mx-lg-auto">
                                            <div class="input-group">
                                                <input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Customer">
                                                <span class="input-group-append">
																<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
															</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="datatable-ecommerce-list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row justify-content-between"><div class="col-auto"></div><div class="col-auto"></div></div><div class="table-responsive"><table class="table table-ecommerce-simple table-striped mb-0 dataTable no-footer" id="datatable-ecommerce-list" style="min-width: 750px;" role="grid" aria-describedby="datatable-ecommerce-list_info">
                                        <thead>
                                        <tr role="row"><th width="3%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 17px;"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value=""></th><th width="8%" class="sorting" tabindex="0" aria-controls="datatable-ecommerce-list" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 84.3906px;">ID</th><th width="28%" class="sorting" tabindex="0" aria-controls="datatable-ecommerce-list" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 377.297px;">Name</th><th width="18%" class="sorting" tabindex="0" aria-controls="datatable-ecommerce-list" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 230.922px;">Phone</th><th width="25%" class="sorting" tabindex="0" aria-controls="datatable-ecommerce-list" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 333.875px;">E-mail</th><th width="8%" class="sorting" tabindex="0" aria-controls="datatable-ecommerce-list" rowspan="1" colspan="1" aria-label="Orders: activate to sort column ascending" style="width: 84.5781px;">Orders</th><th width="10%" class="sorting" tabindex="0" aria-controls="datatable-ecommerce-list" rowspan="1" colspan="1" aria-label="Total Amount: activate to sort column ascending" style="width: 113.938px;">Total Amount</th></tr>
                                        </thead>
                                        <tbody>
















                                        <tr role="row" class="odd">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>191</strong></a></td>
                                            <td><a href="#"><strong>John Doe</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="even">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>192</strong></a></td>
                                            <td><a href="#"><strong>John Doe 2</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="odd">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>193</strong></a></td>
                                            <td><a href="#"><strong>John Doe 3</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="even">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>194</strong></a></td>
                                            <td><a href="#"><strong>John Doe 4</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="odd">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>195</strong></a></td>
                                            <td><a href="#"><strong>John Doe 5</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="even">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>196</strong></a></td>
                                            <td><a href="#"><strong>John Doe 6</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="odd">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>197</strong></a></td>
                                            <td><a href="#"><strong>John Doe 7</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="even">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>198</strong></a></td>
                                            <td><a href="#"><strong>John Doe 8</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="odd">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>199</strong></a></td>
                                            <td><a href="#"><strong>John Doe 9</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="even">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>200</strong></a></td>
                                            <td><a href="#"><strong>John Doe 10</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="odd">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>201</strong></a></td>
                                            <td><a href="#"><strong>John Doe 11</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr><tr role="row" class="even">
                                            <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td>
                                            <td><a href="#"><strong>202</strong></a></td>
                                            <td><a href="#"><strong>John Doe 12</strong></a></td>
                                            <td>555-123-4567</td>
                                            <td>okler@domain.com</td>
                                            <td>1</td>
                                            <td>$198.00</td>
                                        </tr></tbody>
                                    </table></div></div>
                            <hr class="solid mt-5 opacity-4">
                            <div class="datatable-footer">
                                <div class="row align-items-center justify-content-between mt-3">
                                    <div class="col-md-auto order-1 mb-3 mb-lg-0">
                                        <div class="d-flex align-items-stretch">
                                            <select class="form-control select-style-1 bulk-action mr-3" name="bulk-action" style="min-width: 170px;">
                                                <option value="" selected="">Bulk Actions</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                            <a href="#" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto text-center order-3 order-lg-2">
                                        <div class="results-info-wrapper"><div class="dataTables_info" id="datatable-ecommerce-list_info" role="status" aria-live="polite">Showing 1 to 12 of 16 entries</div></div>
                                    </div>
                                    <div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
                                        <div class="pagination-wrapper"><div class="dataTables_paginate paging_simple_numbers" id="datatable-ecommerce-list_paginate"><ul class="pagination pagination-modern pagination-modern-spacing justify-content-center"><li class="paginate_button page-item previous disabled" id="datatable-ecommerce-list_previous"><a href="#" aria-controls="datatable-ecommerce-list" data-dt-idx="0" tabindex="0" class="page-link"><i class="fas fa-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable-ecommerce-list" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-ecommerce-list" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="datatable-ecommerce-list_next"><a href="#" aria-controls="datatable-ecommerce-list" data-dt-idx="3" tabindex="0" class="page-link"><i class="fas fa-chevron-right"></i></a></li></ul></div></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

