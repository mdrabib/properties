        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu leftside-menu-detached" style="height: 100vh;">

            <div class="leftbar-user">
                <a href="javascript: void(0);">
                    @if(Session::has('avatar'))
                    <img src="{{  asset('uploads/profile/'.Session::get('avatar')) }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                    @endif
                    <span class="leftbar-user-name">
                        @if(Session::has('userName'))
                        {{ Crypt::decrypt(Session::get('userName')) }}
                        @endif
                    </span>
                </a>
            </div>
            <!--- Sidemenu -->
            <ul class="side-nav">
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> Properties </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{ route('properties.index')}}">Properties</a>
                                {{-- <a href="{{route('member.show',Crypt::decrypt(Session::get('userId')))}}">Properties</a> --}}
                            </li>
                        </ul>
                    </div>
                </li>

            <!-- End Sidebar -->

            <div class="clearfix">
                <button style="position: absolute;right: 0;bottom: 0;" type="button" class="btn btn-light rounded closeBtn float-end" id="condensed-check" onclick="sidebarHandler()">
                    <i class="mdi mdi-chevron-left-box-outline"></i>
                </button>
                <button style="position: absolute;right: 0;bottom: 0;" type="button" class="d-none btn btn-light justify-content-center" id="opentBtn">
                    <i class="mdi mdi-dock-left"></i>
                </button>
            </div>



            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
        @push('scripts')
        <script>
            let condensed = $('#condensed-check')
            let fixed = $('#fixed-check')

            function sidebarHandler() {
                // data-leftbar-compact-mode="condensed"
                $('body').attr('data-leftbar-compact-mode', 'condensed');
                $('.closeBtn').toggleClass('d-none');
                $('#opentBtn').removeClass('d-none');
            }
            $('#opentBtn').click(() => {
                $('.closeBtn').removeClass('d-none');
                $('#opentBtn').addClass('d-none');
                $('body').removeAttr('data-leftbar-compact-mode');
            });
        </script>
        @endpush