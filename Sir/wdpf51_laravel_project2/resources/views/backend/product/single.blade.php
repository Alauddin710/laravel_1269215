@extends('backend.layouts.app')

@section('content')
<<<<<<< HEAD
<<<<<<< HEAD
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Dashboard</h3>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><span>Last 30 Days</span></a></li>
                                            <li><a href="#"><span>Last 6 Months</span></a></li>
                                            <li><a href="#"><span>Last 1 Years</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Today Orders</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="amount">1,945</div>
                                    <div class="nk-ecwg6-ck">
                                        <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                    </div>
                                </div>
                                <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs. last week</span></div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Today Revenue</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="amount">$2,338</div>
                                    <div class="nk-ecwg6-ck">
                                        <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                    </div>
                                </div>
                                <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs. last week</span></div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Today Customers</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="amount">847</div>
                                    <div class="nk-ecwg6-ck">
                                        <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
                                    </div>
                                </div>
                                <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs. last week</span></div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Today Visitors</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="amount">23,485</div>
                                    <div class="nk-ecwg6-ck">
                                        <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                    </div>
                                </div>
                                <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs. last week</span></div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-6">
                <div class="card card-full">
                    <div class="nk-ecwg nk-ecwg8 h-100">
                        <div class="card-inner">
                            <div class="card-title-group mb-3">
                                <div class="card-title">
                                    <h6 class="title">Sales Statistics</h6>
                                </div>
                                <div class="card-tools">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-bs-toggle="dropdown">Weekly</a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>Daily</span></a></li>
                                                <li><a href="#" class="active"><span>Weekly</span></a></li>
                                                <li><a href="#"><span>Monthly</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nk-ecwg8-legends">
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#6576ff"></span>
                                        <span>Total Order</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#eb6459"></span>
                                        <span>Cancelled Order</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="nk-ecwg8-ck">
                                <canvas class="ecommerce-line-chart-s4" id="salesStatistics"></canvas>
                            </div>
                            <div class="chart-label-group ps-5">
                                <div class="chart-label">01 Jul, 2020</div>
                                <div class="chart-label">30 Jul, 2020</div>
                            </div>
                        </div><!-- .card-inner -->
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-md-6">
                <div class="card card-full overflow-hidden">
                    <div class="nk-ecwg nk-ecwg7 h-100">
                        <div class="card-inner flex-grow-1">
                            <div class="card-title-group mb-4">
                                <div class="card-title">
                                    <h6 class="title">Order Statistics</h6>
                                </div>
                            </div>
                            <div class="nk-ecwg7-ck">
                                <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                            </div>
                            <ul class="nk-ecwg7-legends">
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                        <span>Completed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#13c9f2"></span>
                                        <span>Processing</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#ff82b7"></span>
                                        <span>Cancelled</span>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- .card-inner -->
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-md-6">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-title-group mb-2">
                            <div class="card-title">
                                <h6 class="title">Store Statistics</h6>
                            </div>
                        </div>
                        <ul class="nk-store-statistics">
                            <li class="item">
                                <div class="info">
                                    <div class="title">Orders</div>
                                    <div class="count">1,795</div>
                                </div>
                                <em class="icon bg-primary-dim ni ni-bag"></em>
                            </li>
                            <li class="item">
                                <div class="info">
                                    <div class="title">Customers</div>
                                    <div class="count">2,327</div>
                                </div>
                                <em class="icon bg-info-dim ni ni-users"></em>
                            </li>
                            <li class="item">
                                <div class="info">
                                    <div class="title">Products</div>
                                    <div class="count">674</div>
                                </div>
                                <em class="icon bg-pink-dim ni ni-box"></em>
                            </li>
                            <li class="item">
                                <div class="info">
                                    <div class="title">Categories</div>
                                    <div class="count">68</div>
                                </div>
                                <em class="icon bg-purple-dim ni ni-server"></em>
                            </li>
                        </ul>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-8">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Recent Orders</h6>
                            </div>
                        </div>
                    </div>
                    <div class="nk-tb-list mt-n2">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col"><span>Order No.</span></div>
                            <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                            <div class="nk-tb-col"><span>Amount</span></div>
                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95954</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-purple-dim">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">02/11/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">4,596.75 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95850</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-azure-dim">
                                        <span>DE</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Desiree Edwards</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">02/02/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">596.75 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-danger">Cancelled</span>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95812</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-warning-dim">
                                        <img src="assets/images/avatar/b-sm.jpg" alt="">
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Blanca Schultz</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">02/01/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">199.99 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95256</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-purple-dim">
                                        <span>NL</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Naomi Lawrence</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">01/29/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95135</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-success-dim">
                                        <span>CH</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Cassandra Hogan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">01/29/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-warning">Due</span>
                            </div>
                        </div>
                    </div>
                </div><!-- .card -->
            </div>
            <div class="col-xxl-4 col-md-8 col-lg-6">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-title-group mb-2">
                            <div class="card-title">
                                <h6 class="title">Top products</h6>
                            </div>
                            <div class="card-tools">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-bs-toggle="dropdown">Weekly</a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><span>Daily</span></a></li>
                                            <li><a href="#" class="active"><span>Weekly</span></a></li>
                                            <li><a href="#"><span>Monthly</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nk-top-products">
                            <li class="item">
                                <div class="thumb">
                                    <img src="assets/images/product/a.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">Pink Fitness Tracker</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="thumb">
                                    <img src="assets/images/product/b.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">Purple Smartwatch</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="thumb">
                                    <img src="assets/images/product/c.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">Black Smartwatch</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="thumb">
                                    <img src="assets/images/product/d.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">Black Headphones</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="thumb">
                                    <img src="assets/images/product/e.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">iPhone 7 Headphones</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .nk-block -->
</div>

@endsection
=======
=======
>>>>>>> 6ad1373cf4a43c53c7fd261570bcbb7cae2a1bc9
  <div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
      <div class="nk-block-between g-3">
        <div class="nk-block-head-content">
          <h3 class="nk-block-title page-title">Product Details</h3>
          <div class="nk-block-des text-soft">
            <p>An example page for product details</p>
          </div>
        </div>
        <div class="nk-block-head-content">
          <a href="html/product-list.html" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
              class="icon ni ni-arrow-left"></em><span>Back</span></a>
          <a href="html/product-list.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
              class="icon ni ni-arrow-left"></em></a>
        </div>
      </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block">
      <div class="card">
        <div class="card-inner">
          <div class="row pb-5">
            <div class="col-lg-6">
              <div class="product-gallery me-xl-1 me-xxl-5">
                <img src="product_photos/{{ $product->product_image }}" class="rounded w-100">
              </div><!-- .product-gallery -->
            </div><!-- .col -->
            <div class="col-lg-6">
              <div class="product-info mt-5 me-xxl-5">
                <h4 class="product-price text-primary">{{ $product->product_price }}<small
                    class="text-muted fs-14px">$98.00</small></h4>
                <h2 class="product-title">{{ $product->product_name }}</h2>
                <div class="product-rating">
                  <ul class="rating">
                    <li><em class="icon ni ni-star-fill"></em></li>
                    <li><em class="icon ni ni-star-fill"></em></li>
                    <li><em class="icon ni ni-star-fill"></em></li>
                    <li><em class="icon ni ni-star-fill"></em></li>
                    <li><em class="icon ni ni-star-half"></em></li>
                  </ul>
                  <div class="amount">(2 Reviews)</div>
                </div><!-- .product-rating -->
                <div class="product-excrept text-soft">
                  <p class="lead">{{ $product->product_details }}</p>
                </div>
                <div class="product-meta">
                  <ul class="d-flex g-3 gx-5">
                    <li>
                      <div class="fs-14px text-muted">Type</div>
                      <div class="fs-16px fw-bold text-secondary">Watch</div>
                    </li>
                    <li>
                      <div class="fs-14px text-muted">Model Number</div>
                      <div class="fs-16px fw-bold text-secondary">Forerunner 290XT</div>
                    </li>
                  </ul>
                </div>
                <div class="product-meta">
                  <h6 class="title">Color</h6>
                  <ul class="custom-control-group">
                    <li>
                      <div class="custom-control color-control">
                        <input type="radio" class="custom-control-input" id="productColor1" name="productColor" checked>
                        <label class="custom-control-label dot dot-xl" data-bg="#754c24" for="productColor1"></label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control color-control">
                        <input type="radio" class="custom-control-input" id="productColor2" name="productColor">
                        <label class="custom-control-label dot dot-xl" data-bg="#636363" for="productColor2"></label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control color-control">
                        <input type="radio" class="custom-control-input" id="productColor3" name="productColor">
                        <label class="custom-control-label dot dot-xl" data-bg="#ba6ed4" for="productColor3"></label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control color-control">
                        <input type="radio" class="custom-control-input" id="productColor4" name="productColor">
                        <label class="custom-control-label dot dot-xl" data-bg="#ff87a3" for="productColor4"></label>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="product-meta">
                  <h6 class="title">Size</h6>
                  <ul class="custom-control-group">
                    <li>
                      <div class="custom-control custom-radio custom-control-pro no-control">
                        <input type="radio" class="custom-control-input" name="sizeCheck" id="sizeCheck1" checked>
                        <label class="custom-control-label" for="sizeCheck1">XS</label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-radio custom-control-pro no-control">
                        <input type="radio" class="custom-control-input" name="sizeCheck" id="sizeCheck2">
                        <label class="custom-control-label" for="sizeCheck2">SM</label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-radio custom-control-pro no-control">
                        <input type="radio" class="custom-control-input" name="sizeCheck" id="sizeCheck3">
                        <label class="custom-control-label" for="sizeCheck3">L</label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-radio custom-control-pro no-control">
                        <input type="radio" class="custom-control-input" name="sizeCheck" id="sizeCheck4">
                        <label class="custom-control-label" for="sizeCheck4">XL</label>
                      </div>
                    </li>
                  </ul>
                </div><!-- .product-meta -->
                <div class="product-meta">
                  <ul class="d-flex flex-wrap ailgn-center g-2 pt-1">
                    <li class="w-140px">
                      <div class="form-control-wrap number-spinner-wrap">
                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                          data-number="minus"><em class="icon ni ni-minus"></em></button>
                        <input type="number" class="form-control number-spinner" value="0">
                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                          data-number="plus"><em class="icon ni ni-plus"></em></button>
                      </div>
                    </li>
                    <li>
                      <button class="btn btn-primary">Add to Cart</button>
                    </li>
                    <li class="ms-n1">
                      <button class="btn btn-icon btn-trigger text-primary"><em class="icon ni ni-heart"></em></button>
                    </li>
                  </ul>
                </div><!-- .product-meta -->
              </div><!-- .product-info -->
            </div><!-- .col -->
          </div><!-- .row -->
          <hr class="hr border-light">
          <div class="row g-gs flex-lg-row-reverse pt-5">
            <div class="col-lg-5">
              <div class="video">
                <img class="video-poster w-100" src="./images/product/video-a.jpg" alt="">
                <a class="video-play popup-video" href="https://www.youtube.com/watch?v=SSo_EIwHSd4">
                  <em class="icon ni ni-play"></em>
                  <span>Watch Video</span>
                </a>
              </div>
            </div><!-- .col -->
            <div class="col-lg-7">
              <div class="product-details entry me-xxl-3">
                <h3>Product details of Comfy cushions</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                  rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                  explicabo. Neque porro quisquam est, qui dolorem consectetur, adipisci velit.Nam libero tempore, cum
                  soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                <ul class="list list-sm list-checked">
                  <li>Meets and/or exceeds performance standards.</li>
                  <li>Liumbar support.</li>
                  <li>Made of bonded teather and poiyurethane.</li>
                  <li>Metal frame.</li>
                  <li>Anatomically shaped cork-latex</li>
                  <li>As attractively priced as you look attractive in one</li>
                </ul>
                <p>Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                  ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                <h3>The best seats in the house</h3>
                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and
                  I will give you a complete account of the system, and expound the actual teachings. Unde omnis iste
                  natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                  inventore veritatis et quasi architecto beatae.</p>
              </div>
            </div><!-- .col -->
          </div><!-- .row -->
        </div>
      </div>
    </div><!-- .nk-block -->
    <div class="nk-block nk-block-lg">
      <div class="nk-block-head">
        <div class="nk-block-between g-3">
          <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Related Products</h3>
          </div>
        </div>
      </div><!-- .nk-block-head -->
      <div class="slider-init row"
        data-slick='{"slidesToShow": 4, "centerMode": false, "slidesToScroll": 1, "infinite":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 3}},{"breakpoint": 992,"settings":{"slidesToShow": 2}}, {"breakpoint": 576,"settings":{"slidesToShow": 1}} ]}'>
        <div class="col">
          <?php echo $product->id; ?>
          <div class="card card-bordered product-card">
            <div class="product-thumb">
              <a href="html/product-details.html">
                <img class="card-img-top" src="./images/product/lg-a.jpg" alt="">
              </a>
              <ul class="product-badges">
                <li><span class="badge bg-success">New</span></li>
              </ul>
              <ul class="product-actions">
                <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
              </ul>
            </div>
            <div class="card-inner text-center">
              <ul class="product-tags">
                <li><a href="#">Smart Watch</a></li>
              </ul>
              <h5 class="product-title"><a href="html/product-details.html">Classy Modern Smart watch</a></h5>
              <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$350</small> $324</div>
            </div>
          </div>
        </div><!-- .col -->
        <div class="col">
          <div class="card card-bordered product-card">
            <div class="product-thumb">
              <a href="html/product-details.html">
                <img class="card-img-top" src="./images/product/lg-b.jpg" alt="">
              </a>
              <ul class="product-actions">
                <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
              </ul>
            </div>
            <div class="card-inner text-center">
              <ul class="product-tags">
                <li><a href="#">Vintage Phone</a></li>
              </ul>
              <h5 class="product-title"><a href="html/product-details.html">White Vintage telephone</a></h5>
              <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$209</small> $119</div>
            </div>
          </div>
        </div><!-- .col -->
        <div class="col">
          <div class="card card-bordered product-card">
            <div class="product-thumb">
              <a href="html/product-details.html">
                <img class="card-img-top" src="./images/product/lg-c.jpg" alt="">
              </a>
              <ul class="product-badges">
                <li><span class="badge bg-danger">Hot</span></li>
              </ul>
              <ul class="product-actions">
                <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
              </ul>
            </div>
            <div class="card-inner text-center">
              <ul class="product-tags">
                <li><a href="#">Headphone</a></li>
              </ul>
              <h5 class="product-title"><a href="html/product-details.html">Black Wireless Headphones</a></h5>
              <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$129</small> $89</div>
            </div>
          </div>
        </div><!-- .col -->
        <div class="col">
          <div class="card card-bordered product-card">
            <div class="product-thumb">
              <a href="html/product-details.html">
                <img class="card-img-top" src="./images/product/lg-d.jpg" alt="">
              </a>
              <ul class="product-actions">
                <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
              </ul>
            </div>
            <div class="card-inner text-center">
              <ul class="product-tags">
                <li><a href="#">Smart Watch</a></li>
              </ul>
              <h5 class="product-title"><a href="html/product-details.html">Modular Smart Watch</a></h5>
              <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$169</small> $120</div>
            </div>
          </div>
        </div><!-- .col -->
        <div class="col">
          <div class="card card-bordered product-card">
            <div class="product-thumb">
              <a href="html/product-details.html">
                <img class="card-img-top" src="./images/product/lg-e.jpg" alt="">
              </a>
              <ul class="product-actions">
                <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
              </ul>
            </div>
            <div class="card-inner text-center">
              <ul class="product-tags">
                <li><a href="#">Headphones</a></li>
              </ul>
              <h5 class="product-title"><a href="html/product-details.html">White Wireless Headphones</a></h5>
              <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$109</small> $78</div>
            </div>
          </div>
        </div><!-- .col -->
        <div class="col">
          <div class="card card-bordered product-card">
            <div class="product-thumb">
              <a href="html/product-details.html">
                <img class="card-img-top" src="./images/product/lg-f.jpg" alt="">
              </a>
              <ul class="product-actions">
                <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
              </ul>
            </div>
            <div class="card-inner text-center">
              <ul class="product-tags">
                <li><a href="#">Phone</a></li>
              </ul>
              <h5 class="product-title"><a href="html/product-details.html">Black Android Phone</a></h5>
              <div class="product-price text-primary h5">$329</div>
            </div>
          </div>
        </div><!-- .col -->
      </div>
    </div>
  </div>
@endsection
<<<<<<< HEAD
>>>>>>> 5fcc0c847dd2a4b85939cd433f5d54480e14c383
=======
>>>>>>> 6ad1373cf4a43c53c7fd261570bcbb7cae2a1bc9
