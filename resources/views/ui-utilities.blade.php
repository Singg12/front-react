@extends('layouts.master')
@section('title') @lang('translation.Utilities')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Components @endslot
@slot('title') Utilities @endslot
@endcomponent
  
<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Additive Border</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="border border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border-top border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border-end border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border-bottom border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border-start border-primary bg-light p-5 d-inline-block"></span>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Subtractive Border</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="border border-0 border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border border-top-0 border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border border-end-0 border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border border-bottom-0 border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border border-start-0 border-primary bg-light p-5 d-inline-block"></span>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-4">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Border Opacity</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="border border-primary border-opacity-10 bg-light p-5 d-inline-block"></span>
                    <span class="border border-primary border-opacity-25 bg-light p-5 d-inline-block"></span>
                    <span class="border border-primary border-opacity-50 bg-light p-5 d-inline-block"></span>
                    <span class="border border-primary border-opacity-75 bg-light p-5 d-inline-block"></span>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Border Width</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="border border-1 p-5 d-inline-block"></span>
                    <span class="border border-2 p-5 d-inline-block"></span>
                    <span class="border border-3 p-5 d-inline-block"></span>
                    <span class="border border-4 p-5 d-inline-block"></span>
                    <span class="border border-5 p-5 d-inline-block"></span>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Border Radius</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded avatar-xl" alt=" ">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-top avatar-xl" alt="">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-end avatar-xl" alt="">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-bottom avatar-xl" alt="">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-start avatar-xl" alt="">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xl" alt="">
                    <img src="assets/images/small/img-3.jpg" alt="" class="rounded-pill w-25 h-auto">
                </div>
            </div>
        </div>
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Rounded Sizes</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-0 avatar-xl" alt="">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-1 avatar-xl" alt="">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-2 avatar-xl" alt="">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-3 avatar-xl" alt="">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-4 avatar-xl" alt="">
                    <img src="assets/images/users/avatar-10.jpg" class="rounded-5 avatar-xl" alt="">
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Direction of Flex Row & Reverse</h4>
                <a href="https://getbootstrap.com/docs/5.2/utilities/flex/#direction" target="_blank" class="btn btn-sm btn-soft-secondary">Docs <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-row border bg-light mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex flex-row-reverse bg-light border ">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Grow and Shrink</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex bg-light">
                    <div class="p-2 flex-grow-1 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Third flex item</div>
                </div>
                <div class="d-flex bg-light mt-3">
                    <div class="p-2 w-100 border">Flex item</div>
                    <div class="p-2 flex-shrink-1 border">Flexitem</div>
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Enable Flex Behaviors</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex p-2 border bg-light mb-2">I'm a flexbox container!</div>
                <div class="d-inline-flex p-2 border bg-light">I'm an inline flexbox container!</div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Wrap</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-nowrap bg-light border mb-3" style="width: 16rem;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                </div>
                <div class="d-flex flex-wrap bg-light border mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div>
                <div class="d-flex flex-wrap-reverse bg-light border mb-0">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div>
            </div><!-- end card body-->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Direction of Flex Column & Reverse</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-column bg-light border mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex flex-column-reverse bg-light border">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Auto Margins</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex border bg-light mb-3">
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                </div>

                <div class="d-flex border bg-light mb-3">
                    <div class="me-auto p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                </div>

                <div class="d-flex border bg-light mb-0">
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="ms-auto p-2 border">Flex item</div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->

        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Gap</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-grid gap-3">
                    <div class="p-2 bg-light border">Grid item 1</div>
                    <div class="p-2 bg-light border">Grid item 2</div>
                    <div class="p-2 bg-light border">Grid item 3</div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->

        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Text Wrapping and Overflow</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="badge bg-primary text-wrap" style="width: 6rem;">
                    This text should wrap.
                </div>
            </div><!-- end cardbody -->
            <div class="card-body pt-0">
                <div class="text-nowrap border bg-light" style="width: 8rem;">
                    This text should overflow the parent.
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->

        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Word Break</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="text-break mb-0">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>
            </div><!-- end card header-->
        </div><!-- end card -->

        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Font Size</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="fs-1 mb-1">.fs-1 text</p>
                <p class="fs-2 mb-1">.fs-2 text</p>
                <p class="fs-3 mb-1">.fs-3 text</p>
                <p class="fs-4 mb-1">.fs-4 text</p>
                <p class="fs-5 mb-1">.fs-5 text</p>
                <p class="fs-6 mb-0">.fs-6 text</p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Align Content</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex align-content-start flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                </div>
                <div class="d-flex align-content-end flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div>
                <div class="d-flex align-content-center flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div>
                <div class="d-flex align-content-between flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div><!-- end -->
                <div class="d-flex align-content-around flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div><!-- end -->
                <div class="d-flex align-content-stretch flex-wrap bg-light border mb-0" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div><!-- end -->
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Order</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-nowrap border bg-light">
                    <div class="order-3 p-2 border">First flex item</div>
                    <div class="order-2 p-2 border">Second flex item</div>
                    <div class="order-1 p-2 border">Third flex item</div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Float</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="float-start">Float start on all viewport sizes</div><br>
                <div class="float-end">Float end on all viewport sizes</div><br>
                <div class="float-none">Don't float on all viewport sizes</div>
            </div><!-- end card body -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Text Selection</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="user-select-all">This paragraph will be entirely selected when clicked by the user.</p>
                <p class="user-select-auto">This paragraph has default select behavior.</p>
                <p class="user-select-none">This paragraph will not be selectable when clicked by the user.</p>
            </div><!-- end cardbody -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Pointer Events</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p><a href="#" class="pe-none" tabindex="-1" aria-disabled="true">This link</a> can not be clicked.</p>
                <p><a href="#" class="pe-auto">This link</a> can be clicked (this is default behavior).</p>
                <p class="pe-none"><a href="#" tabindex="-1" aria-disabled="true">This link</a> can not be clicked because the <code>pointer-events</code> property is inherited from its parent. However, <a href="#" class="pe-auto">this link</a> has a <code>pe-auto</code> class and can be clicked.</p>
            </div><!-- end cardbody -->
        </div><!-- end card -->

        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Text Alignment</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="text-start">Start aligned text on all viewport sizes.</p>
                <p class="text-center">Center aligned text on all viewport sizes.</p>
                <p class="text-end">End aligned text on all viewport sizes.</p>
                <p class="text-sm-start">Start aligned text on viewports sized SM (small) or wider.</p>
                <p class="text-md-start">Start aligned text on viewports sized MD (medium) or wider.</p>
                <p class="text-lg-start">Start aligned text on viewports sized LG (large) or wider.</p>
                <p class="text-xl-start mb-0">Start aligned text on viewports sized XL (extra-large) or wider.</p>
            </div><!-- end col -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Overflow Auto</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-md-flex bg-light">
                    <div class="overflow-auto p-3 mb-0 me-md-3 bg-light" style="height: 100px;">
                        This is an example of using <code>.overflow-auto</code> on an element with set width and height dimensions. By design, this content will vertically scroll.
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Overflow Hidden</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-md-flex bg-light">
                    <div class="overflow-hidden p-3 mb-0 me-md-3 bg-light" style="max-height: 100px;">
                        This is an example of using <code>.overflow-hidden</code> on an element with set width and height dimensions. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Overflow Visible</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-md-flex bg-light">
                    <div class="overflow-visible p-3 mb-0 me-md-3 bg-light" style="max-height: 100px;">
                        This is an example of using <code>.overflow-visible</code> on an element with set width and height dimensions.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Overflow Scroll</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-md-flex bg-light">
                    <div class="overflow-scroll mb-0 p-3 bg-light" style="max-height: 100px;">
                        This is an example of using <code>.overflow-scroll</code> on an element with set width and height dimensions. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Arrange Elements</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="position-relative p-5 bg-light m-3 border rounded" style="height: 180px;">
                    <div class="position-absolute top-0 start-0 avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-0 end-0 avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-50 start-50 avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute bottom-50 end-50 avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute bottom-0 start-0 avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute bottom-0 end-0 avatar-sm text-bg-dark rounded"></div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Center Elements</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="position-relative m-3 bg-light border rounded" style="height: 180px;">
                    <div class="position-absolute top-0 start-0 translate-middle avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-0 start-50 translate-middle avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-0 start-100 translate-middle avatar-sm text-bg-dark rounded"></div>

                    <div class="position-absolute top-50 start-0 translate-middle avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-50 start-50 translate-middle avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-50 start-100 translate-middle avatar-sm text-bg-dark rounded"></div>

                    <div class="position-absolute top-100 start-0 translate-middle avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-100 start-50 translate-middle avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-100 start-100 translate-middle avatar-sm text-bg-dark rounded"></div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Center Elements</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="position-relative m-3 bg-light border rounded" style="height: 180px;">
                    <div class="position-absolute top-0 start-0 avatar-sm text-bg-dark rounded "></div>
                    <div class="position-absolute top-0 start-50 translate-middle-x avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-0 end-0 avatar-sm text-bg-dark rounded"></div>

                    <div class="position-absolute top-50 start-0 translate-middle-y avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-50 start-50 translate-middle avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute top-50 end-0 translate-middle-y avatar-sm text-bg-dark rounded"></div>

                    <div class="position-absolute bottom-0 start-0 avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute bottom-0 start-50 translate-middle-x avatar-sm text-bg-dark rounded"></div>
                    <div class="position-absolute bottom-0 end-0 avatar-sm text-bg-dark rounded"></div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Shadows</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="shadow-none p-3 mb-3 bg-light rounded">No shadow</div>
                <div class="shadow-sm p-3 mb-3 bg-light rounded">Small shadow</div>
                <div class="shadow p-3 mb-3 bg-light rounded">Regular shadow</div>
                <div class="shadow-lg p-3 mb-0 bg-light rounded">Larger shadow</div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Width</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="w-25 p-3 bg-light">Width 25%</div>
                <div class="w-50 p-3 bg-light">Width 50%</div>
                <div class="w-75 p-3 bg-light">Width 75%</div>
                <div class="w-100 p-3 bg-light">Width 100%</div>
                <div class="w-auto p-3 bg-light">Width auto</div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Height</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="" style="height: 264px;">
                    <div class="h-25 p-3 bg-light d-inline-block" style="width: 92px;">Height25%</div>
                    <div class="h-50 p-3 bg-light d-inline-block" style="width: 92px;">Height 50%</div>
                    <div class="h-75 p-3 bg-light d-inline-block" style="width: 92px;">Height 75%</div>
                    <div class="h-100 p-3 bg-light d-inline-block" style="width: 92px;">Height 100%</div>
                    <div class="h-auto p-3 bg-light d-inline-block" style="width: 92px;">Height auto</div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Line Height</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="lh-1">This is a long paragraph written to show how the line-height of an element is affected by our utilities.</p>
                <p class="lh-sm">This is a long paragraph written to show how the line-height of an element is affected by our utilities.</p>
                <p class="lh-base">This is a long paragraph written to show how the line-height of an element is affected by our utilities.</p>
                <p class="lh-lg mb-0">This is a long paragraph written to show how the line-height of an element is affected by our utilities.</p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Display Property</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-inline p-2 bg-primary text-white">d-inline</div>
                <div class="d-inline p-2 text-bg-dark text-white">d-inline</div>
            </div>

            <div class="card-body">
                <span class="d-block p-2 bg-primary text-white">d-block</span>
                <span class="d-block p-2 text-bg-dark text-white">d-block</span>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Text Transform</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="text-lowercase">Lowercased text.</p>
                <p class="text-uppercase">Uppercased text.</p>
                <p class="text-capitalize mb-0">CapiTaliZed text.</p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-3">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Visibility</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="visible">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="invisible">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Vertical Alignment</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <table style="height: 100px;">
                    <tbody>
                        <tr>
                            <td class="align-baseline">baseline</td>
                            <td class="align-top">top</td>
                            <td class="align-middle">middle</td>
                            <td class="align-bottom">bottom</td>
                            <td class="align-text-top">text-top</td>
                            <td class="align-text-bottom">text-bottom</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Monospace & Reset Color</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="font-monospace mb-0">This is in monospace</p>
            </div><!-- end card body -->
            <div class="card-body pt-0">
                <p class="text-muted mb-0">
                    Muted text with a <a href="#" class="text-reset text-decoration-underline">reset link</a>.
                </p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->
    
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
