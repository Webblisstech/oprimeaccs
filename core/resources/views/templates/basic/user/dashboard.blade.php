@extends($activeTemplate . 'layouts.master')


@section('content')
<section class="slider-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-xl-11">
                    <div class="slider-wrapper">
                        <div class="slick-carousel">
                            <!-- Your slider images -->
                            <div><a href="#"><img src="https://acelogstore.com/assets/assets/images/slider/slide_1.png" alt="Slider Image 1"></a></div>
                            <div><a href="https://chat.whatsapp.com/IrZvCzG5STtDCUiRZzJPjn"><img src="https://acelogstore.com/assets/assets/images/slider/slide_2.png" alt="Slider Image 2"></a></div>
                            <div><a href="https://t.me/+fTn69pDmZuc1MjM0"><img src="https://acelogstore.com/assets/assets/images/slider/slide_3.png" alt="Slider Image 3"></a></div>
                            <div><a href="https://t.me/oprimeds"><img src="https://acelogstore.com/assets/assets/images/slider/slide_4.png" alt="Slider Image 4"></a></div>
                            <div><a href="#"><img src="https://logmarketplace.com/public/concept/assets/images/Logplace__3.png" alt="Slider Image 5"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div><a href="https://oprimeboost.com" class="btn btn-primary w-100 mt-1"
                        id="btn-confirm">@lang('Boost Account')</a>
                        <br>
                        <a href="https://oprimeverify.com" class="btn btn-danger w-100 mt-1"
                        id="btn-confirm">@lang('BUY USA Number for Verifications')</a>
                    </div>
               
    <!-- Your existing dashboard content goes here -->
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-lg-9">-->
    <!--            <div class="row user-dashboard">-->
                    <!-- Dashboard widgets -->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- Greeting message -->
    <!--<div class="container">-->
    <!--    <div class="row justify-content-center">-->
    <!--        <div class="col-lg-6 text-center mt-5">-->
    <!--            <h3>Welcome, {{ auth()->user()->fullname }}!</h3>-->
                <!-- You can customize the greeting message as needed -->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<br>-->
<!--<div class="row">-->
<!--    <div class="col-lg-3">-->
<!--        <div class="collapable-sidebar">-->
<!--            <div class="collapable-sidebar__inner">-->
<!--                <button type="button" class="collapable-sidebar__close d-lg-none d-block"><i class="las la-times"></i>-->
<!--                </button>-->
<!--                <div class="card mb-4">-->
<!--                    <div class="card-header border-bottom p-2 bg--base text--white text-center fw-bold">@lang('My-->
<!--                        Information')-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <strong>{{ __($user->fullname) }}</strong>-->
<!--                        <span class="d-block mt-1">-->
<!--                            {{ __(@$user->address->address) }}-->
<!--                        </span>-->
<!--                        <span class="d-block mt-1">-->
<!--                            {{ @$user->address->city ? __(@$user->address->city) . ',' : null }}-->
<!--                            {{ @$user->address->state ? __(@$user->address->state) . ',' : null }}-->
<!--                            {{ @$user->address->zip ? __(@$user->address->zip) . ',' : null }}-->
<!--                        </span>-->
<!--                        <span class="mt-1">{{ __(@$user->address->country) }}</span>-->
<!--                    </div>-->
<!--                    <div class="card-footer">-->
<!--                        <a href="{{ route('user.profile.setting') }}" class="btn-link w-100"><i-->
<!--                                class="las la-pencil-alt"></i> @lang('Update')</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="card mb-4">-->
<!--                    <div class="card-header border-bottom p-2 bg--base text-white text-center fw-bold">@lang('Support')-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <a href="{{ route('ticket.open') }}" class="btn-link w-100"><i class="las la-plus"></i>-->
<!--                            @lang('New Ticket')</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <nav id="actionMenu" class="collapse d-block sidebar collapse bg-white border">-->
<!--                    <div class="position-sticky">-->
<!--                        <div class="list-group list-group-flush">-->
<!--                            <span class="border-bottom p-2 bg--base text-white text-center fw-bold">-->
<!--                                <span>@lang('Shortcuts')</span>-->
<!--                            </span>-->
<!--                            <a href="{{ route('products') }}" class="list-group-item">-->
<!--                                @lang('Buy Logs')-->
<!--                            </a>-->
<!--                            <a href="{{ route('user.logout') }}" class="list-group-item">-->
<!--                                @lang('Logout')-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </nav>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


    <!--<div class="row d-lg-none d-block">-->
    <!--    <div class="col-12 ">-->
    <!--        <div class="show-sidebar-bar">-->
    <!--            <i class="las la-bars"></i>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
            <div class="d-flex justify-content-center my-4 p-2 mt-5">
            <h2 style="font-size: 18px; ">Welcome! {{ Auth::user()->username }}</h2>
        </div>
    <div class="col-lg-9">
        <div class="row user-dashboard">
            <div class="col-xl-4 col-md-6 col-sm-6">
                <div class="custom--card-two">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">@lang('My Wallet')</p>
                                <h4 class="my-1">{{ $general->cur_sym }}{{ number_format(Auth::user()->balance, 2) }}
                                </h4>
                            </div>

                            <span class="widgets-icons-2 ms-auto">
                                <i class="fas fa-money-bill-wave"></i>
                            </span>
                            <a href="{{ route('user.deposit.new') }}" class="has-anchor"></a>

                        </div>

                    </div>
                    <a href="{{ route('user.deposit.new') }}" class="btn btn-danger w-100 mt-1"
                        id="btn-confirm">@lang('Fund Wallet')</a>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-6">
                <div class="custom--card-two">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">@lang('Deposits')</p>
                                <h4 class="my-1">{{ $general->cur_sym }}{{ showAmount(@$widget['total_payments']) }}
                                </h4>
            
                            </div>
                            <span class="widgets-icons-2 ms-auto">
                                <i class="fas fa-money-bill-wave"></i>
                            </span>
                            <a href="{{ route('user.deposit.history') }}" class="has-anchor"></a>
                        </div>
                        <a href="https://oprimeaccs.com/account/products" class="btn btn-warning w-100 mt-1"
                        id="btn-confirm">@lang('Buy Logs')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-6">
                <div class="custom--card-two">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">@lang('Orders')</p>
                                <h4 class="my-1">{{ getAmount(@$widget['total_orders']) }}</h4>
                            </div>
                            <span class="widgets-icons-2 ms-auto">
                                <i class="fas fa-shopping-cart"></i>
                            </span>
                            <a href="{{ route('user.orders') }}" class="has-anchor"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-6">
                <div class="custom--card-two">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">@lang('Tickets')</p>
                                <h4 class="my-1">{{ getAmount(@$widget['total_tickets']) }}</h4>
                            </div>
                            <span class="widgets-icons-2 ms-auto">
                                <i class="fas fa-ticket-alt"></i>
                            </span>
                            <a href="{{ route('ticket.index') }}" class="has-anchor"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-12">
                <h5 class="mt-4 mb-4">@lang('Latest Payments History')</h5>
                <div class="table-responsive">
                    <table class="table table--responsive--xl custom--table">
                        <thead>
                            <tr>
                                <th>@lang('Gateway | Trx')</th>
                                <th>@lang('Initiated')</th>
                                <th>@lang('Amount')</th>
                                <th>@lang('Status')</th>
                                <th>@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($latestDeposits as $deposit)
                            <tr>
                                <td>
                                    <div class="td-wrapper">
                                        <span class="title d-block">{{ __($deposit->gateway?->name) }}</span>
                                        <span class="info"> {{ $deposit->trx }} </span>
                                    </div>
                                </td>

                                <td>
                                    <div class="td-wrapper">
                                        <span class="d-block">{{ showDateTime($deposit->created_at) }}</span>
                                        <span class="">{{ diffForHumans($deposit->created_at) }}</span>
                                    </div>

                                </td>
                                <td>
                                    <div class="td-wrapper">
                                        <span class="">
                                            {{ __($general->cur_sym) }}{{ showAmount($deposit->amount) }} + <span
                                                class="text--base" title="@lang('charge')">{{
                                                showAmount($deposit->charge) }}
                                            </span>
                                        </span>
                                        <strong class="d-block" title="@lang('Amount with charge')">
                                            {{ showAmount($deposit->amount + $deposit->charge) }}
                                            {{ __($general->cur_text) }}
                                        </strong>
                                    </div>
                                </td>

                                <td>
                                    @php echo $deposit->statusBadge @endphp
                                </td>
                                @php
                                $details = $deposit->detail != null ? json_encode($deposit->detail) : null;
                                @endphp
                                <td>
                                    <div class="action-buttons">
                                        @if ($deposit->status == 0)
                                        <a href="resolve-deposit?trx={{ $deposit->trx }}"
                                            class="btn btn-sm btn-danger my-1" type="button">Resolve</button>

                                </td>
                                @endif


                            </tr>
                            @empty
                            <tr>
                                <td colspan="100%" class="text-center">{{ __($emptyMessage) }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->







{{-- APPROVE MODAL --}}
<div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">@lang('Details')</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush userData">
                </ul>
                <div class="feedback"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark btn--sm" data-bs-dismiss="modal">@lang('Close')</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    (function($) {

            "use strict";
            $('.detailBtn').on('click', function() {
                var modal = $('#detailModal');

                var userData = $(this).data('info');
                var html = '';
                if (userData) {
                    userData.forEach(element => {
                        if (element.type != 'file') {
                            html += `
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>${element.name}</span>
                                <span">${element.value}</span>
                            </li>`;
                        }
                    });
                }

                if ($(this).data('admin_feedback') != undefined) {
                    var adminFeedback = `
                        <div class="my-3 ms-2">
                            <strong>@lang('Admin Feedback')</strong>
                            <p>${$(this).data('admin_feedback')}</p>
                        </div>
                    `;
                } else {
                    var adminFeedback = '';
                }

                if (!html && !adminFeedback) {
                    html = `<span class='d-block text-center mt-2 mb-2'>{{ __($emptyMessage) }}</span>`;
                }

                modal.find('.userData').html(html);
                modal.find('.feedback').html(adminFeedback);
                modal.modal('show');
            });

            $('.search-form').on('submit', function(e) {
                e.preventDefault();
                var keyword = $(this).find('input[name=search]').val();
                window.location.href = "{{ route('products') }}?search=" + keyword;
            })

            // Responsive Sidebar
            $(".show-sidebar-bar").on("click", function() {
                $(".collapable-sidebar").addClass('show');
                $(".sidebar-overlay").addClass('show');
            });
            $(".collapable-sidebar__close, .sidebar-overlay").on("click", function() {
                $(".collapable-sidebar").removeClass('show');
                $(".sidebar-overlay").removeClass('show');
            });

        })(jQuery);
</script>
@endpush

@push('style')
<style>
    .custom--card-two {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-clip: border-box;
        border: 0px solid rgba(0, 0, 0, 0);
        border-radius: .25rem;
        margin-bottom: 1.5rem;
    }

    .widgets-icons-2 {
        width: 55px;
        height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 27px;
        border-radius: 10px;
        background: hsl(var(--white));
        border-radius: 50%;
    }

    .has-anchor {
        position: absolute;
        inset: 0;
        z-index: 1;
    }

    .domain-search-icon {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        aspect-ratio: 1;
        padding: 5px;
        display: grid;
        place-items: center;
        color: #888;
    }

    .domain-search-icon~.form--control {
        padding-left: 45px;
    }

    .domain-search-icon-reset {
        position: absolute;
        right: 0px;
        transform: translateY(-50%);
        top: 50%;
        color: #888;
        visibility: visible;
        opacity: 1;
        cursor: pointer;
        margin-right: 4px;
        height: auto;
    }

    @media (max-width: 991px) {
        .collapable-sidebar {
            position: fixed;
            left: 0;
            min-width: 320px;
            top: 0;
            background-color: hsl(var(--white));
            z-index: 9999;
            transform: translateX(-120%);
            transition: .3s linear;
            margin-right: 40px;
        }

        .collapable-sidebar__inner {
            height: 100vh;
            overflow-y: auto;
        }

        .collapable-sidebar.show {
            transform: translateX(0);
        }

        .collapable-sidebar__close {
            background-color: hsl(var(--danger));
            border: 0;
            font-size: 20px;
            line-height: 1;
            color: #fff;
            position: absolute;
            right: -40px;
            top: 0;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .show-sidebar-bar {
            font-size: 30px;
            color: hsl(var(--base));
            line-height: 1;
            display: inline-block;
            transform: translateY(-15px);
        }
    }

    @media (max-width: 424px) {
        .collapable-sidebar {
            min-width: 280px;
        }
    }

    .collapable-sidebar .btn-link {
        font-size: 0.875rem;
        font-weight: 500;
        color: hsl(var(--heading-color));
        text-decoration: none;
        border: 1px solid hsl(var(--black)/0.2);
        text-align: center;
        padding: 8px 10px;
        border-radius: .25rem;
    }

    .collapable-sidebar .btn-link:hover {
        background: hsl(var(--base));
        border-color: hsl(var(--base));
        color: hsl(var(--white));
    }

    .collapable-sidebar .card-footer {
        background: transparent;
    }

    .collapable-sidebar .list-group-item:hover {
        color: hsl(var(--base));
    }

    .user-dashboard div[class*=col-xl-4]:nth-child(1) .custom--card-two {
        background-color: hsl(var(--info)/0.1) !important;
        border-left: 5px solid hsl(var(--info));
    }

    .user-dashboard div[class*=col-xl-4]:nth-child(1) .custom--card-two .widgets-icons-2 {
        color: hsl(var(--info));
    }

    .user-dashboard div[class*=col-xl-4]:nth-child(2) .custom--card-two {
        background-color: hsl(var(--base)/0.1) !important;
        border-left: 5px solid hsl(var(--base));
    }

    .user-dashboard div[class*=col-xl-4]:nth-child(2) .custom--card-two .widgets-icons-2 {
        color: hsl(var(--base));
    }

    .user-dashboard div[class*=col-xl-4]:nth-child(3) .custom--card-two {
        background-color: hsl(var(--purple)/0.1) !important;
        border-left: 5px solid hsl(var(--purple));
    }

    .user-dashboard div[class*=col-xl-4]:nth-child(3) .custom--card-two .widgets-icons-2 {
        color: hsl(var(--purple));
    }
</style>
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slick-carousel').slick({
                dots: false, // Disable dots
                arrows: false, // Disable arrows
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true, // Enable autoplay
                autoplaySpeed: 3000 // Set autoplay speed in milliseconds
            });
        });
    </script>
@endpush

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <style>
        /* Add your custom styles for the slider */
    </style>
@endpush

@endpush