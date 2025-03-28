<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div
        id="sidebar"
        data-drawer="true"
        data-drawer-class="drawer drawer-start top-0 bottom-0"
        data-drawer-enable="true|lg:false"
        class="sidebar dark:bg-coal-600 bg-light dark:border-e-coal-100 fixed bottom-0 top-0 z-20 hidden shrink-0 flex-col items-stretch border-e border-e-gray-200 lg:flex"
    >
        <div
            id="sidebar_header"
            class="sidebar-header relative hidden shrink-0 items-center justify-between px-3 lg:flex lg:px-6"
        >
            <a href="html/demo1.html" class="dark:hidden">
                <img src="assets/media/app/default-logo.svg" class="default-logo min-h-[22px] max-w-none" />
                <img src="assets/media/app/mini-logo.svg" class="small-logo min-h-[22px] max-w-none" />
            </a>
            <a href="html/demo1.html" class="hidden dark:block">
                <img src="assets/media/app/default-logo-dark.svg" class="default-logo min-h-[22px] max-w-none" />
                <img src="assets/media/app/mini-logo.svg" class="small-logo min-h-[22px] max-w-none" />
            </a>
            <button
                id="sidebar_toggle"
                data-toggle="body"
                data-toggle-class="sidebar-collapse"
                class="btn btn-icon btn-icon-md bg-light toggle absolute start-full top-2/4 size-[30px] -translate-x-2/4 -translate-y-2/4 rounded-lg border border-gray-200 text-gray-500 hover:text-gray-700 dark:border-gray-300 rtl:translate-x-2/4"
            >
                <i
                    class="ki-filled ki-black-left-line toggle-active:rotate-180 rtl:translate rtl:toggle-active:rotate-0 transition-all duration-300 rtl:rotate-180"
                ></i>
            </button>
        </div>
        <div id="sidebar_content" class="sidebar-content flex shrink-0 grow py-5 pe-2">
            <div
                id="sidebar_scrollable"
                data-scrollable="true"
                data-scrollable-dependencies="#sidebar_header"
                data-scrollable-height="auto"
                data-scrollable-offset="0px"
                data-scrollable-wrappers="#sidebar_content"
                class="scrollable-y-hover flex shrink-0 grow pe-1 ps-2 lg:pe-3 lg:ps-5"
            >
                <!-- Sidebar Menu -->
                <div
                    id="sidebar_menu"
                    data-menu="true"
                    data-menu-accordion-expand-all="false"
                    class="menu flex grow flex-col gap-0.5"
                >
                    <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                        <div
                            class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-element-11 text-lg"></i>
                            </span>
                            <span
                                class="menu-title menu-item-active:text-primary menu-link-hover:!text-primary text-sm font-medium text-gray-800"
                            >
                                Dashboards
                            </span>
                            <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                                <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                            </span>
                        </div>
                        <div
                            class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200"
                        >
                            <div class="menu-item">
                                <a
                                    href="html/demo1.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Light Sidebar
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/dashboards/dark-sidebar.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Dark Sidebar
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item pt-2.25 pb-px">
                        <span class="menu-heading text-2sm pe-[10px] ps-[10px] font-medium uppercase text-gray-500">
                            User
                        </span>
                    </div>
                    <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                        <div
                            class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-profile-circle text-lg"></i>
                            </span>
                            <span
                                class="menu-title menu-item-active:text-primary menu-link-hover:!text-primary text-sm font-medium text-gray-800"
                            >
                                Public Profile
                            </span>
                            <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                                <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                            </span>
                        </div>
                        <div
                            class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200"
                        >
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        Profiles
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/profiles/default.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Default
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/profiles/creator.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Creator
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/profiles/company.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Company
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/profiles/nft.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                NFT
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/profiles/blogger.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Blogger
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/profiles/crm.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                CRM
                                            </span>
                                        </a>
                                    </div>
                                    <div
                                        data-menu-item-toggle="accordion"
                                        data-menu-item-trigger="click"
                                        class="menu-item flex-col-reverse"
                                    >
                                        <div
                                            class="menu-link grow cursor-pointer gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm font-normal text-gray-600 dark:text-gray-500"
                                            >
                                                <span class="menu-item-show:!flex hidden">Show less</span>
                                                <span class="menu-item-show:hidden flex">Show 4 more</span>
                                            </span>
                                            <span
                                                class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                            >
                                                <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                                <i
                                                    class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"
                                                ></i>
                                            </span>
                                        </div>
                                        <div class="menu-accordion gap-0.5">
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/public-profile/profiles/gamer.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Gamer
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/public-profile/profiles/feeds.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Feeds
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/public-profile/profiles/plain.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Plain
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/public-profile/profiles/modal.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Modal
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        Projects
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/projects/3-columns.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                3 Columns
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/projects/2-columns.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                2 Columns
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/public-profile/works.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Works
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/public-profile/teams.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Teams
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/public-profile/network.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Network
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/public-profile/activity.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Activity
                                    </span>
                                </a>
                            </div>
                            <div
                                data-menu-item-toggle="accordion"
                                data-menu-item-trigger="click"
                                class="menu-item flex-col-reverse"
                            >
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span class="menu-title text-2sm font-normal text-gray-600 dark:text-gray-500">
                                        <span class="menu-item-show:!flex hidden">Show less</span>
                                        <span class="menu-item-show:hidden flex">Show 3 more</span>
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div class="menu-accordion gap-0.5">
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/campaigns/card.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Campaigns - Card
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/campaigns/list.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Campaigns - List
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/public-profile/empty.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Empty
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                        <div
                            class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-setting-2 text-lg"></i>
                            </span>
                            <span
                                class="menu-title menu-item-active:text-primary menu-link-hover:!text-primary text-sm font-medium text-gray-800"
                            >
                                My Account
                            </span>
                            <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                                <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                            </span>
                        </div>
                        <div
                            class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200"
                        >
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        Account Home
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/home/get-started.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Get Started
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/home/user-profile.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                User Profile
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/home/company-profile.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Company Profile
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/home/settings-sidebar.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Settings - With Sidebar
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/home/settings-enterprise.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Settings - Enterprise
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/home/settings-plain.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Settings - Plain
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/home/settings-modal.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Settings - Modal
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        Billing
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/billing/basic.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Billing - Basic
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/billing/enterprise.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Billing - Enterprise
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/billing/plans.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Plans
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/billing/history.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Billing History
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        Security
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/security/get-started.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Get Started
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/security/overview.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Security Overview
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/security/allowed-ip-addresses.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Allowed IP Addresses
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/security/privacy-settings.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Privacy Settings
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/security/device-management.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Device Management
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/security/backup-and-recovery.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Backup & Recovery
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/security/current-sessions.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Current Sessions
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/security/security-log.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Security Log
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        Members & Roles
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/members/team-starter.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Teams Starter
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/members/teams.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Teams
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/members/team-info.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Team Info
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/members/members-starter.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Members Starter
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/members/team-members.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Team Members
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/members/import-members.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Import Members
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/members/roles.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Roles
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/members/permissions-toggle.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Permissions - Toggler
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/members/permissions-check.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Permissions - Check
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/account/integrations.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Integrations
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/account/notifications.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Notifications
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/account/api-keys.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        API Keys
                                    </span>
                                </a>
                            </div>
                            <div
                                data-menu-item-toggle="accordion"
                                data-menu-item-trigger="click"
                                class="menu-item flex-col-reverse"
                            >
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span class="menu-title text-2sm font-normal text-gray-600 dark:text-gray-500">
                                        <span class="menu-item-show:!flex hidden">Show less</span>
                                        <span class="menu-item-show:hidden flex">Show 3 more</span>
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div class="menu-accordion gap-0.5">
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/appearance.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Appearance
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/invite-a-friend.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Invite a Friend
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/account/activity.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Activity
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                        <div
                            class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-users text-lg"></i>
                            </span>
                            <span
                                class="menu-title menu-item-active:text-primary menu-link-hover:!text-primary text-sm font-medium text-gray-800"
                            >
                                Network
                            </span>
                            <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                                <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                            </span>
                        </div>
                        <div
                            class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200"
                        >
                            <div class="menu-item">
                                <a
                                    href="html/demo1/network/get-started.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Get Started
                                    </span>
                                </a>
                            </div>
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        User Cards
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-cards/mini-cards.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Mini Cards
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-cards/team-crew.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Team Crew
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-cards/author.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Author
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-cards/nft.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                NFT
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-cards/social.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Social
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        User Table
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-table/team-crew.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Team Crew
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-table/app-roster.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                App Roster
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-table/market-authors.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Market Authors
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-table/saas-users.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                SaaS Users
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-table/store-clients.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Store Clients
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/network/user-table/visitors.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Visitors
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div
                                    href="#"
                                    class="menu-label grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span class="menu-title text-2sm font-normal text-gray-800">Cooperations</span>
                                    <span class="menu-badge me-[-10px]">
                                        <span class="badge badge-xs">Soon</span>
                                    </span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div
                                    href="#"
                                    class="menu-label grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span class="menu-title text-2sm font-normal text-gray-800">Leads</span>
                                    <span class="menu-badge me-[-10px]">
                                        <span class="badge badge-xs">Soon</span>
                                    </span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div
                                    href="#"
                                    class="menu-label grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span class="menu-title text-2sm font-normal text-gray-800">Donators</span>
                                    <span class="menu-badge me-[-10px]">
                                        <span class="badge badge-xs">Soon</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                        <div
                            class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-security-user text-lg"></i>
                            </span>
                            <span
                                class="menu-title menu-item-active:text-primary menu-link-hover:!text-primary text-sm font-medium text-gray-800"
                            >
                                Authentication
                            </span>
                            <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                                <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                            </span>
                        </div>
                        <div
                            class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200"
                        >
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        Classic
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/authentication/classic/sign-in.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Sign In
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/authentication/classic/sign-up.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Sign Up
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/authentication/classic/2fa.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                2FA
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/authentication/classic/check-email.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Check Email
                                            </span>
                                        </a>
                                    </div>
                                    <div
                                        data-menu-item-toggle="accordion"
                                        data-menu-item-trigger="click"
                                        class="menu-item"
                                    >
                                        <div
                                            class="menu-link grow cursor-pointer gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                            >
                                                Reset Password
                                            </span>
                                            <span
                                                class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                            >
                                                <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                                <i
                                                    class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"
                                                ></i>
                                            </span>
                                        </div>
                                        <div
                                            class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                        >
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/authentication/classic/reset-password/enter-email.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Enter Email
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/authentication/classic/reset-password/check-email.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Check Email
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/authentication/classic/reset-password/change-password.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Change Password
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/authentication/classic/reset-password/password-changed.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Password is Changed
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-menu-item-toggle="accordion" data-menu-item-trigger="click" class="menu-item">
                                <div
                                    class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                    >
                                        Branded
                                    </span>
                                    <span
                                        class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                    >
                                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                        <i class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"></i>
                                    </span>
                                </div>
                                <div
                                    class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                >
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/authentication/branded/sign-in.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Sign In
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/authentication/branded/sign-up.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Sign Up
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/authentication/branded/2fa.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                2FA
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="html/demo1/authentication/branded/check-email.html"
                                            class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                            >
                                                Check Email
                                            </span>
                                        </a>
                                    </div>
                                    <div
                                        data-menu-item-toggle="accordion"
                                        data-menu-item-trigger="click"
                                        class="menu-item"
                                    >
                                        <div
                                            class="menu-link grow cursor-pointer gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                                            tabindex="0"
                                        >
                                            <span
                                                class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                            ></span>
                                            <span
                                                class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary me-1 font-normal text-gray-800"
                                            >
                                                Reset Password
                                            </span>
                                            <span
                                                class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400"
                                            >
                                                <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                                                <i
                                                    class="ki-filled ki-minus text-2xs menu-item-show:inline-flex hidden"
                                                ></i>
                                            </span>
                                        </div>
                                        <div
                                            class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200"
                                        >
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/authentication/branded/reset-password/enter-email.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Enter Email
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/authentication/branded/reset-password/check-email.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Check Email
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/authentication/branded/reset-password/change-password.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Change Password
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/authentication/branded/reset-password/password-changed.html"
                                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                                    tabindex="0"
                                                >
                                                    <span
                                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                                    ></span>
                                                    <span
                                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                                    >
                                                        Password is Changed
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/authentication/welcome-message.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Welcome Message
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/authentication/account-deactivated.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Account Deactivated
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/authentication/error-404.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Error 404
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="html/demo1/authentication/error-500.html"
                                    class="menu-link menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg dark:hover:border-gray-100"
                                    tabindex="0"
                                >
                                    <span
                                        class="menu-bullet menu-item-active:before:bg-primary menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"
                                    ></span>
                                    <span
                                        class="menu-title text-2sm menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary font-normal text-gray-800"
                                    >
                                        Error 500
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item pt-2.25 pb-px">
                        <span class="menu-heading text-2sm pe-[10px] ps-[10px] font-medium uppercase text-gray-500">
                            Apps
                        </span>
                    </div>
                    <div class="menu-item">
                        <div
                            href=""
                            class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-users text-lg"></i>
                            </span>
                            <span class="menu-title text-sm font-medium text-gray-800">User Management</span>
                            <span class="menu-badge me-[-10px]">
                                <span class="badge badge-xs">Soon</span>
                            </span>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div
                            href=""
                            class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-questionnaire-tablet text-lg"></i>
                            </span>
                            <span class="menu-title text-sm font-medium text-gray-800">Projects</span>
                            <span class="menu-badge me-[-10px]">
                                <span class="badge badge-xs">Soon</span>
                            </span>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div
                            href=""
                            class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-handcart text-lg"></i>
                            </span>
                            <span class="menu-title text-sm font-medium text-gray-800">eCommerce</span>
                            <span class="menu-badge me-[-10px]">
                                <span class="badge badge-xs">Soon</span>
                            </span>
                        </div>
                    </div>
                    <div class="menu-item pt-2.25 pb-px">
                        <span class="menu-heading text-2sm pe-[10px] ps-[10px] font-medium uppercase text-gray-500">
                            Miscellaneous
                        </span>
                    </div>
                    <div class="menu-item">
                        <div
                            href=""
                            class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-some-files text-lg"></i>
                            </span>
                            <span class="menu-title text-sm font-medium text-gray-800">Modals</span>
                            <span class="menu-badge me-[-10px]">
                                <span class="badge badge-xs">Soon</span>
                            </span>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div
                            href=""
                            class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                            tabindex="0"
                        >
                            <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                                <i class="ki-filled ki-note-2 text-lg"></i>
                            </span>
                            <span class="menu-title text-sm font-medium text-gray-800">Wizards</span>
                            <span class="menu-badge me-[-10px]">
                                <span class="badge badge-xs">Soon</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- End of Sidebar Menu -->
            </div>
        </div>
    </div>
</template>

