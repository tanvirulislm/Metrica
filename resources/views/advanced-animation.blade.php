@extends('layouts.animation-master')
@section('title')Metrica @endsection
@section('css')
<link href="{{URL::asset('assets/plugins/animate/magic.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Advanced UI @endslot
@slot('title') Animation @endslot
@endcomponent

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="page-title">Masic Animation</h4>
                    <h6 class="mb-5 fw-normal text-muted">CSS3 Animations with special effects.</h6>
                    <div class="position-relative d-inline-block mx-auto">
                        <div id="animate-me">
                            <div class="shadow-sm p-4 d-inline-block rounded-circle">
                                <img src="{{URL::asset('assets/images/logo-sm.png')}}" alt="" class="center-block thumb-xl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div id="content" class="col-lg-6 mx-auto text-center button-list container-magic-bottom container text-center">
                            <div style="height: 450px;" data-simplebar>
                                <h5 class="mb-3 font-15">Magic Effects</h5>
                                <button type="button" class="btn btn-de-primary btn-sm" data-test="vanishIn">Masic</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="twisterInDown">TwisterInDown</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="twisterInUp">TwisterInUp</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="swap">Swap</button>

                                <h5 class="mb-3 font-15">Bling</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="puffIn">PuffIn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="puffOut">PuffOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="vanishIn">VanishIn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="vanishOut">VanishOut</button>

                                <h5 class="mb-3 font-15">Static Effects</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openDownLeft">OpenDownLeft</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openDownRight">OpenDownRight</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openUpLeft">OpenUpLeft</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openUpRight">OpenUpRight</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openDownLeftReturn">OpenDownLeftReturn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openDownRightReturn">OpenDownRightReturn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openUpLeftReturn">OpenUpLeftReturn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openUpRightReturn">OpenUpRightReturn</button>

                                <h5 class="mb-3 font-15">Static Effects Out</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openDownLeftOut">OpenDownLeftOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openDownRightOut">OpenDownRightOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openUpLeftOut">OpenUpLeftOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="openUpRightOut">OpenUpRightOut</button>

                                <h5 class="mb-3 font-15">Perspective</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="perspectiveDown">PerspectiveDown</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="perspectiveUp">PerspectiveUp</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="perspectiveLeft">PerspectiveLeft</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="perspectiveRight">PerspectiveRight</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="perspectiveDownReturn">PerspectiveDownReturn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="perspectiveUpReturn">PerspectiveUpReturn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="perspectiveLeftReturn">PerspectiveLeftReturn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="perspectiveRightReturn">PerspectiveRightReturn</button>
                                <h5 class="mb-3 font-15">Rotate</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="rotateDown">RotateDown</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="rotateUp">RotateUp</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="rotateLeft">RotateLeft</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="rotateRight">RotateRight</button>

                                <h5 class="mb-3 font-15">Slide</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="slideDown">SlideDown</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="slideUp">SlideUp</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="slideLeft">SlideLeft</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="slideRight">SlideRight</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="slideDownReturn">SlideDownReturn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="slideUpReturn">SlideUpReturn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="slideLeftReturn">SlideLeftReturn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="slideRightReturn">SlideRightReturn</button>

                                <h5 class="mb-3 font-15">Math</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="swashOut">SwashOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="swashIn">SwashIn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="foolishIn">FoolishIn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="holeOut">HoleOut</button>

                                <h5 class="mb-3 font-15">Tin</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="tinRightOut">TinRightOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="tinLeftOut">TinLeftOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="tinUpOut">TinUpOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="tinDownOut">TinDownOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="tinRightIn">TinRightIn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="tinLeftIn">TinLeftIn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="tinUpIn">TinUpIn</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="tinDownIn">TinDownIn</button>

                                <h5 class="mb-3 font-15">Bomb</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="bombRightOut">BombRightOut</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="bombLeftOut">BombLeftOut</button>

                                <h5 class="mb-3 font-15">Boing</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="boingInUp">BoingInUp</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="boingOutDown">BoingOutDown</button>

                                <h5 class="mb-3 font-15">On The Space</h5>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="spaceOutUp">SpaceOutUp</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="spaceOutRight">SpaceOutRight</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="spaceOutDown">SpaceOutDown</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="spaceOutLeft">SpaceOutLeft</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="spaceInUp">SpaceInUp</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="spaceInRight">SpaceInRight</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="spaceInDown">SpaceInDown</button>

                                <button type="button" class="btn btn-de-primary btn-sm btn-animation" data-test="spaceInLeft">SpaceInLeft</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->


@endsection
@section('script')
<script src="{{URL::asset('assets/pages/animation.init.js')}}"></script>
@endsection
