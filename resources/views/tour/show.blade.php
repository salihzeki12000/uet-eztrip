@extends('layouts.master')

@section('title', $tour->name)

@section('page-level-styles')
    @parent
    {{Html::style('css/date_time_picker.css')}}
    <style>
        input[type=number].text-appearance::-webkit-inner-spin-button,
        input[type=number].text-appearance::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
    <link href="{{asset('css/skins/square/grey.css')}}" rel="stylesheet">
@endsection

@section('page')
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{$tour->url_cover}}"
             data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>{{$tour->name}}</h1>
                        <span>{{$tour->place}}</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i><small>(75)</small></span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main">
                            from/per person <span><sup>$</sup>{{$tour->price}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="{{route('tour.lists')}}">Tours</a></li>
                <li>{{$tour->name}}</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">

                <div id="single_tour_feat">
                    <ul>
                        <li><i class="icon_set_1_icon-4"></i>Museum</li>
                        <li><i class="icon_set_1_icon-83"></i>{{$tour->time_duration}} Hours</li>
                        <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                        <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                        <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                        <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                        <li><i class="icon_set_1_icon-29"></i>{{$tour->tourguide ? $tour->tourguide->name : ''}}</li>
                    </ul>
                </div>

                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap"
                                                    aria-expanded="false" aria-controls="collapseMap"
                                                    data-text-swap="Hide map" data-text-original="View on map">View on
                        map</a></p><!-- Map button for tablets/mobiles -->

                @role('admin')
                <div class="row visible-sm visible-xs">
                    <div class="col-xs-6">
                        <a href="{{route('tour.edit', $tour->id)}}" class="btn btn-warning" style="width: 100%">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a href="{{route('tour.delete', $tour->id)}}" class="btn btn-danger" style="width: 100%">
                            <i class="fa fa-trash"></i> Delete
                        </a>
                    </div>
                </div>
                @endrole

                <hr class="visible-sm visible-xs">

                <div class="row">
                    <div class="col-md-3">
                        <h3>Description</h3>
                    </div>
                    <div class="col-md-9">
                        {!! $tour->description !!}
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>Schedule</h3>
                    </div>
                    <div class="col-md-9">
                        <div class=" table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        1st March to 31st October
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Monday
                                    </td>
                                    <td>
                                        10.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tuesday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Wednesday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Thursday
                                    </td>
                                    <td>
                                        <span class="label label-danger">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Friday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Saturday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sunday
                                    </td>
                                    <td>
                                        10.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong><em>Last Admission</em></strong>
                                    </td>
                                    <td>
                                        <strong>17.00</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        1st November to 28th February
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Monday
                                    </td>
                                    <td>
                                        10.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tuesday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Wednesday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Thursday
                                    </td>
                                    <td>
                                        <span class="label label-danger">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Friday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Saturday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sunday
                                    </td>
                                    <td>
                                        10.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong><em>Last Admission</em></strong>
                                    </td>
                                    <td>
                                        <strong>17.00</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>Reviews </h3>
                        <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a
                            review</a>
                    </div>
                    <div class="col-md-9">
                        <div id="general_rating">11 Reviews
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End general_rating -->
                        <div class="row" id="rating_summary">
                            <div class="col-md-6">
                                <ul>
                                    <li>Position
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Tourist guide
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Price
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Quality
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row -->
                        <hr>
                        <div class="review_strip_single">
                            {{Html::image('https://triip.imgix.net/new/img/triip-ava-bg/default-avatar-05.png?crop=faces&fit=crop&h=76&w=76', 'Image', ['class' => 'img-circle'])}}
                            <small> - 10 March 2015 -</small>
                            <h4>Mary</h4>
                            <p>
                                She was great! She was very flexible and changes our itinerary to suit our taste. She knows the place around, and knows where to eat good food. She is very accomodating and fun to be around. We highly recommend her for your food trip. Unlike other food trip guide she don't cringe you with less food . Her service is worth every penny you pay for . She would bring you to places where they serve you with great food and big servings.
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single">
                            {{Html::image('https://triip.imgix.net/new/img/triip-ava-bg/default-avatar-13.png?crop=faces&fit=crop&h=76&w=76', 'Image', ['class' => 'img-circle'])}}
                            <small> - 10 March 2015 -</small>
                            <h4>Amanda</h4>
                            <p>
                                Fantastic night with great company!! Luci really took care of us and is such a sweetheart. Thank you Luci xx
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single last">
                            {{Html::image('https://triip.imgix.net/new/img/triip-ava-bg/default-avatar-26.png?crop=faces&fit=crop&h=76&w=76', 'Image', ['class' => 'img-circle'])}}
                            <small> - 10 March 2015 -</small>
                            <h4>Jiyun</h4>
                            <p>
                                Luci was the perfect tour guide. She knew all the local spots and planned out everything in advance so that I could spend my short time in Hanoi in the most optimal way. Furthermore, she was very accommodating, friendly, and punctual. I would definitely book another triip with her next time I'm in Hanoi! Thank you, Luci!
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->
                    </div>
                </div>
            </div><!--End  single_tour_desc-->

            <aside class="col-md-4">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                       aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on
                        map</a>
                </p>

                @role('admin')
                <div class="row hidden-sm hidden-xs" style="margin-bottom: 20px;">
                    <div class="col-md-6">
                        <a href="{{route('tour.edit', $tour->id)}}" class="btn btn-warning" style="width: 100%">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('tour.delete', $tour->id)}}" class="btn btn-danger" style="width: 100%">
                            <i class="fa fa-trash"></i> Delete
                        </a>
                    </div>
                </div>
                @endrole

                <div class="box_style_1 expose">
                    <h3 class="inner">- Booking -</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> Select a date</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class=" icon-clock"></i> Time</label>
                                <input class="time-pick form-control" value="12:00 AM" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Number of people</label>
                                <div class="numbers-row">
                                    <input type="number" min="1" value="1" id="num_people" class="qty2 form-control text-appearance" name="quantity">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <table class="table table_summary">
                        <tbody>
                        <tr>
                            <td>
                                Number of people
                            </td>
                            <td class="text-right" id="num_people_val">
                                1
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Price
                            </td>
                            <td class="text-right" id="price">
                                ${{$tour->price}}
                            </td>
                        </tr>
                        <tr class="total">
                            <td>
                                Total cost
                            </td>
                            <td class="text-right" id="total-cost">
                                ${{$tour->price}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn_full" href="javascript:" id="book-now">Book now</a>
                    <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
                </div><!--/box_style_1 -->

                @include('partials.need_help')
            </aside>
        </div><!--End row -->
    </div><!--End container -->


    <!-- Modal Review -->
    <div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myReviewLabel">Write your review</h4>
                </div>
                <div class="modal-body">
                    <div id="message-review">
                    </div>
                    <form method="post" action="assets/review_tour.php" name="review_tour" id="review_tour">
                        <input name="tour_name" id="tour_name" type="hidden" value="Paris Arch de Triomphe Tour">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name_review" id="name_review" type="text" placeholder="Your name"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="lastname_review" id="lastname_review" type="text"
                                           placeholder="Your last name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email_review" id="email_review" type="email" placeholder="Your email"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Position</label>
                                    <select class="form-control" name="position_review" id="position_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tourist guide</label>
                                    <select class="form-control" name="guide_review" id="guide_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <select class="form-control" name="price_review" id="price_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quality</label>
                                    <select class="form-control" name="quality_review" id="quality_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="form-group">
                        <textarea name="review_text" id="review_text" class="form-control" style="height:100px"
                                  placeholder="Write your review"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="verify_review" class=" form-control"
                                   placeholder="Are you human? 3 + 1 =">
                        </div>
                        <input type="submit" value="Submit" class="btn_1" id="submit-review">
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End modal review -->

    <div hidden>
        {{Form::open(['method' => 'post', 'route' => 'cart.add', 'id' => 'cart-add-form'])}}
        {{Form::hidden('id')}}
        {{Form::hidden('name')}}
        {{Form::hidden('qty')}}
        {{Form::hidden('price')}}
        {{Form::hidden('url_gird')}}
        {{Form::close()}}
    </div>
@endsection


@section('page-level-scripts')
    @parent
    <!-- Specific scripts -->
    {{Html::script('js/icheck.js')}}
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>

    <!-- Date and time pickers -->
    {{Html::script('js/bootstrap-datepicker.js')}}
    {{Html::script('js/bootstrap-timepicker.js')}}
    <script>
        $('input.date-pick').datepicker('setDate', 'today');
        $('input.time-pick').timepicker({
            minuteStep: 15,
            showInpunts: false
        })
    </script>

    <!--Review modal validation -->
{{--    {{Html::script('assets/validate.js')}}--}}

    <!-- Map -->
    <script>
        window.mapData = JSON.parse('{!! json_encode($mapData) !!}')
    </script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUNwUy389-GS3hRhjAoXogLTwwntRQl6A"></script>
    {{Html::script('js/map.js')}}
    {{Html::script('js/infobox.js')}}

    <script>
        function updateSum() {
            var numPeople = $('#num_people');
            var numPeopleVal = Math.abs(parseInt(numPeople.val())) || 1;
            var price = parseFloat('{{$tour->price}}');
            numPeople.val(numPeopleVal);
            $('#num_people_val').text(numPeopleVal);
            $('#total-cost').text("$" + numPeopleVal*price);
        }

        $(function() {
            $('body')
                .on('change', '#adults, #children', updateSum)
                .on('click', '.button_inc', updateSum);

            $('#book-now').click(function() {
                var form = $('#cart-add-form');
                var numPeopleVal = Math.abs(parseInt($('#num_people').val())) || 1;

                if (numPeopleVal > 0) {
                    form.find('input[name="id"]').val({{$tour->id}});
                    form.find('input[name="name"]').val('{{$tour->name}}');
                    form.find('input[name="qty"]').val(numPeopleVal);
                    form.find('input[name="price"]').val({{$tour->price}});
                    form.find('input[name="url_gird"]').val('{{$tour->url_gird}}');
                    form.submit();
                } else {
                    toastr['warning']('Please choose at least one people', 'Number of people must be greater than 0');
                }
            });
        })
    </script>
@endsection
