@forelse($products as $key => $product)
   <tr>
      <td class="center">
         <label class="pos-rel">{{$key+ 1}}
            <input type="checkbox" class="ace" id="check">
            <span class="lbl"></span>
         </label>
      </td>
      <td><a class="click_me bolder" data-path="/product/show" title="show product"
             href="{{ route('product.show',$product->product_id) }}">{{ $product->product_name }}</a>
      </td>
      <td>{{ $product->sku }}</td>
      <td>{{ $product->buy_price }}</td>
      <td>{{ $product->is_off == 1 ? number_format($product->sale_price - $product->off_price ) : number_format($product->sale_price) }}</td>
      <td class="center">
         @if($product->status == 1)
            <a href="#" class="green bigger-140 show-details-btn" title="Active" disabled="">
               <i class="ace-icon fa fa-angle-double-up"></i>
               <span class="sr-only">Active</span>
            </a>
         @else
            <a href="#" class="red bigger-140 show-details-btn" title="De Active" disabled="">
               <i class="ace-icon fa fa-angle-double-down"></i>
               <span class="sr-only">De Active</span>
               <small>{{ $product->data_available }}</small>
            </a>
         @endif
      </td>
      {{--            <td class="center">--}}
      {{--               @if($product->status == 0)--}}
      {{--                  <b>{{ $product->data_available }}</b>--}}
      {{--               @else--}}
      {{--                  <i class="glyphicon green glyphicon-ok bigger-130"></i>--}}
      {{--            @endif--}}
      {{--            <td>--}}
      <td class="center">
         @if($product->is_off == 1)
            <span class='label label-warning smaller-80'>HAS-OFF</span>
            <b>{{ number_format($product->off_price) }}</b>
         @else
            <span class="label label-info smaller-80">NOT OFF</span>
         @endif
      </td>
      {{--            <td class="smaller-80">{{ $product->is_off == 1 ? $product->off_price : '' }}</td>--}}
      <td class="smaller-80">
         @foreach($product->categories as $category)
            <span class='label label-default smaller-90'>{{ $category->category_name }}</span>
         @endforeach
      </td>
      <td class="smaller-80">
         @foreach($product->colors as $color)
            <span style=" background: {{ $color->color_code }} "
                  class="label label-sm">{{ $color->color_name }}</span>
         @endforeach
      </td>
      {{--            <td class="smaller-80">{{ $product->made_in }}</td>--}}
      <td>{{ Str::limit($product->description,50,'...')  }}</td>
      <td>
         <img src="{{ asset($product->thumbnail) }}" alt="cover photo" width="80" height="100">
      </td>
      <td class="smaller-80">{{ $product->created_at }}</td>
      <td>
         <div class="hidden-sm hidden-xs btn-group">
            <form>
               <button class="btn btn-xs btn-danger delete_me" data-id="{{ $product->product_id }}">
                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
               </button>
               @if(isset($index_categories))
                  <a class="btn btn-warning btn-xs edit_me" title="Edit"
                     href="{{route('product.edit',$product->product_id)}}" data-id="{{ $product->product_id }}">
                     <i class="ace-icon fa fa-pencil bigger-120"></i></a>
               @else
                  <button class="btn btn-success btn-xs restore_me" title="Restore"
                          data-id="{{route('product.restore',$product->product_id)}}"><i
                             class="ace-icon fa fa-check bigger-120"></i>
                  </button>
               @endif
            </form>
            <a class=" btn btn-xs btn-info click_me bolder" data-path="/admin/product/{{$product->product_id}}"
               title="show product"
               href="{{ route('product.show',$product->product_id) }}"><i
                       class="ace-icon fa fa-eye bigger-120"></i>
            </a>
         </div>
      </td>
      <td>


      </td>
   </tr>
@empty
   <tr>
      <td colspan="16" class="text-capitalize">There are no date</td>
   </tr>
@endforelse