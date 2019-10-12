@extends(!Request::ajax() ? 'layout.admin.index' : 'layout.empty')
@section('content')
   <div class="row">
      <div class="col-sm-12">
         <div class="widget-box">
            <div class="widget-header widget-header-flat widget-header-small">
               <h5 class="widget-title">
                  <i class="ace-icon fa fa-signal"></i>
                  <b>Orders</b>
               </h5>
               <div class="widget-toolbar no-border">
                  <div class="inline dropdown-hover">
                     <button class="btn btn-minier btn-primary">
                        Today
                        <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                     </button>

                     <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                        <li class="active">
                           <a href="#" class="blue">
                              <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                              This Week
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                              Last Week
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                              This Month
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                              All Time
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="widget-body">
               <div class="space-10"></div>

               <div class="infobox-container">
                  <div class="infobox infobox-black">
                     <div class="infobox-icon">
                        <i class="ace-icon fa fa-shopping-basket"></i>
                     </div>

                     <div class="infobox-data">
                        <span class="infobox-data-number">{{ $menu_count['orders']  }}</span>
                        <div class="infobox-content">All Orders</div>
                     </div>

                     {{--                        <div class="stat stat-success"></div>--}}
                  </div>

                  <div class="infobox infobox-orange">
                     <div class="infobox-icon">
                        <i class="ace-icon fa fa-circle-o"></i>
                     </div>
                     <div class="infobox-data">
                        <span class="infobox-data-number">{{ $order_sent }}</span>
                        <div class="infobox-content">Sent</div>
                     </div>
                     {{--                        <div class="badge badge-success">--}}

                     {{--                           <i class="ace-icon fa fa-arrow-up"></i>--}}
                     {{--                        </div>--}}
                  </div>

                  <div class="infobox infobox-green">
                     <div class="infobox-icon">
                        <i class="ace-icon fa fa-thumbs-up"></i>
                     </div>

                     <div class="infobox-data">
                        <span class="infobox-data-number">{{ $order_delivered }}</span>
                        <div class="infobox-content">Delivered</div>
                     </div>
                     {{--                        <div class="stat stat-important">4%</div>--}}
                  </div>

                  <div class="infobox infobox-red">
                     <div class="infobox-icon">
                        <i class="ace-icon fa fa-newspaper-o"></i>
                     </div>

                     <div class="infobox-data">
                        <span class="infobox-data-number">{{$order_news}}</span>
                        <div class="infobox-content">New Orders</div>
                     </div>
                  </div>

                  <div class="space-10"></div>
               </div>
            </div>
            <!-- /.widget-body -->
         </div>
      </div>
   </div>

   <div class="row">
      <!-- Payments -->
      <div class="col-sm-6">
         <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
               <h4 class="widget-title lighter">
                  <i class="ace-icon fa fa-credit-card orange"></i>
                  <b>Payments:</b>
               </h4>

               <div class="widget-toolbar">
                  <a href="#" data-action="collapse">
                     <i class="ace-icon fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>

            <div class="space-6"></div>

            <div class="widget-body" style="display: block;">
               <div class="widget-main no-padding">
                  <div class="infobox-container">
                     <div class="infobox infobox-orange">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-credit-card"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">32</span>
                           <div class="infobox-content">Payments of Today</div>
                        </div>

                        {{--                        <div class="stat stat-success"></div>--}}
                     </div>

                     <div class="infobox infobox-orange">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-money"></i>
                        </div>
                        <div class="infobox-data">
                           <span class="infobox-data-number">11</span>
                           <div class="infobox-content">This Month</div>
                        </div>
                        {{--                        <div class="badge badge-success">--}}

                        {{--                           <i class="ace-icon fa fa-arrow-up"></i>--}}
                        {{--                        </div>--}}
                     </div>

                     <div class="infobox infobox-orange">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-paypal"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">8</span>
                           <div class="infobox-content">All Payments</div>
                        </div>
                        {{--                        <div class="stat stat-important">4%</div>--}}
                     </div>

                     <div class="infobox infobox-orange">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-newspaper-o"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">7</span>
                           <div class="infobox-content">New Payments</div>
                        </div>
                     </div>

                     <div class="space-6"></div>

                     <div class="infobox infobox-green infobox-small infobox-dark">
                        <div class="infobox-progress">
                           <div class="easy-pie-chart percentage" data-percent="61" data-size="39"
                                style="height: 39px; width: 39px; line-height: 38px;">
                              <span class="percent">61</span>%
                              <canvas height="48" width="48" style="height: 39px; width: 39px;"></canvas>
                           </div>
                        </div>

                        <div class="infobox-data">
                           <div class="infobox-content">Task</div>
                           <div class="infobox-content">Completion</div>
                        </div>
                     </div>

                     <div class="infobox infobox-blue infobox-small infobox-dark">
                        <div class="infobox-chart">
                           <span class="sparkline" data-values="3,4,2,3,4,4,2,2"><canvas width="39" height="19"
                                                                                         style="display: inline-block; width: 39px; height: 19px; vertical-align: top;"></canvas></span>
                        </div>

                        <div class="infobox-data">
                           <div class="infobox-content">Earnings</div>
                           <div class="infobox-content">$32,000</div>
                        </div>
                     </div>

                     <div class="infobox infobox-grey infobox-small infobox-dark">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-download"></i>
                        </div>

                        <div class="infobox-data">
                           <div class="infobox-content">Downloads</div>
                           <div class="infobox-content">1,205</div>
                        </div>
                     </div>
                  </div>
               </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
         </div><!-- /.widget-box -->

      </div>

      <!-- USERS -->
      <div class="col-sm-6">
         <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
               <h4 class="widget-title lighter">
                  <i class="ace-icon fa fa-users orange"></i>
                  <b>Users:</b>
               </h4>

               <div class="widget-toolbar">
                  <a href="#" data-action="collapse">
                     <i class="ace-icon fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="space-30"></div>
            <div class="widget-body" style="display: block;">
               <div class="widget-main no-padding">
                  <div class="clearfix">
                     <div class="grid3">
                        <span class="grey">
                           <i class="ace-icon fa fa-user fa-2x blue"></i>
                            Users</span>
                        <h4 class="bigger pull-right">1,255</h4>
                     </div>

                     <div class="grid3">
                        <span class="grey">
                           <i class="ace-icon fa fa-user-times fa-2x purple"></i>
                           Guests
                        </span>
                        <h4 class="bigger pull-right">941</h4>
                     </div>

                     <div class="grid3">
                        <span class="grey"><i class="ace-icon fa fa-user-plus fa-2x red"></i>
                           New Users
                        </span>
                        <h4 class="bigger pull-right">1,050</h4>
                     </div>
                  </div>
               </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
         </div><!-- /.widget-box -->
      </div><!-- /.col -->

   </div>
   <div class="space-10"></div>
   <div class="row">
      <div class="col-sm-6">
         <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
               <h4 class="widget-title lighter">
                  <i class="ace-icon fa fa-product-hunt"></i>
                  <b> Products:</b>
               </h4>

               <div class="widget-toolbar">
                  <a href="#" data-action="collapse">
                     <i class="ace-icon fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="space-6"></div>
            <div class="widget-body" style="display: block;">
               <div class="widget-main no-padding">
                  <div class="infobox-container">
                     <div class="infobox infobox-blue">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-list "></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number blue">{{ $menu_count['products'] }}</span>
                           <div class="infobox-content">All Products</div>
                        </div>

                        {{--                        <div class="stat stat-success"></div>--}}
                     </div>

                     <div class="infobox infobox-blue">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-thumbs-up"></i>
                        </div>
                        <div class="infobox-data">
                           <span class="infobox-data-number">{{ $available_products }}</span>
                           <div class="infobox-content">Available Products</div>
                        </div>
                        {{--                        <div class="badge badge-success">--}}

                        {{--                           <i class="ace-icon fa fa-arrow-up"></i>--}}
                        {{--                        </div>--}}
                     </div>

                     <div class="infobox infobox-blue">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-circle"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">{{ $discounted_products }}</span>
                           <div class="infobox-content">Discounted Products</div>
                        </div>
                        {{--                        <div class="stat stat-important">4%</div>--}}
                     </div>

                     <div class="infobox infobox-red">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-newspaper-o"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">{{ $product_news }}</span>
                           <div class="infobox-content">last week products</div>
                        </div>
                     </div>

                     <div class="space-6"></div>

                     <div class="infobox infobox-green infobox-small infobox-dark">
                        <div class="infobox-progress">
                           <div class="easy-pie-chart percentage" data-percent="61" data-size="39"
                                style="height: 39px; width: 39px; line-height: 38px;">
                              <span class="percent">61</span>%
                              <canvas height="48" width="48" style="height: 39px; width: 39px;"></canvas>
                           </div>
                        </div>

                        <div class="infobox-data">
                           <div class="infobox-content">Product</div>
                           <div class="infobox-content">availability</div>
                        </div>
                     </div>

                     <div class="infobox infobox-blue infobox-small infobox-dark">
                        <div class="infobox-chart">
                           <span class="sparkline" data-values="3,4,2,3,4,4,2,2">
                              <canvas width="39" height="19"
                                      style="display: inline-block; width: 39px; height: 19px; vertical-align: top;"></canvas></span>
                        </div>

                        <div class="infobox-data">
                           <div class="infobox-content small">????</div>
                           <div class="infobox-content">$32,000</div>
                        </div>
                     </div>

                     <div class="infobox infobox-grey infobox-small infobox-dark">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-download"></i>
                        </div>

                        <div class="infobox-data">
                           <div class="infobox-content">?????</div>
                           <div class="infobox-content">1,205</div>
                        </div>
                     </div>
                  </div>
               </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
         </div><!-- /.widget-box -->

      </div>
      <div class="col-sm-6">
         <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
               <h4 class="widget-title lighter">
                  <i class="ace-icon fa fa-product-hunt"></i>
                  <b>Popular Products:</b>
               </h4>

               <div class="widget-toolbar">
                  <a href="#" data-action="collapse">
                     <i class="ace-icon fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="space-6"></div>
            <div class="widget-body" style="display: block;">
               <div class="widget-main no-padding">
                  <table class="table table-bordered table-striped">
                     <thead class="thin-border-bottom">
                     <tr>
                        <th>
                           <i class="ace-icon fa fa-caret-right blue"></i>name
                        </th>

                        <th>
                           <i class="ace-icon fa fa-caret-right blue"></i>price
                        </th>

                        <th class="hidden-480">
                           <i class="ace-icon fa fa-caret-right blue"></i>status
                        </th>
                     </tr>
                     </thead>

                     <tbody>
                     @forelse($popular_products as $product)
                        <tr>
                           <td>
                              <a href="{{ route('product.show',$product->product_id) }}">{{ $product->product_name }}</a>
                           </td>
                           <td>
                              @if($product->is_off == 1)
                                 <small>
                                    <s class="red">{{ $product->sale_price }}</s>
                                 </small>
                                 <b class="green">{{ $product->price }}</b>
                              @else
                                 <b class="gray">{{ $product->price }}</b>
                              @endif
                           </td>

                           <td class="hidden-480">
                              @if($product->status == 0 )
                                 <span class="label label-danger arrowed-right arrowed-in">Finish!</span>
                              @else
                                 <span class="label label-info arrowed-right arrowed-in">on sale</span>
                              @endif
                           </td>
                        </tr>
                     @empty
                        <tr>
                           <td colspan="3">No Data</td>
                        </tr>
                     @endforelse

                     </tbody>
                  </table>
               </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
         </div><!-- /.widget-box -->

      </div>
   </div>



@endsection