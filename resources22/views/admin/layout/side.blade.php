<!-- main-sidebar -->
@inject('helpers', 'App\Helper\Helpers')
@php
    $setting = $helpers->get_setting();

@endphp


<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<div class="sticky">
    <aside class="app-sidebar sidebar-scroll" style=" ">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="{!! route('admin.dashboard') !!}">
                <h2 style=" text-align: center">
                    <img src="{{ asset($setting->site_logo ?? '/dist/image/newlogo1.jpeg') }}" class=" "
                        style="width: 17%" alt="logo">
                </h2>
            </a>
            <a class="desktop-logo logo-dark active" href="{!! route('admin.dashboard') !!}">
                <img src="{{ asset($setting->site_logo ?? '/dist/image/newlogo1.jpeg') }}" class="main-logo"
                    alt="logo"></a>
            <a class="logo-icon mobile-logo icon-light active" href="{!! route('admin.dashboard') !!}"><img
                    src="{{ asset($setting->site_logo ?? '/dist/image/newlogo1.jpeg') }}" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-dark active" href="{!! route('admin.dashboard') !!}"><img
                    src="{{ asset($setting->site_logo ?? '/dist/image/newlogo1.jpeg') }}" alt="logo"></a>
        </div>
        <div class="main-sidemenu">
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div class="main-img-user avatar-xl">
                        <img alt="user-img" src="{!! asset('admin/assets/img/users/6.jpg') !!}"><span
                            class="avatar-status profile-status bg-green"></span>
                    </div>
                    <div class="user-info">
                        <h4 class="fw-semibold mt-3 mb-0">{!! strtoupper(auth()->user()->name) !!}</h4>
                        <span class="mb-0 text-muted">Not yet define</span>
                    </div>
                </div>
            </div>
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li class="side-item side-item-category">Main</li>
                <li class="slide">
                    <a class="side-menu__item" href="{!! route('admin.dashboard') !!}">

                        <span class="side-menu__label">Dashboard</span>
                        {{--                        <span     class="badge bg-success text-light bg-side-text">1</span> --}}
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{!! route('admin.home.edit') !!}">

                        <span class="side-menu__label">Home Edit</span>
                        {{--                        <span     class="badge bg-success text-light bg-side-text">1</span> --}}
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{!! route('admin.privacy.edit') !!}">

                        <span class="side-menu__label">Privacy Police</span>
                        {{--                        <span     class="badge bg-success text-light bg-side-text">1</span> --}}
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item" href="{!! route('admin.term.edit') !!}">

                        <span class="side-menu__label">Terms and Conditions</span>
                        {{--                        <span     class="badge bg-success text-light bg-side-text">1</span> --}}
                    </a>
                </li>
                {{--                @if (Gate::allows('Services')) --}}
                <li class="side-menu__label1">
                    <a href="javascript:void(0);">
                        <span class="side-menu__label">Services</span>
                    </a>
                </li>
                <li class="sub-slide @if (Route::current()->getName() == 'admin.services.create' || Route::current()->getName() == 'admin.categories.index') is-expanded @endif">
                    <a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);">
                        <span class="sub-side-menu__label">Category<i class="sub-angle fe fe-chevron-down"></i>
                        </span></a>
                    <ul class="sub-slide-menu">
                        {{--                            @if (Gate::allows('Services_create')) --}}
                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.categories.create') active @endif"
                                href="{!! route('admin.categories.create') !!}">Add Category
                            </a>
                        </li>
                        {{--                            @endif --}}
                        {{--                            @if (Gate::allows('Services_index')) --}}
                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.services.index') active @endif"
                                href="{!! route('admin.categories.index') !!}">Category List</a>
                        </li>
                        {{--                            @endif --}}
                    </ul>
                </li>
                <li class="side-menu__label1">
                    <a href="javascript:void(0);">
                        <span class="side-menu__label">Services</span>
                    </a>
                </li>
                <li class="sub-slide @if (Route::current()->getName() == 'admin.services.create' || Route::current()->getName() == 'admin.services.index') is-expanded @endif">
                    <a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);">
                        <span class="sub-side-menu__label">Services<i class="sub-angle fe fe-chevron-down"></i>
                        </span></a>
                    <ul class="sub-slide-menu">
                        {{--                            @if (Gate::allows('Services_create')) --}}
                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.services.create') active @endif"
                                href="{!! route('admin.services.create') !!}">Add Services
                            </a>
                        </li>
                        {{--                            @endif --}}
                        {{--                            @if (Gate::allows('Services_index')) --}}
                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.services.index') active @endif"
                                href="{!! route('admin.services.index') !!}">Services List</a>
                        </li>
                        {{--                            @endif --}}
                    </ul>
                </li>
                {{--                @endif --}}


                <li class="side-menu__label1"><a href="javascript:void(0);">Page</a>
                </li>
                <li class="sub-slide  @if (Route::current()->getName() == 'admin.pages.create' || Route::current()->getName() == 'admin.pages.index') is-expanded @endif">
                    <a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
                            class="sub-side-menu__label">Page</span><i class="sub-angle fe fe-chevron-down"></i></a>
                    <ul class="sub-slide-menu">

                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.pages.create') active @endif"
                                href="{!! route('admin.pages.create') !!}">Page
                                Create</a>
                        </li>

                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.pages.index') active @endif"
                                href="{!! route('admin.pages.index') !!}">Pages</a>
                        </li>

                    </ul>
                </li>
                <li class="sub-slide  @if (Route::current()->getName() == 'admin.jobs.create' || Route::current()->getName() == 'admin.jobs.index') is-expanded @endif">
                    <a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
                            class="sub-side-menu__label">Jobs</span><i class="sub-angle fe fe-chevron-down"></i></a>
                    <ul class="sub-slide-menu">

                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.jobs.create') active @endif"
                                href="{!! route('admin.jobs.create') !!}">Job
                                Create</a>
                        </li>

                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.jobs.index') active @endif"
                                href="{!! route('admin.jobs.index') !!}">Jobs</a>
                        </li>
                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.jobs.index') active @endif"
                                href="{!! route('admin.jobs.applied') !!}">Applications</a>
                        </li>

                    </ul>
                </li>


                <li class="side-menu__label1"><a href="javascript:void(0);">Blogs</a>
                </li>
                <li class="sub-slide @if (Route::current()->getName() == 'admin.blogs.create' || Route::current()->getName() == 'admin.blogs.index') is-expanded @endif">
                    <a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);">
                        <span class="sub-side-menu__label">Blogs<i class="sub-angle fe fe-chevron-down"></i>
                        </span></a>
                    <ul class="sub-slide-menu">

                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.blogs.create') active @endif"
                                href="{!! route('admin.blogs.create') !!}">Blogs
                                Create</a>
                        </li>


                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.blogs.index') active @endif"
                                href="{!! route('admin.blogs.index') !!}">Blogs</a>
                        </li>

                    </ul>
                </li>


                <li class="side-menu__label1"><a href="javascript:void(0);">Gallery</a>
                </li>
                <li class="sub-slide @if (Route::current()->getName() == 'admin.gallery.create' || Route::current()->getName() == 'admin.gallery.index') is-expanded @endif">
                    <a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);">
                        <span class="sub-side-menu__label">Gallery<i class="sub-angle fe fe-chevron-down"></i>
                        </span></a>
                    <ul class="sub-slide-menu">

                        <li>
                            <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.gallery.create') active @endif"
                                href="{!! route('admin.gallery.create') !!}">Add a Gallery</a>
                        </li>

                        <li>
                            <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.gallery.index') active @endif"
                                href="{!! route('admin.gallery.index') !!}">Gallery List</a>
                        </li>

                    </ul>
                </li>

                <li class="side-menu__label1"><a href="javascript:void(0);">Files</a>
                </li>
                <li class="sub-slide @if (Route::current()->getName() == 'admin.files.create' || Route::current()->getName() == 'admin.files.index') is-expanded @endif">
                    <a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);">
                        <span class="sub-side-menu__label">Files<i class="sub-angle fe fe-chevron-down"></i>
                        </span></a>
                    <ul class="sub-slide-menu">

                        <li>
                            <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.files.create') active @endif"
                                href="{!! route('admin.files.create') !!}">Add a Files</a>
                        </li>

                        <li>
                            <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.files.index') active @endif"
                                href="{!! route('admin.files.index') !!}">Files List</a>
                        </li>
                        <li>
                            <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.filedownload') active @endif"
                                href="{!! route('admin.filedownload') !!}">File Users </a>
                        </li>
                        <li>


                    </ul>
                </li>

                <li class="side-menu__label1"><a href="javascript:void(0);">Setting</a>
                </li>
                <li class="sub-slide @if (Route::current()->getName() == 'admin.setting.page') is-expanded @endif">
                    <a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);">
                        <span class="sub-side-menu__label">Setting
                            <i class="sub-angle fe fe-chevron-down"></i> </span></a>
                    <ul class="sub-slide-menu">
                        <li>
                            <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.setting.page,1') active @endif"
                                href="{!! route('admin.setting.page', 1) !!}">Setting </a>
                        </li>
                    </ul>
                </li>

                @if (Gate::allows('Media'))
                    <li class="sub-slide @if (Route::current()->getName() == 'admin.media.create' || Route::current()->getName() == 'admin.media.index') is-expanded @endif">
                        <a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);">
                            <span class="sub-side-menu__label">Media
                                <i class="sub-angle fe fe-chevron-down"></i> </span></a>
                        <ul class="sub-slide-menu">
                            @if (Gate::allows('Media_create'))
                                <li>
                                    <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.media.create') active @endif"
                                        href="{!! route('admin.media.create') !!}">Add Media </a>
                                </li>
                            @endif
                            @if (Gate::allows('Media_index'))
                                <li>
                                    <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.media.index') active @endif"
                                        href="{!! route('admin.media.index') !!}">Media List </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif

                <li class="side-item side-item-category">Site</li>

                <li class="slide @if (Route::current()->getName() == 'admin.users.create' ||
                        Route::current()->getName() == 'admin.users.index' ||
                        Route::current()->getName() == 'admin.permissions.create' ||
                        Route::current()->getName() == 'admin.permissions.index' ||
                        Route::current()->getName() == 'admin.roles.create' ||
                        Route::current()->getName() == 'admin.roles.index') is-expanded @endif">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z"
                                opacity=".3" />
                            <path
                                d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z" />
                        </svg>
                        <span class="side-menu__label">User Mangement</span><i
                            class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane tab-content-show active" id="side26">
                                        <ul class="sidemenu-list">

                                            <li class="side-menu__label1"><a href="javascript:void(0);">Users</a>
                                            </li>
                                            <li
                                                class="sub-slide  @if (Route::current()->getName() == 'admin.users.create' || Route::current()->getName() == 'admin.users.index') is-expanded @endif">
                                                <a class="slide-item" data-bs-toggle="sub-slide"
                                                    href="javascript:void(0);"><span
                                                        class="sub-side-menu__label">Users</span><i
                                                        class="sub-angle fe fe-chevron-down"></i></a>
                                                <ul class="sub-slide-menu">

                                                    <li>
                                                        <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.users.create') active @endif"
                                                            href="{!! route('admin.users.create') !!}">Add a
                                                            User </a>
                                                    </li>
                                                    <li>

                                                        <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.users.index') active @endif"
                                                            href="{!! route('admin.users.index') !!}">Users
                                                            List</a>
                                                    </li>


                                                </ul>
                                            </li>

                                            @if (Gate::allows('Permissions'))
                                                <li class="side-menu__label1"><a
                                                        href="javascript:void(0);">Permissions</a>
                                                </li>
                                                <li
                                                    class="sub-slide  @if (Route::current()->getName() == 'admin.permissions.create' ||
                                                            Route::current()->getName() == 'admin.permissions.index') is-expanded @endif">
                                                    <a class="slide-item" data-bs-toggle="sub-slide"
                                                        href="javascript:void(0);"><span
                                                            class="sub-side-menu__label">Permissions</span><i
                                                            class="sub-angle fe fe-chevron-down"></i></a>
                                                    <ul class="sub-slide-menu">
                                                        @if (Gate::allows('Permission_Create'))
                                                            <li>
                                                                <a class="sub-side-menu__item  @if (Route::current()->getName() == 'admin.permissions.create') active @endif"
                                                                    href="{!! route('admin.permissions.create') !!}">Add
                                                                    a Permission </a>
                                                            </li>
                                                        @endif
                                                        @if (Gate::allows('Permission_Index'))
                                                            <li>
                                                                <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.permissions.index') active @endif"
                                                                    href="{!! route('admin.permissions.index') !!}">Permissions
                                                                    List</a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </li>
                                            @endif
                                            @if (Gate::allows('Roles'))

                                                <li class="side-menu__label1"><a href="javascript:void(0);">Roles</a>
                                                </li>
                                                <li
                                                    class="sub-slide @if (Route::current()->getName() == 'admin.roles.create' || Route::current()->getName() == 'admin.roles.index') is-expanded @endif">
                                                    <a class="slide-item" data-bs-toggle="sub-slide"
                                                        href="javascript:void(0);"><span
                                                            class="sub-side-menu__label">Roles</span><i
                                                            class="sub-angle fe fe-chevron-down"></i></a>
                                                    <ul class="sub-slide-menu">
                                                        @if (Gate::allows('Role_Create'))
                                                            <li>
                                                                <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.roles.create') active @endif"
                                                                    href="{!! route('admin.roles.create') !!}">Add a
                                                                    Role </a>
                                                            </li>
                                                        @endif
                                                        @if (Gate::allows('Role_Edit'))
                                                            <li>
                                                                <a class="sub-side-menu__item @if (Route::current()->getName() == 'admin.roles.index') active @endif"
                                                                    href="{!! route('admin.roles.index') !!}">Roles
                                                                    List</a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </li>



                {{--                <li class="side-item side-item-category">Basic Setup</li> --}}
                {{--                <li class="slide @if (Route::current()->getName() == 'admin.country.create' ||
    Route::current()->getName() == 'admin.country.index' ||
    Route::current()->getName() == 'admin.city.create' ||
    Route::current()->getName() == 'admin.city.index' ||
    Route::current()->getName() == 'admin.pages.create' ||
    Route::current()->getName() == 'admin.pages.index' ||
    Route::current()->getName() == 'admin.subscriber.create' ||
    Route::current()->getName() == 'admin.subscriber.index' ||
    Route::current()->getName() == 'admin.services.create' ||
    Route::current()->getName() == 'admin.services.index' ||
    Route::current()->getName() == 'admin.blogs.create' ||
    Route::current()->getName() == 'admin.blogs.index' ||
    Route::current()->getName() == 'admin.brands.create' ||
    Route::current()->getName() == 'admin.brands.index' ||
    Route::current()->getName() == 'admin.gallery.create' ||
    Route::current()->getName() == 'admin.gallery.index' ||
    Route::current()->getName() == 'admin.setting.page' ||
    Route::current()->getName() == 'admin.media.create' ||
    Route::current()->getName() == 'admin.media.index')   is-expanded @endif"> --}}
                {{--                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"> --}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"> --}}
                {{--                            <path d="M0 0h24v24H0V0z" fill="none"/> --}}
                {{--                            <path --}}
                {{--                                d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" --}}
                {{--                                opacity=".3"/> --}}
                {{--                            <path --}}
                {{--                                d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/> --}}
                {{--                        </svg> --}}
                {{--                        <span class="side-menu__label">Basic Setup</span><i --}}
                {{--                            class="angle fe fe-chevron-down"></i></a> --}}
                {{--                    <ul class="slide-menu"> --}}
                {{--                        <li class="panel sidetab-menu"> --}}
                {{--                            <div class="panel-body tabs-menu-body p-0 border-0"> --}}
                {{--                                <div class="tab-content"> --}}
                {{--                                    <div class="tab-pane tab-content-show active" id="side26"> --}}
                {{--                                        <ul class="sidemenu-list"> --}}

                {{--                                            <li class="side-menu__label1"><a --}}
                {{--                                                    href="javascript:void(0);">Form Inquiries</a> --}}
                {{--                                            </li> --}}


                {{--                                            <li> --}}
                {{--                                                <a class="sub-side-menu__item" --}}
                {{--                                                   href="{!! route('admin.Conect.form') !!}">Contact</a> --}}
                {{--                                            </li> --}}


                {{--                                        </ul> --}}
                {{--                                    </div> --}}
                {{--                                </div> --}}
                {{--                            </div> --}}
                {{--                        </li> --}}
                {{--                    </ul> --}}
                {{--                </li> --}}


            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </aside>
</div>
<!-- main-sidebar -->
