<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
</script>

<template>
    <Head title="Dashboard"></Head>
    <AuthenticatedLayout>
        <div class="container-fixed">
            <div class="pb-7.5 flex flex-wrap items-center justify-between gap-5 lg:items-end">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-medium leading-none text-gray-900">Dashboard</h1>
                    <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
                        Central Hub for Personal Customization
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <a href="html/demo1/public-profile/profiles/default.html" class="btn btn-sm btn-light">
                        View Profile
                    </a>
                </div>
            </div>
        </div>
        <!-- End of Container -->
        <!-- Container -->
        <div class="container-fixed">
            <div class="lg:gap-7.5 grid gap-5">
                <!-- begin: grid -->
                <div class="lg:gap-7.5 grid items-stretch gap-y-5 lg:grid-cols-3">
                    <div class="lg:col-span-1">
                        <div class="lg:gap-7.5 grid h-full grid-cols-2 items-stretch gap-5">
                            <div
                                class="card channel-stats-bg h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]"
                            >
                                <img src="assets/media/brand-logos/linkedin-2.svg" alt="" class="ms-5 mt-4 w-7" />
                                <div class="flex flex-col gap-1 px-5 pb-4">
                                    <span class="text-3xl font-semibold text-gray-900">9.3k</span>
                                    <span class="text-2sm font-normal text-gray-700">Amazing mates</span>
                                </div>
                            </div>
                            <div
                                class="card channel-stats-bg h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]"
                            >
                                <img src="assets/media/brand-logos/youtube-2.svg" alt="" class="ms-5 mt-4 w-7" />
                                <div class="flex flex-col gap-1 px-5 pb-4">
                                    <span class="text-3xl font-semibold text-gray-900">24k</span>
                                    <span class="text-2sm font-normal text-gray-700">Lessons Views</span>
                                </div>
                            </div>
                            <div
                                class="card channel-stats-bg h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]"
                            >
                                <img src="assets/media/brand-logos/instagram-03.svg" alt="" class="ms-5 mt-4 w-7" />
                                <div class="flex flex-col gap-1 px-5 pb-4">
                                    <span class="text-3xl font-semibold text-gray-900">608</span>
                                    <span class="text-2sm font-normal text-gray-700">New subscribers</span>
                                </div>
                            </div>
                            <div
                                class="card channel-stats-bg h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]"
                            >
                                <img
                                    src="assets/media/brand-logos/tiktok.svg"
                                    alt=""
                                    class="ms-5 mt-4 w-7 dark:hidden"
                                />
                                <img
                                    src="assets/media/brand-logos/tiktok-dark.svg"
                                    alt=""
                                    class="light:hidden ms-5 mt-4 w-7"
                                />
                                <div class="flex flex-col gap-1 px-5 pb-4">
                                    <span class="text-3xl font-semibold text-gray-900">2.5k</span>
                                    <span class="text-2sm font-normal text-gray-700">Stream audience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="card h-full">
                            <div
                                class="card-body entry-callout-bg bg-[length:80%] bg-no-repeat p-10 [background-position:175%_25%] rtl:[background-position:-70%_25%]"
                            >
                                <div class="flex flex-col justify-center gap-4">
                                    <div class="flex -space-x-2">
                                        <div class="flex">
                                            <img
                                                src="assets/media/avatars/300-4.png"
                                                class="hover:z-5 ring-light-light relative size-10 shrink-0 rounded-full ring-1"
                                            />
                                        </div>
                                        <div class="flex">
                                            <img
                                                src="assets/media/avatars/300-1.png"
                                                class="hover:z-5 ring-light-light relative size-10 shrink-0 rounded-full ring-1"
                                            />
                                        </div>
                                        <div class="flex">
                                            <img
                                                src="assets/media/avatars/300-2.png"
                                                class="hover:z-5 ring-light-light relative size-10 shrink-0 rounded-full ring-1"
                                            />
                                        </div>
                                        <div class="flex">
                                            <span
                                                class="hover:z-5 text-3xs text-success-inverse ring-success-light bg-success relative inline-flex size-10 shrink-0 items-center justify-center rounded-full text-xs font-semibold leading-none ring-1"
                                            >
                                                S
                                            </span>
                                        </div>
                                    </div>
                                    <h2 class="text-1.5xl font-semibold text-gray-900">
                                        Connect Today & Join
                                        <br />
                                        the
                                        <a href="#" class="link">KeenThemes Network</a>
                                    </h2>
                                    <p class="leading-5.5 text-sm font-normal text-gray-700">
                                        Enhance your projects with premium themes and
                                        <br />
                                        templates. Join the KeenThemes community today
                                        <br />
                                        for top-quality designs and resources.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a href="html/demo1/account/home/get-started.html" class="btn btn-link">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: grid -->
                <!-- begin: grid -->
                <div class="lg:gap-7.5 grid items-stretch gap-5 lg:grid-cols-3">
                    <div class="lg:col-span-1">
                        <div class="card h-full">
                            <div class="card-header">
                                <h3 class="card-title">Highlights</h3>
                                <div data-menu="true" class="menu">
                                    <div
                                        data-menu-item-offset="0, 10px"
                                        data-menu-item-placement="bottom-start"
                                        data-menu-item-toggle="dropdown"
                                        data-menu-item-trigger="click|lg:click"
                                        class="menu-item"
                                    >
                                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                            <i class="ki-filled ki-dots-vertical"></i>
                                        </button>
                                        <div
                                            data-menu-dismiss="true"
                                            class="menu-dropdown menu-default w-full max-w-[200px]"
                                        >
                                            <div class="menu-item">
                                                <a href="html/demo1/account/activity.html" class="menu-link">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-cloud-change"></i>
                                                    </span>
                                                    <span class="menu-title">Activity</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" data-modal-toggle="#share_profile_modal" class="menu-link">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-share"></i>
                                                    </span>
                                                    <span class="menu-title">Share</span>
                                                </a>
                                            </div>
                                            <div
                                                data-menu-item-offset="-15px, 0"
                                                data-menu-item-placement="right-start"
                                                data-menu-item-toggle="dropdown"
                                                data-menu-item-trigger="click|lg:hover"
                                                class="menu-item"
                                            >
                                                <div class="menu-link">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-notification-status"></i>
                                                    </span>
                                                    <span class="menu-title">Notifications</span>
                                                    <span class="menu-arrow">
                                                        <i
                                                            class="ki-filled ki-right text-3xs rtl:rotate-180 rtl:transform"
                                                        ></i>
                                                    </span>
                                                </div>
                                                <div class="menu-dropdown menu-default w-full max-w-[175px]">
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/settings-sidebar.html"
                                                            class="menu-link"
                                                        >
                                                            <span class="menu-icon">
                                                                <i class="ki-filled ki-sms"></i>
                                                            </span>
                                                            <span class="menu-title">Email</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/settings-sidebar.html"
                                                            class="menu-link"
                                                        >
                                                            <span class="menu-icon">
                                                                <i class="ki-filled ki-message-notify"></i>
                                                            </span>
                                                            <span class="menu-title">SMS</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/settings-sidebar.html"
                                                            class="menu-link"
                                                        >
                                                            <span class="menu-icon">
                                                                <i class="ki-filled ki-notification-status"></i>
                                                            </span>
                                                            <span class="menu-title">Push</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" data-modal-toggle="#report_user_modal" class="menu-link">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-dislike"></i>
                                                    </span>
                                                    <span class="menu-title">Report</span>
                                                </a>
                                            </div>
                                            <div class="menu-separator"></div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/account/home/settings-enterprise.html"
                                                    class="menu-link"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-setting-3"></i>
                                                    </span>
                                                    <span class="menu-title">Settings</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body lg:p-7.5 flex flex-col gap-4 p-5 lg:pt-4">
                                <div class="flex flex-col gap-0.5">
                                    <span class="text-sm font-normal text-gray-700">All time sales</span>
                                    <div class="flex items-center gap-2.5">
                                        <span class="text-3xl font-semibold text-gray-900">$295.7k</span>
                                        <span class="badge badge-outline badge-success badge-sm">+2.7%</span>
                                    </div>
                                </div>
                                <div class="mb-1.5 flex items-center gap-1">
                                    <div class="bg-success h-2 w-full max-w-[60%] rounded-sm"></div>
                                    <div class="bg-brand h-2 w-full max-w-[25%] rounded-sm"></div>
                                    <div class="bg-info h-2 w-full max-w-[15%] rounded-sm"></div>
                                </div>
                                <div class="mb-1 flex flex-wrap items-center gap-4">
                                    <div class="flex items-center gap-1.5">
                                        <span class="badge badge-dot badge-success size-2"></span>
                                        <span class="text-sm font-normal text-gray-800">Metronic</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="badge badge-dot badge-danger size-2"></span>
                                        <span class="text-sm font-normal text-gray-800">Bundle</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="badge badge-dot badge-info size-2"></span>
                                        <span class="text-sm font-normal text-gray-800">MetronicNest</span>
                                    </div>
                                </div>
                                <div class="border-b border-gray-300"></div>
                                <div class="grid gap-3">
                                    <div class="flex flex-wrap items-center justify-between gap-2">
                                        <div class="flex items-center gap-1.5">
                                            <i class="ki-filled ki-shop text-base text-gray-500"></i>
                                            <span class="text-sm font-normal text-gray-900">Online Store</span>
                                        </div>
                                        <div class="flex items-center gap-6 text-sm font-medium text-gray-800">
                                            <span class="lg:text-right">$172k</span>
                                            <span class="lg:text-right">
                                                <i class="ki-filled ki-arrow-up text-success"></i>
                                                3.9%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap items-center justify-between gap-2">
                                        <div class="flex items-center gap-1.5">
                                            <i class="ki-filled ki-facebook text-base text-gray-500"></i>
                                            <span class="text-sm font-normal text-gray-900">Facebook</span>
                                        </div>
                                        <div class="flex items-center gap-6 text-sm font-medium text-gray-800">
                                            <span class="lg:text-right">$85k</span>
                                            <span class="lg:text-right">
                                                <i class="ki-filled ki-arrow-down text-danger"></i>
                                                0.7%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap items-center justify-between gap-2">
                                        <div class="flex items-center gap-1.5">
                                            <i class="ki-filled ki-instagram text-base text-gray-500"></i>
                                            <span class="text-sm font-normal text-gray-900">Instagram</span>
                                        </div>
                                        <div class="flex items-center gap-6 text-sm font-medium text-gray-800">
                                            <span class="lg:text-right">$36k</span>
                                            <span class="lg:text-right">
                                                <i class="ki-filled ki-arrow-up text-success"></i>
                                                8.2%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="card h-full">
                            <div class="card-header">
                                <h3 class="card-title">Earnings</h3>
                                <div class="flex gap-5">
                                    <label class="switch switch-sm">
                                        <input type="checkbox" value="1" class="order-2" name="check" />
                                        <span class="switch-label order-1">Referrals only</span>
                                    </label>
                                    <select class="select select-sm w-28" name="select">
                                        <option value="1">1 month</option>
                                        <option value="2">3 month</option>
                                        <option value="3">6 month</option>
                                        <option value="4" selected="">12 month</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body flex grow flex-col items-stretch justify-end px-3 py-1">
                                <div id="earnings_chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: grid -->
                <!-- begin: grid -->
                <div class="lg:gap-7.5 grid items-stretch gap-5 lg:grid-cols-3">
                    <div class="lg:col-span-1">
                        <div class="card h-full">
                            <div class="card-body lg:p-7.5 p-5 lg:pt-6">
                                <div class="mb-7.5 flex flex-wrap items-center justify-between gap-5">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-1.5xl font-semibold text-gray-900">Team Meeting</span>
                                        <span class="text-sm font-semibold text-gray-800">09:00 - 09:30</span>
                                    </div>
                                    <img src="assets/media/brand-logos/zoom.svg" alt="" class="size-7" />
                                </div>
                                <p class="leading-5.5 mb-8 text-sm font-normal text-gray-800">
                                    Team meeting to discuss strategies, outline
                                    <br />
                                    project milestones, define key goals, and
                                    <br />
                                    establish clear timelines.
                                </p>
                                <div class="flex gap-10 rounded-lg bg-gray-100 p-5">
                                    <div class="flex flex-col gap-5">
                                        <div class="flex items-center gap-1.5 text-sm font-normal text-gray-800">
                                            <i class="ki-filled ki-geolocation text-base text-gray-500"></i>
                                            Location
                                        </div>
                                        <div class="pt-1.5 text-sm font-medium text-gray-800">Amsterdam</div>
                                    </div>
                                    <div class="flex flex-col gap-5">
                                        <div class="flex items-center gap-1.5 text-sm font-normal text-gray-800">
                                            <i class="ki-filled ki-users text-base text-gray-500"></i>
                                            Team
                                        </div>
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img
                                                    src="assets/media/avatars/300-4.png"
                                                    class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                />
                                            </div>
                                            <div class="flex">
                                                <img
                                                    src="assets/media/avatars/300-1.png"
                                                    class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                />
                                            </div>
                                            <div class="flex">
                                                <img
                                                    src="assets/media/avatars/300-2.png"
                                                    class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                />
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="hover:z-5 text-3xs text-success-inverse text-4xs ring-success-light bg-success relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full font-semibold leading-none ring-1"
                                                >
                                                    +10
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a href="" class="btn btn-link">Join Meeting</a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="grid">
                            <div class="card card-grid h-full min-w-full">
                                <div class="card-header">
                                    <h3 class="card-title">Teams</h3>
                                    <div class="input input-sm max-w-48">
                                        <i class="ki-filled ki-magnifier"></i>
                                        <input type="text" placeholder="Search Teams" />
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div data-datatable="true" data-datatable-page-size="5">
                                        <div class="scrollable-x-auto">
                                            <table data-datatable-table="true" class="table-border table">
                                                <thead>
                                                    <tr>
                                                        <th class="w-[60px]">
                                                            <input
                                                                type="checkbox"
                                                                data-datatable-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </th>
                                                        <th class="min-w-[280px]">
                                                            <span class="sort asc">
                                                                <span class="sort-label">Team</span>
                                                                <span class="sort-icon"></span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[135px]">
                                                            <span class="sort">
                                                                <span class="sort-label">Rating</span>
                                                                <span class="sort-icon"></span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[135px]">
                                                            <span class="sort">
                                                                <span class="sort-label">Last Modified</span>
                                                                <span class="sort-icon"></span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[135px]">
                                                            <span class="sort">
                                                                <span class="sort-label">Members</span>
                                                                <span class="sort-icon"></span>
                                                            </span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="1"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Product Management
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Product development & lifecycle
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>21 Oct, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-4.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-1.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-2.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="text-3xs text-success-inverse ring-success-light bg-success relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full font-semibold leading-none ring-1"
                                                                    >
                                                                        +10
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="2"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Marketing Team
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Campaigns & market analysis
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label indeterminate">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                        style="width: 50%"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>15 Oct, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-4.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="hover:z-5 text-3xs text-warning-inverse ring-warning-light bg-warning relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full font-semibold uppercase leading-none ring-1"
                                                                    >
                                                                        g
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="3"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    HR Department
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Talent acquisition, employee welfare
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>10 Oct, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-4.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-1.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-2.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="text-3xs text-info-inverse ring-info-light bg-info relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full font-semibold leading-none ring-1"
                                                                    >
                                                                        +A
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="4"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Sales Division
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Customer relations, sales strategy
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>05 Oct, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-24.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-7.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="5"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Development Team
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Software development
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label indeterminate">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                        style="width: 50%"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>01 Oct, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-3.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-8.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-9.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="text-3xs text-danger-inverse ring-danger-light bg-danger relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full font-semibold leading-none ring-1"
                                                                    >
                                                                        +5
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="6"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Quality Assurance
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Product testing
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>25 Sep, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-6.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-5.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="7"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Finance Team
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Financial planning
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>20 Sep, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-10.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-11.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-12.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="text-3xs text-primary-inverse ring-primary-light bg-primary relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full font-semibold leading-none ring-1"
                                                                    >
                                                                        +8
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="8"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Customer Support
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Customer service
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label indeterminate">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                        style="width: 50%"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>15 Sep, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-13.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-14.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="9"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    R&D Team
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Research & development
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>10 Sep, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-15.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-16.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="10"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Operations Team
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Operations management
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>05 Sep, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-17.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-18.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-19.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="11"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    IT Support
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Technical support
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>01 Sep, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-20.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-21.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="12"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Legal Team
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Legal support
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>25 Aug, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-22.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-23.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="13"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Logistics Team
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Supply chain
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label indeterminate">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                        style="width: 50%"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>20 Aug, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-24.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-25.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="14"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Procurement Team
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Supplier management
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>15 Aug, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-26.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-27.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-28.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="text-3xs text-info-inverse ring-info-light bg-info relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full font-semibold leading-none ring-1"
                                                                    >
                                                                        +3
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                value="15"
                                                                data-datatable-row-check="true"
                                                                class="checkbox checkbox-sm"
                                                            />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a
                                                                    href="#"
                                                                    class="hover:text-primary text-sm font-medium leading-none text-gray-900"
                                                                >
                                                                    Training Team
                                                                </a>
                                                                <span
                                                                    class="text-2sm font-normal leading-3 text-gray-700"
                                                                >
                                                                    Employee training
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none"
                                                                    ></i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>10 Aug, 2024</td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-29.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                                <div class="flex">
                                                                    <img
                                                                        src="assets/media/avatars/300-30.png"
                                                                        class="hover:z-5 ring-light-light relative size-[30px] shrink-0 rounded-full ring-1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div
                                            class="card-footer text-2sm flex-col justify-center gap-5 font-medium text-gray-600 md:flex-row md:justify-between"
                                        >
                                            <div class="order-2 flex items-center gap-2 md:order-1">
                                                Show
                                                <select
                                                    data-datatable-size="true"
                                                    class="select select-sm w-16"
                                                    name="perpage"
                                                ></select>
                                                per page
                                            </div>
                                            <div class="order-1 flex items-center gap-4 md:order-2">
                                                <span data-datatable-info="true"></span>
                                                <div data-datatable-pagination="true" class="pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: grid -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>

