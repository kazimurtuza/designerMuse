@extends('frontend.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rating And Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{route('product.rating.review.store')}}">
                    @csrf
                <div class="modal-body">
                        <div class="mb-3">
                            <input type="hidden" name="order_details_id" id="order_details_id">

                            <label for="exampleInputEmail1" class="form-label">Product Rating <i class="fa-solid fa-star"></i></label>
                            <select class="form-select" name="rating" aria-label="Default select example" required>
                                <option value=""> </option>
                                <option value="1">&#9733;</option>
                                <option value="2"> &#9733;&#9733;</option>
                                <option value="3"> &#9733;&#9733;&#9733;</option>
                                <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                                <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Review</label>
                         <textarea class="form-control" name="review"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
{{--                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <nav class="projects-nav set-bg">
        <div class="projects-container container">
            <ul>
                <li>
                    <a href="#">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.21 5.61">
                  <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                      <path
                          d="M4.06,5.58a.23.23,0,0,0,.13-.22,1.81,1.81,0,0,0-.07-.52,2.05,2.05,0,0,0-.63-1A2,2,0,0,0,2.32,3.3a2.1,2.1,0,0,0-1.18.22,2.12,2.12,0,0,0-.87.86A2.06,2.06,0,0,0,0,5.13a1.64,1.64,0,0,0,0,.23.25.25,0,0,0,.14.22s0,0,0,0H4S4,5.58,4.06,5.58Z"
                          style="fill: #fff"
                      />
                      <path
                          d="M4.21,5.37A2.27,2.27,0,0,0,4,4.55,2.08,2.08,0,0,0,1.23,3.47,2,2,0,0,0,0,5.32c0,.16,0,.22.19.29,0,0,0,0,0,0A.25.25,0,0,1,0,5.36a1.64,1.64,0,0,1,0-.23,2.06,2.06,0,0,1,.24-.75,2.12,2.12,0,0,1,.87-.86A2.1,2.1,0,0,1,2.32,3.3a2,2,0,0,1,1.17.52,2.05,2.05,0,0,1,.63,1,1.81,1.81,0,0,1,.07.52.23.23,0,0,1-.13.22s0,0,0,0A.25.25,0,0,0,4.21,5.37Z"
                          style="fill: #fff"
                      />
                      <path
                          d="M2.1,0A1.4,1.4,0,1,0,3.51,1.4,1.4,1.4,0,0,0,2.1,0Z"
                          style="fill: #fff"
                      />
                    </g>
                  </g>
                </svg>
              </span>
                        Personal Information
                    </a>
                </li>
                <li>
                    <a href="#">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.82 5.04">
                  <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                      <path
                          d="M4.82,2.48v.69c0,.38-.21.68-.47.68H4.2v.24a.74.74,0,0,1-.74.74H3.25A.28.28,0,0,1,3,5h-.5a.29.29,0,0,1-.28-.28V4.65a.29.29,0,0,1,.28-.28H3a.28.28,0,0,1,.27.21h.21A.49.49,0,0,0,4,4.09V3.85H3.73c-.08,0-.14-.09-.14-.2V2c0-.11.06-.2.14-.2h0V1.71A1.16,1.16,0,0,0,2.6.55H2.24A1.16,1.16,0,0,0,1.08,1.71V1.8h0c.08,0,.14.09.14.2V3.65c0,.11-.06.2-.14.2H.47c-.26,0-.47-.3-.47-.68V2.48C0,2.1.21,1.8.47,1.8H.53V1.71A1.72,1.72,0,0,1,2.24,0H2.6A1.72,1.72,0,0,1,4.31,1.71V1.8h0C4.61,1.8,4.82,2.1,4.82,2.48Z"
                          style="fill: #fff"
                      />
                    </g>
                  </g>
                </svg>
              </span>
                        Support
                    </a>
                </li>
                <li>
                    <a href="#">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.27 3.34">
                  <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                      <path
                          d="M2.59,2.72v.62H0V0H2.53V.62H.77v.73H2.32V2H.77v.77Z"
                          style="fill: #fff"
                      />
                      <path
                          d="M6.27,0V3.34H5.63L4,1.31v2H3.2V0h.64L5.5,2V0Z"
                          style="fill: #fff"
                      />
                    </g>
                  </g>
                </svg>
              </span>
                        Langualge
                    </a>
                </li>
                <li>
                    <a href="#">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.19 4.94">
                  <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                      <path
                          d="M2.13,4.74c0-.3.09-.61.14-.91a.24.24,0,0,1,0-.08.19.19,0,0,1,.21-.17,2.56,2.56,0,0,0,.62-.06,1.3,1.3,0,0,0,1-1A1.71,1.71,0,0,0,4.19,2a.77.77,0,0,0-.41-.71h0c0,.16-.08.32-.13.47a1.44,1.44,0,0,1-1.18,1,3.35,3.35,0,0,1-.63,0H1.57a.26.26,0,0,0-.25.12V2.72l.24-1.45a.19.19,0,0,1,.19-.17H3.06a1.68,1.68,0,0,1,.72.16h0c0-.06,0-.12,0-.18s0,0,0-.06A.9.9,0,0,0,3.15.11,2,2,0,0,0,2.48,0H.87A.23.23,0,0,0,.64.2L.52,1C.45,1.41.38,1.87.3,2.32L.09,3.69,0,4.21c0,.13,0,.18.15.18h.93L1,4.72s0,0,0,.06a.12.12,0,0,0,.07.16H2A.21.21,0,0,0,2.13,4.74Z"
                          style="fill: #f4f4f4"
                      />
                    </g>
                  </g>
                </svg>
              </span>
                        Financial Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
              <span class="icon">
                <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17"
                    height="17"
                    viewBox="0 0 17 17"
                >
                  <g></g>
                  <path
                      d="M8.5 5.972c-1.378 0-2.5 1.122-2.5 2.5s1.122 2.5 2.5 2.5 2.5-1.122 2.5-2.5-1.122-2.5-2.5-2.5zM8.5 9.972c-0.827 0-1.5-0.673-1.5-1.5s0.673-1.5 1.5-1.5 1.5 0.673 1.5 1.5-0.673 1.5-1.5 1.5zM16.94 9.446c0.037-0.321 0.060-0.645 0.060-0.974s-0.023-0.653-0.060-0.974l-2.588-0.778c-0.119-0.402-0.278-0.787-0.474-1.149l1.279-2.377c-0.406-0.51-0.869-0.973-1.38-1.38l-2.377 1.28c-0.363-0.196-0.748-0.354-1.15-0.474l-0.776-2.588c-0.32-0.037-0.644-0.060-0.974-0.060s-0.654 0.023-0.974 0.060l-0.776 2.588c-0.403 0.119-0.789 0.278-1.15 0.475l-2.377-1.28c-0.511 0.406-0.974 0.869-1.379 1.38l1.279 2.375c-0.196 0.362-0.354 0.748-0.474 1.15l-2.589 0.778c-0.037 0.32-0.060 0.644-0.060 0.974s0.023 0.654 0.060 0.974l2.588 0.776c0.12 0.403 0.278 0.789 0.474 1.151l-1.279 2.376c0.406 0.511 0.869 0.974 1.38 1.38l2.377-1.279c0.362 0.196 0.748 0.354 1.15 0.474l0.776 2.588c0.321 0.037 0.645 0.060 0.974 0.060s0.654-0.023 0.974-0.060l0.776-2.588c0.402-0.12 0.788-0.278 1.15-0.474l2.376 1.279c0.511-0.407 0.974-0.87 1.38-1.381l-1.278-2.376c0.196-0.362 0.354-0.748 0.474-1.15l2.588-0.776zM13.548 9.419l-0.154 0.518c-0.1 0.337-0.233 0.66-0.396 0.959l-0.256 0.475 0.255 0.475 0.952 1.77c-0.099 0.105-0.201 0.207-0.306 0.306l-2.243-1.209-0.475 0.256c-0.301 0.163-0.624 0.295-0.96 0.396l-0.518 0.154-0.155 0.518-0.579 1.932c-0.072 0.002-0.143 0.003-0.213 0.003s-0.141-0.001-0.213-0.003l-0.579-1.932-0.155-0.518-0.518-0.154c-0.336-0.1-0.659-0.233-0.959-0.396l-0.475-0.256-2.245 1.207c-0.104-0.099-0.207-0.201-0.306-0.306l1.208-2.244-0.256-0.475c-0.162-0.3-0.295-0.623-0.396-0.96l-0.153-0.517-2.449-0.734c-0.003-0.072-0.004-0.143-0.004-0.212 0-0.070 0.001-0.141 0.004-0.213l2.448-0.734 0.154-0.518c0.1-0.337 0.233-0.66 0.396-0.959l0.256-0.475-1.208-2.245c0.099-0.104 0.201-0.207 0.305-0.306l2.247 1.21 0.476-0.259c0.297-0.162 0.619-0.295 0.956-0.395l0.518-0.154 0.155-0.518 0.579-1.932c0.073-0.001 0.144-0.002 0.214-0.002s0.141 0.001 0.213 0.003l0.579 1.932 0.155 0.518 0.518 0.154c0.335 0.1 0.659 0.233 0.96 0.396l0.475 0.255 2.244-1.208c0.104 0.099 0.207 0.201 0.306 0.306l-0.953 1.77-0.255 0.475 0.257 0.475c0.163 0.3 0.295 0.622 0.395 0.957l0.154 0.518 0.518 0.155 1.932 0.581c0.001 0.072 0.002 0.143 0.002 0.213s-0.001 0.141-0.004 0.213l-2.448 0.734z"
                      fill="#000000"
                  ></path>
                </svg>
              </span>
                        Settings
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Projects Table -->
    <section >
        <?php
        $subtotal=0;
        $shipping=0;
        ?>
        <div class="projects-container container mt-3">
            <h5 class="d-flex justify-content-end">Invoice ID : #{{$orderDetails->orderInfo->invoice_id}}</h5>
            <h5 class="d-flex justify-content-end">Date       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$orderDetails->orderInfo->date}}</h5>

            <div class="order-details-main mt-4">
                <table class="table table-borderless ">
                    <thead>
                    <tr>
                        {{--                        <th class="col">#</th>--}}
                        <th class="text-center" >Image</th>
                        <th class="text-center" >Name</th>
                        <th class="text-center">Unit Price</th>
                        <th class="text-center" >Shipping</th>
                        <th class="text-center" >Quantity</th>
                        <th class="totalpayamount" >Total</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($orderDetails->orderItems as $key=>$item)
                        <tr>
                            {{--                        <td class="text-center">{{$key+1}}</td>--}}
                            @if($item->productInfo->productImage && count($item->productInfo->productImage)>0 )
                                <td class="text-center"><img width="60" src="{{asset($item->productInfo->productImage[0]->image)}}" alt=""></td>
                            @else
                                <td class="text-center"><img width="60" src="not found" alt=""></td>
                            @endif
                            <td class="text-center">
                                {{$item->productInfo->name}}
                                <br>
                                <span class="review-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="orderData({{$item->id}})">
                                    Rating And Review
                                </span>

                            </td>
                            <td class="text-center">{{$item->unit_price}}</td>
                            <td class="text-center">{{$item->shipping_price}}</td>
                            <td class="text-center">{{$item->quantity}}</td>
                            <td class="totalpayamount">$ {{$item->total_payable}}</td>
                                <?php  $subtotal+=$item->total_payable; $shipping+=$item->shipping_price  ?>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row orderinfo-st">
                <div class="col-sm-6 shippingInfo order-details-main">
                    <h5 class="mb-4">Shipping Info</h5>
                    <h6>{{$orderDetails->orderInfo->first_name}} {{$orderDetails->orderInfo->last_name}}</h6>
                    <h6>{{$orderDetails->orderInfo->address}}</h6>
                    <h6>{{$orderDetails->orderInfo->city}}</h6>
                    <h6>{{$orderDetails->orderInfo->state}}</h6>
                    <h6>{{$orderDetails->orderInfo->zip_code}}</h6>
                </div>
                <div class="col-sm-6 ">
                    <table class="table table-borderless ">
                        <thead>
                        <tr>
                            <th class="totalpayamount" >Subtotal</th>
                            <th class="totalpayamount" >${{$subtotal}}</th>
                        </tr>
                        <tr>
                            <th class="totalpayamount" >Shipping</th>
                            <th class="totalpayamount" >${{$shipping}}</th>
                        </tr>
                        <tr>
                            <th class="totalpayamount" >Discount</th>
                            <th class="totalpayamount" >$0</th>
                        </tr>
                        <tr>
                            <th class="totalpayamount" >Total</th>
                            <th class="totalpayamount" >${{$subtotal+$shipping}}</th>
                        </tr>
                        </thead>

                    </table>
                </div>

            </div>


        </div>
    </section>


@endsection
@section('js_plugins')
@endsection
@section('js')
    <script>
        function orderData(orderDetailsId){
            $('#order_details_id').val(orderDetailsId)
        }

    </script>
@endsection


