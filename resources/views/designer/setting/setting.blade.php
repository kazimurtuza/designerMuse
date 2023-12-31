@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->


    <!-- Projects Table -->
    <section class="mt-5 mb-5 row">
        <div class="col-sm-5 projects-container container cart-st">
            <h4 class="mb-4"> {{languageGet()=='en'?'Service Rate Set':'تحديد أسعار الخدمة'}}</h4>
            <form action="{{route('designer.service.rate.store')}}" method="post">
                @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"> {{languageGet()=='en'?'Call Rate':'سعر المكالمة'}}</span>
                        </div>
                        <input type="number" class="form-control" name="call_rate" value="{{$designerInfo?$designerInfo->call_rate:''}}" id="basic-url" aria-describedby="basic-addon3" >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"> {{languageGet()=='en'?'Video Rate':'معدل الفيديو'}}</span>
                        </div>
                        <input type="number" class="form-control" id="basic-url" name="video_rate" value="{{$designerInfo?$designerInfo->video_rate:''}}"  aria-describedby="basic-addon3" >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"> {{languageGet()=='en'?'Online Rate':'سعر الانترنت'}}</span>
                        </div>
                        <input type="nubmer" class="form-control" name="online_rate" id="basic-url" value="{{$designerInfo?$designerInfo->online_rate:''}}" aria-describedby="basic-addon3" >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success w-100">Save</button>
                    </div>
                </div>

            </div>

            </form>


        </div>

        </div>
    </section>
    <section class="mt-5 mb-5 row">
        <div class="col-sm-5 projects-container container cart-st">
            <h4 class="mb-4"> {{languageGet()=='en'?'Time Schedule Set':'تعيين الجدول الزمني'}}</h4>
            <form action="{{route('designer.service.rate.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Schedule Range {{languageGet()=='en'?'Time Schedule Set':'نطاق الجدول الزمني'}}</span>
                            </div>
                            <select name="active_time_schedule" id=""   class="form-control"
                                    id="basic-url" required>
                                <option value="">SELECT</option>
                                <option value="15" {{$designerInfo->active_time_schedule==15?'selected':''}}>15 {{languageGet()=='en'?'Minutes':'دقائق'}}</option>
                                <option value="30" {{$designerInfo->active_time_schedule==30?'selected':''}}>30 {{languageGet()=='en'?'Minutes':'دقائق'}}</option>
                                <option value="60" {{$designerInfo->active_time_schedule==60?'selected':''}}>60 {{languageGet()=='en'?'Minutes':'دقائق'}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success w-100">{{languageGet()=='en'?'Time Schedule Set':'نطاق الجدول الزمني'}}</button>
                        </div>
                    </div>

                </div>

            </form>


        </div>
    </section>



@endsection
@section('js_plugins')
@endsection
@section('js')
    <script>
        function getSlot(data) {
            $duration = $(data).val();
            $.ajax({
                url: "{{route('time.schedule.slot.get')}}",
                type: "get",
                data: {
                    duration: $duration,
                },
                success: function (response) {
                    $('#timeSlot').html(response)
                    // console.log(response);
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }
    </script>
@endsection


