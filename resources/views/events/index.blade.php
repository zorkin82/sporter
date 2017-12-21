@extends('layout')
@section('content')

    @foreach ($events as $event)
        <div class="shortcode-html">
            <ul class="list-unstyled">
                <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left g-rounded-3 g-pa-20 g-mb-7">
                    <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">{{$event->title}}</h5>
                        <span class="ml-auto small g-color-blue g-px-10">{{$event->formatted_date}}</span>
                    </div>

                    <em class="d-block g-color-gray-dark-v5 g-font-style-normal g-font-size-13 g-mb-2">{{$event->venue_address}}</em>
                    <em class="d-block g-color-gray-dark-v5 g-font-style-normal g-font-size-12">{{$event->zip}} {{$event->city}}</em>
                    <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">
                            @if ($event->published_at)
                            <li class="list-inline-item mr-0">
                                <span class="u-link-v4 d-inline-block g-bg-primary g-color-white g-font-weight-600 g-text-underline--none--hover g-rounded-3 g-py-8 g-px-11" >Ver&ouml;ffentlicht</span>
                            </li>
                                @endif
                        </ul>
                        <div class="align-self-center">
                            <a class="btn u-btn-outline-blue g-brd-2 g-font-weight-600 g-rounded-3" href="#!">Anmeldung</a>
                            <a class="btn u-btn-outline-blue g-brd-2 g-font-weight-600 g-rounded-3" href="{{route('event.show',$event->id)}}">Details</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    @endforeach

@endsection