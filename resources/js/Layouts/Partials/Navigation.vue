<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'
import { useDark, useToggle } from '@vueuse/core'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import Dropdown from '@/Components/Dropdown.vue'
import DropdownLink from '@/Components/DropdownLink.vue'
import NavLink from '@/Components/NavLink.vue'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import UserDropdown from './UserDropdown.vue'

const showingNavigationDropdown = ref(false),
    isDark = useDark(),
    toggleDark = useToggle(isDark)
</script>

<template>
    <header
        id="header"
        data-sticky="true"
        data-sticky-class="shadow-sm"
        data-sticky-name="header"
        class="header fixed end-0 start-0 top-0 z-10 flex shrink-0 items-stretch bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]"
    >
        <!-- Container -->
        <div id="header_container" class="container-fixed flex items-stretch justify-between lg:gap-4">
            <!-- Mobile Logo -->
            <div class="-ms-1 flex items-center gap-1 lg:hidden">
                <a href="html/demo1.html" class="shrink-0">
                    <img src="assets/media/app/mini-logo.svg" class="max-h-[25px] w-full" />
                </a>
                <div class="flex items-center">
                    <button data-drawer-toggle="#sidebar" class="btn btn-icon btn-light btn-clear btn-sm">
                        <i class="ki-filled ki-menu"></i>
                    </button>
                    <button data-drawer-toggle="#mega_menu_wrapper" class="btn btn-icon btn-light btn-clear btn-sm">
                        <i class="ki-filled ki-burger-menu-2"></i>
                    </button>
                </div>
            </div>
            <!-- End of Mobile Logo -->
            <!--Megamenu Contaoner-->
            <div id="mega_menu_container" class="flex items-stretch">
                <!--Megamenu Inner-->
                <div
                    data-reparent="true"
                    data-reparent-mode="prepend|lg:prepend"
                    data-reparent-target="body|lg:#mega_menu_container"
                    class="flex items-stretch"
                >
                    <!--Megamenu Wrapper-->
                    <div
                        id="mega_menu_wrapper"
                        data-drawer="true"
                        data-drawer-class="drawer drawer-start fixed z-10 top-0 bottom-0 w-full me-5 max-w-[250px] p-5 lg:p-0 overflow-auto"
                        data-drawer-enable="true|lg:false"
                        class="hidden lg:flex lg:items-stretch"
                    >
                        <!--Megamenu-->
                        <div id="mega_menu" data-menu="true" class="menu flex-col gap-5 lg:flex-row lg:gap-7.5">
                            <!--Megamenu Item-->
                            <div class="menu-item active">
                                <a
                                    href="html/demo1.html"
                                    class="menu-link menu-item-hover:text-primary menu-item-active:text-gray-900 menu-item-active:font-medium text-nowrap text-sm font-medium text-gray-800"
                                >
                                    <span class="menu-title text-nowrap">Home</span>
                                </a>
                            </div>
                            <!--End of Megamenu Item-->
                            <!--Megamenu Item-->
                            <div
                                data-menu-item-placement="bottom-start"
                                data-menu-item-placement-rtl="bottom-end"
                                data-menu-item-toggle="accordion|lg:dropdown"
                                data-menu-item-trigger="click|lg:hover"
                                class="menu-item"
                            >
                                <div
                                    class="menu-link menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-medium menu-item-here:font-medium text-sm text-gray-800"
                                >
                                    <span class="menu-title text-nowrap">Profiles</span>
                                    <span class="menu-arrow flex lg:hidden">
                                        <i class="ki-filled ki-plus menu-item-show:hidden text-2xs"></i>
                                        <i class="ki-filled ki-minus menu-item-show:inline-flex hidden text-2xs"></i>
                                    </span>
                                </div>
                                <div class="menu-dropdown w-full gap-0 lg:max-w-[875px]">
                                    <div class="pb-2 pt-4 lg:p-7.5">
                                        <div class="grid gap-5 lg:grid-cols-2 lg:gap-10">
                                            <div class="menu menu-default menu-fit flex-col">
                                                <h3
                                                    class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                                >
                                                    Profiles
                                                </h3>
                                                <div class="grid lg:grid-cols-2 lg:gap-5">
                                                    <div class="flex flex-col">
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/default.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-badge"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Default</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/creator.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-coffee"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Creator</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/company.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-abstract-41"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Company</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/nft.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-bitcoin"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">NFT</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/blogger.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-message-text"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Blogger</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/crm.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-devices"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">CRM</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/gamer.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-ghost"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Gamer</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/feeds.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-book"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Feeds</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/plain.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-files"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Plain</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/profiles/modal.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-mouse-square"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Modal</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a href="#" class="menu-link" tabindex="0">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-financial-schedule"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Freelancer</span>
                                                                <span class="menu-badge">
                                                                    <span class="badge badge-xs">Soon</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a href="#" class="menu-link" tabindex="0">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-technology-4"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Developer</span>
                                                                <span class="menu-badge">
                                                                    <span class="badge badge-xs">Soon</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a href="#" class="menu-link" tabindex="0">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-users"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Team</span>
                                                                <span class="menu-badge">
                                                                    <span class="badge badge-xs">Soon</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a href="#" class="menu-link" tabindex="0">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-calendar-tick"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Events</span>
                                                                <span class="menu-badge">
                                                                    <span class="badge badge-xs">Soon</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu menu-default menu-fit flex-col">
                                                <h3
                                                    class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                                >
                                                    Other Pages
                                                </h3>
                                                <div class="grid lg:grid-cols-2 lg:gap-5">
                                                    <div class="flex flex-col">
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/projects/3-columns.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-element-6"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">
                                                                    Projects - 3 Columns
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/projects/2-columns.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-element-4"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">
                                                                    Projects - 2 Columns
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/works.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-office-bag"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Works</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/teams.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-people"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Teams</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/network.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-icon"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Network</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/activity.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-chart-line-up-2"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Activity</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/campaigns/card.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-element-11"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Campaigns - Card</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/campaigns/list.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-kanban"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Campaigns - List</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/public-profile/empty.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-file-sheet"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Empty Page</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a href="#" class="menu-link" tabindex="0">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-document"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Documents</span>
                                                                <span class="menu-badge">
                                                                    <span class="badge badge-xs">Soon</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a href="#" class="menu-link" tabindex="0">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-award"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Badges</span>
                                                                <span class="menu-badge">
                                                                    <span class="badge badge-xs">Soon</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a href="#" class="menu-link" tabindex="0">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-gift"></i>
                                                                </span>
                                                                <span class="menu-title grow-0">Awards</span>
                                                                <span class="menu-badge">
                                                                    <span class="badge badge-xs">Soon</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-wrap items-center gap-2.5 rounded-xl border border-gray-300 bg-light-active px-4 py-4 dark:bg-coal-500 lg:justify-between lg:rounded-t-none lg:border-0 lg:border-t lg:border-t-gray-300 lg:px-7.5 lg:py-5 dark:lg:border-t-gray-100"
                                    >
                                        <div class="flex flex-col gap-1.5">
                                            <div class="text-md font-semibold leading-none text-gray-900">
                                                Read to Get Started ?
                                            </div>
                                            <div class="fomt-medium text-2sm text-gray-600">
                                                Take your docs to the next level of Metronic
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-dark">Read Documentation</a>
                                    </div>
                                </div>
                            </div>
                            <!--End of Megamenu Item-->
                            <!--Megamenu Item-->
                            <div
                                data-menu-item-offset="-300px, 0"
                                data-menu-item-offset-rtl="300px, 0"
                                data-menu-item-overflow="true"
                                data-menu-item-placement="bottom-start"
                                data-menu-item-placement-rtl="bottom-end"
                                data-menu-item-toggle="accordion|lg:dropdown"
                                data-menu-item-trigger="click|lg:hover"
                                class="menu-item"
                            >
                                <div
                                    class="menu-link menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold text-sm font-medium text-gray-700"
                                >
                                    <span class="menu-title text-nowrap">My Account</span>
                                    <span class="menu-arrow flex lg:hidden">
                                        <i class="ki-filled ki-plus menu-item-show:hidden text-2xs"></i>
                                        <i class="ki-filled ki-minus menu-item-show:inline-flex hidden text-2xs"></i>
                                    </span>
                                </div>
                                <div class="menu-dropdown w-full flex-col gap-0 lg:max-w-[1240px] lg:flex-row">
                                    <div
                                        class="mt-2 shrink-0 rounded-xl bg-light-active px-3 py-4 dark:bg-coal-500 lg:mt-0 lg:w-[250px] lg:rounded-l-xl lg:rounded-r-none lg:border-r lg:border-r-gray-200 lg:p-7.5 dark:lg:border-r-coal-100"
                                    >
                                        <h3
                                            class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                        >
                                            General Pages
                                        </h3>
                                        <div class="menu menu-default menu-fit flex-col">
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/account/integrations.html"
                                                    class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-technology-2"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">Integrations</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/account/notifications.html"
                                                    class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-notification-1"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">Notifications</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/account/api-keys.html"
                                                    class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-key"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">API Keys</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/account/appearance.html"
                                                    class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-eye"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">Appearance</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/account/invite-a-friend.html"
                                                    class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-user-tick"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">Invite a Friend</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="html/demo1/account/activity.html"
                                                    class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-support"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">Activity</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href=""
                                                    class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-verify"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">Brand</span>
                                                    <span class="menu-badge">
                                                        <span class="badge badge-xs">Soon</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href=""
                                                    class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-euro"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">Get Paid</span>
                                                    <span class="menu-badge">
                                                        <span class="badge badge-xs">Soon</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grow pb-2 pt-4 lg:p-7.5 lg:pb-5">
                                        <div class="grid gap-5 lg:grid-cols-5">
                                            <div class="flex flex-col">
                                                <h3
                                                    class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                                >
                                                    Account Home
                                                </h3>
                                                <div class="menu menu-default menu-fit flex-col">
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/get-started.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Get Started</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/user-profile.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">User Profile</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/company-profile.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Company Profile</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/settings-sidebar.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">With Sidebar</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/settings-enterprise.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Enterprise</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/settings-plain.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Plain</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/home/settings-modal.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Modal</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col">
                                                <h3
                                                    class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                                >
                                                    Billing
                                                </h3>
                                                <div class="menu menu-default menu-fit flex-col">
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/billing/basic.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Basic Billing</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/billing/enterprise.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Enterprise</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/billing/plans.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Plans</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/billing/history.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Billing History</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a href="" class="menu-link" tabindex="0">
                                                            <span class="menu-title grow-0">Tax Info</span>
                                                            <span class="menu-badge">
                                                                <span class="badge badge-xs">Soon</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a href="" class="menu-link" tabindex="0">
                                                            <span class="menu-title grow-0">Invoices</span>
                                                            <span class="menu-badge">
                                                                <span class="badge badge-xs">Soon</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a href="" class="menu-link" tabindex="0">
                                                            <span class="menu-title grow-0">Gateaways</span>
                                                            <span class="menu-badge">
                                                                <span class="badge badge-xs">Soon</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col">
                                                <h3
                                                    class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                                >
                                                    Security
                                                </h3>
                                                <div class="menu menu-default menu-fit flex-col">
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/security/get-started.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Get Started</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/security/overview.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Security Overview</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/security/allowed-ip-addresses.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">IP Addresses</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/security/privacy-settings.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Privacy Settings</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/security/device-management.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Device Management</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/security/backup-and-recovery.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Backup & Recovery</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/security/current-sessions.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Current Sessions</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/security/security-log.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Security Log</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col">
                                                <h3
                                                    class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                                >
                                                    Members & Roles
                                                </h3>
                                                <div class="menu menu-default menu-fit flex-col">
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/team-starter.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Teams Starter</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/teams.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Teams</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/team-info.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Team Info</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/members-starter.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Members Starter</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/team-members.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Team Members</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/import-members.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Import Members</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/roles.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Roles</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/permissions-toggle.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">
                                                                Persmissions - Toggler
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/permissions-check.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Persmissions - Check</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col">
                                                <h3
                                                    class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                                >
                                                    Other Pages
                                                </h3>
                                                <div class="menu menu-default menu-fit flex-col">
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/integrations.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Integrations</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/notifications.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Notifications</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/api-keys.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">API Keys</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/appearance.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Appearance</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/invite-a-friend.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Invite a Friend</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/activity.html"
                                                            class="menu-link"
                                                            tabindex="0"
                                                        >
                                                            <span class="menu-title grow-0">Activity</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of Megamenu Item-->
                            <!--Megamenu Item-->
                            <div
                                data-menu-item-offset="-300px, 0"
                                data-menu-item-offset-rtl="300px, 0"
                                data-menu-item-overflow="true"
                                data-menu-item-placement="bottom-start"
                                data-menu-item-placement-rtl="bottom-end"
                                data-menu-item-toggle="accordion|lg:dropdown"
                                data-menu-item-trigger="click|lg:hover"
                                class="menu-item"
                            >
                                <div
                                    class="menu-link menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold text-sm font-medium text-gray-700"
                                >
                                    <span class="menu-title text-nowrap">Network</span>
                                    <span class="menu-arrow flex lg:hidden">
                                        <i class="ki-filled ki-plus menu-item-show:hidden text-2xs"></i>
                                        <i class="ki-filled ki-minus menu-item-show:inline-flex hidden text-2xs"></i>
                                    </span>
                                </div>
                                <div class="menu-dropdown w-full flex-col gap-0 lg:max-w-[670px]">
                                    <div class="flex flex-col lg:flex-row">
                                        <div
                                            class="mt-2 flex shrink-0 flex-col gap-5 rounded-xl bg-light-active px-3 py-4 dark:bg-coal-500 lg:mt-0 lg:w-[250px] lg:rounded-none lg:rounded-tl-xl lg:border-r lg:border-r-gray-200 lg:p-7.5 dark:lg:border-r-coal-100"
                                        >
                                            <h3 class="h-3.5 ps-2.5 text-sm font-semibold leading-none text-gray-800">
                                                General Pages
                                            </h3>
                                            <div class="menu menu-default menu-fit flex-col">
                                                <div class="menu-item">
                                                    <a
                                                        href="#"
                                                        class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                    >
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-flag"></i>
                                                        </span>
                                                        <span class="menu-title grow-0">Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a
                                                        href="#"
                                                        class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                    >
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-users"></i>
                                                        </span>
                                                        <span class="menu-title grow-0">Colleagues</span>
                                                        <span class="menu-badge">
                                                            <span class="badge badge-xs">Soon</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a
                                                        href="#"
                                                        class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                    >
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-heart"></i>
                                                        </span>
                                                        <span class="menu-title grow-0">Donators</span>
                                                        <span class="menu-badge">
                                                            <span class="badge badge-xs">Soon</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a
                                                        href="#"
                                                        class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                    >
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-abstract-21"></i>
                                                        </span>
                                                        <span class="menu-title grow-0">Leads</span>
                                                        <span class="menu-badge">
                                                            <span class="badge badge-xs">Soon</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grow pb-2 pt-4 lg:p-7.5 lg:pb-5">
                                            <div class="grid gap-5 lg:grid-cols-2">
                                                <div class="flex flex-col gap-5">
                                                    <h3
                                                        class="flex h-3.5 items-center gap-1.5 ps-2.5 text-sm font-semibold leading-none text-gray-800"
                                                    >
                                                        User Cards
                                                    </h3>
                                                    <div class="menu menu-default menu-fit flex-col">
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-cards/mini-cards.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Mini Cards</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-cards/team-crew.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Team Crew</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-cards/nft.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Authors</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-cards/social.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">NFT Users</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a href="#" class="menu-link" tabindex="0">
                                                                <span class="menu-title grow-0">Social Users</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a href="#" class="menu-link" tabindex="0">
                                                                <span class="menu-title grow-0">Gamers</span>
                                                                <span class="menu-badge">
                                                                    <span class="badge badge-xs">Soon</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-5">
                                                    <h3
                                                        class="flex h-3.5 items-center gap-1.5 ps-2.5 text-sm font-semibold leading-none text-gray-800"
                                                    >
                                                        User Base
                                                        <span
                                                            class="badge badge-xs badge-primary badge-outline left-auto"
                                                        >
                                                            Datatables
                                                        </span>
                                                    </h3>
                                                    <div class="menu menu-default menu-fit flex-col">
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-table/team-crew.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Team Crew</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-table/app-roster.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">App Roster</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-table/market-authors.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Market Authors</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-table/saas-users.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">SaaS Users</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-table/store-clients.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Store Clients</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/network/user-table/visitors.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Visitors</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-wrap items-center gap-2.5 rounded-xl border border-gray-300 bg-light-active px-4 py-4 dark:bg-coal-500 lg:justify-between lg:rounded-t-none lg:border-0 lg:border-t lg:border-t-gray-300 lg:px-7.5 lg:py-5 dark:lg:border-t-gray-100"
                                    >
                                        <div class="flex flex-col gap-1.5">
                                            <div class="text-md font-semibold leading-none text-gray-900">
                                                Read to Get Started ?
                                            </div>
                                            <div class="fomt-medium text-2sm text-gray-600">
                                                Take your docs to the next level of Metronic
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-dark">Read Documentation</a>
                                    </div>
                                </div>
                            </div>
                            <!--End of Megamenu Item-->
                            <!--Megamenu Item-->
                            <div
                                data-menu-item-offset="-300px, 0"
                                data-menu-item-offset-rtl="300px, 0"
                                data-menu-item-overflow="true"
                                data-menu-item-placement="bottom-start"
                                data-menu-item-placement-rtl="bottom-end"
                                data-menu-item-toggle="accordion|lg:dropdown"
                                data-menu-item-trigger="click|lg:hover"
                                class="menu-item"
                            >
                                <div
                                    class="menu-link menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold text-sm font-medium text-gray-700"
                                >
                                    <span class="menu-title text-nowrap">Authentication</span>
                                    <span class="menu-arrow flex lg:hidden">
                                        <i class="ki-filled ki-plus menu-item-show:hidden text-2xs"></i>
                                        <i class="ki-filled ki-minus menu-item-show:inline-flex hidden text-2xs"></i>
                                    </span>
                                </div>
                                <div class="menu-dropdown w-full flex-col gap-0 lg:max-w-[670px]">
                                    <div class="flex flex-col lg:flex-row">
                                        <div class="grow pb-2 pt-4 lg:p-7.5 lg:pb-5">
                                            <div class="grid gap-5 lg:grid-cols-2">
                                                <div class="flex flex-col">
                                                    <h3
                                                        class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                                    >
                                                        Classic Layout
                                                    </h3>
                                                    <div class="menu menu-default menu-fit flex-col">
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/classic/sign-in.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Sign In</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/classic/sign-up.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Sign Up</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/classic/2fa.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">2FA</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/classic/check-email.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Check Email</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item pt-1">
                                                            <span class="p-2.5 text-2sm font-medium text-gray-600">
                                                                Reset Password
                                                            </span>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/classic/reset-password/enter-email.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Enter Email</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/classic/reset-password/check-email.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Check Email</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/classic/reset-password/change-password.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Change Password</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/classic/reset-password/password-changed.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">
                                                                    Password is Changed
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col">
                                                    <h3
                                                        class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5"
                                                    >
                                                        Branded Layout
                                                    </h3>
                                                    <div class="menu menu-default menu-fit flex-col">
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/branded/sign-in.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Sign In</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/branded/sign-up.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Sign Up</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/branded/2fa.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">2FA</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/branded/check-email.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Check Email</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item pt-1">
                                                            <span class="p-2.5 text-2sm font-medium text-gray-600">
                                                                Reset Password
                                                            </span>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/branded/reset-password/enter-email.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Enter Email</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/branded/reset-password/check-email.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Check Email</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/branded/reset-password/change-password.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">Change Password</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a
                                                                href="html/demo1/authentication/branded/reset-password/password-changed.html"
                                                                class="menu-link"
                                                                tabindex="0"
                                                            >
                                                                <span class="menu-title grow-0">
                                                                    Password is Changed
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mb-4 shrink-0 rounded-xl bg-light-active px-3 py-4 dark:bg-coal-500 lg:mb-0 lg:w-[250px] lg:rounded-l-none lg:rounded-r-xl lg:border-l lg:border-l-gray-200 lg:p-7.5 dark:lg:border-l-coal-100"
                                        >
                                            <h3 class="mb-5 ps-2.5 text-sm font-semibold leading-none text-gray-800">
                                                Other Pages
                                            </h3>
                                            <div class="menu menu-default menu-fit flex-col">
                                                <div class="menu-item">
                                                    <a
                                                        href="html/demo1/authentication/welcome-message.html"
                                                        class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                    >
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-like-2"></i>
                                                        </span>
                                                        <span class="menu-title grow-0">Welcome Message</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a
                                                        href="html/demo1/authentication/account-deactivated.html"
                                                        class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                    >
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-shield-cross"></i>
                                                        </span>
                                                        <span class="menu-title grow-0">Account Deactivated</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a
                                                        href="html/demo1/authentication/error-404.html"
                                                        class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                    >
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-message-question"></i>
                                                        </span>
                                                        <span class="menu-title grow-0">Error 404</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a
                                                        href="html/demo1/authentication/error-500.html"
                                                        class="menu-link menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100 border border-transparent"
                                                    >
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-information"></i>
                                                        </span>
                                                        <span class="menu-title grow-0">Error 500</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-wrap items-center gap-2.5 rounded-xl border border-gray-300 bg-light-active px-4 py-4 dark:bg-coal-500 lg:justify-between lg:rounded-t-none lg:border-0 lg:border-t lg:border-t-gray-300 lg:px-7.5 lg:py-5 dark:lg:border-t-gray-100"
                                    >
                                        <div class="flex flex-col gap-1.5">
                                            <div class="text-md font-semibold leading-none text-gray-900">
                                                Read to Get Started ?
                                            </div>
                                            <div class="fomt-medium text-2sm text-gray-600">
                                                Take your docs to the next level of Metronic
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-dark">Read Documentation</a>
                                    </div>
                                </div>
                            </div>
                            <!--End of Megamenu Item-->
                            <!--Megamenu Item-->
                            <div
                                data-menu-item-offset="0,0|lg:-20px, 0"
                                data-menu-item-offset-rtl="0,0|lg:20px, 0"
                                data-menu-item-overflow="true"
                                data-menu-item-placement="bottom-start"
                                data-menu-item-placement-rtl="bottom-end"
                                data-menu-item-toggle="dropdown"
                                data-menu-item-trigger="click|lg:hover"
                                class="menu-item"
                            >
                                <div
                                    class="menu-link menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold text-sm font-medium text-gray-700"
                                >
                                    <span class="menu-title text-nowrap">Help</span>
                                    <span class="menu-arrow flex lg:hidden">
                                        <i class="ki-filled ki-plus menu-item-show:hidden text-2xs"></i>
                                        <i class="ki-filled ki-minus menu-item-show:inline-flex hidden text-2xs"></i>
                                    </span>
                                </div>
                                <div class="menu-dropdown menu-default w-full max-w-[220px] py-2.5">
                                    <div class="menu-item">
                                        <a
                                            href="https://keenthemes.com/metronic/tailwind/docs/getting-started/installation"
                                            class="menu-link"
                                            tabindex="0"
                                        >
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-coffee"></i>
                                            </span>
                                            <span class="menu-title grow-0">Getting Started</span>
                                        </a>
                                    </div>
                                    <div
                                        data-menu-item-placement="right-start"
                                        data-menu-item-placement-rtl="left-start"
                                        data-menu-item-toggle="dropdown"
                                        data-menu-item-trigger="click|lg:hover"
                                        class="menu-item"
                                    >
                                        <div class="menu-link">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-information"></i>
                                            </span>
                                            <span class="menu-title">Support Forum</span>
                                            <span class="menu-arrow">
                                                <i class="ki-filled ki-right text-3xs rtl:rotate-180 rtl:transform"></i>
                                            </span>
                                        </div>
                                        <div class="menu-dropdown menu-default w-full max-w-[175px] lg:max-w-[220px]">
                                            <div class="menu-item">
                                                <a href="https://devs.keenthemes.com" class="menu-link" tabindex="0">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-questionnaire-tablet"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">All Questions</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="https://devs.keenthemes.com/popular"
                                                    class="menu-link"
                                                    tabindex="0"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-star"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">Popular Questions</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a
                                                    href="https://devs.keenthemes.com/question/create"
                                                    class="menu-link"
                                                    tabindex="0"
                                                >
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-message-question"></i>
                                                    </span>
                                                    <span class="menu-title grow-0">Ask Question</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license"
                                            class="menu-link"
                                            tabindex="0"
                                        >
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-subtitle"></i>
                                            </span>
                                            <span class="menu-title">Licenses & FAQ</span>
                                            <span data-tooltip="#menu_tooltip_3" class="menu-badge">
                                                <i class="ki-filled ki-information-2 text-md text-gray-500"></i>
                                            </span>
                                            <div id="menu_tooltip_3" class="tooltip">Learn more about licenses</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a
                                            href="https://keenthemes.com/metronic/tailwind/docs"
                                            class="menu-link"
                                            tabindex="0"
                                        >
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-questionnaire-tablet"></i>
                                            </span>
                                            <span class="menu-title grow-0">Documentation</span>
                                        </a>
                                    </div>
                                    <div class="menu-separator"></div>
                                    <div class="menu-item">
                                        <a href="https://keenthemes.com/contact" class="menu-link" tabindex="0">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-share"></i>
                                            </span>
                                            <span class="menu-title grow-0">Contact Us</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End of Megamenu Item-->
                        </div>
                        <!--End of Megamenu-->
                    </div>
                    <!--End of Megamenu Wrapper-->
                </div>
                <!--End of Megamenu Inner-->
            </div>
            <!--End of Megamenu Contaoner-->
            <!-- Topbar -->
            <div class="flex items-center gap-2 lg:gap-3.5">
                <button
                    data-modal-toggle="#search_modal"
                    class="btn btn-icon btn-icon-lg size-9 rounded-full text-gray-500 hover:bg-primary-light hover:text-primary"
                >
                    <i class="ki-filled ki-magnifier"></i>
                </button>
                <div
                    data-dropdown="true"
                    data-dropdown-offset="170px, 10px"
                    data-dropdown-offset-rtl="-170px, 10px"
                    data-dropdown-placement="bottom-end"
                    data-dropdown-placement-rtl="bottom-start"
                    data-dropdown-trigger="click|lg:click"
                    class="dropdown"
                >
                    <button
                        class="dropdown-toggle btn btn-icon btn-icon-lg dropdown-open:bg-primary-light dropdown-open:text-primary size-9 rounded-full text-gray-500 hover:bg-primary-light hover:text-primary"
                    >
                        <i class="ki-filled ki-messages"></i>
                    </button>
                    <div class="dropdown-content light:border-gray-300 w-screen max-w-[450px]">
                        <div>
                            <div
                                class="flex items-center justify-between gap-2.5 px-5 py-2.5 text-sm font-semibold text-gray-900"
                            >
                                Chat
                                <button
                                    data-dropdown-dismiss="true"
                                    class="btn btn-sm btn-icon btn-light btn-clear shrink-0"
                                >
                                    <i class="ki-filled ki-cross"></i>
                                </button>
                            </div>
                            <div class="border-b border-b-gray-200"></div>
                            <div class="border-b border-gray-200 py-2.5 shadow-card">
                                <div class="flex flex-wrap items-center justify-between gap-2 px-5">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <div
                                            class="flex size-11 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100"
                                        >
                                            <img src="assets/media/brand-logos/gitlab.svg" alt="" class="size-7" />
                                        </div>
                                        <div class="flex flex-col">
                                            <a
                                                href="#"
                                                class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                            >
                                                HR Team
                                            </a>
                                            <span class="text-2xs font-medium italic text-gray-500">
                                                Jessy is typing..
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2.5">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img
                                                    src="assets/media/avatars/300-4.png"
                                                    class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                                />
                                            </div>
                                            <div class="flex">
                                                <img
                                                    src="assets/media/avatars/300-1.png"
                                                    class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                                />
                                            </div>
                                            <div class="flex">
                                                <img
                                                    src="assets/media/avatars/300-2.png"
                                                    class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                                />
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="relative inline-flex size-6 size-[30px] shrink-0 items-center justify-center rounded-full bg-success text-3xs font-semibold leading-none text-success-inverse ring-1 ring-success-light hover:z-5"
                                                >
                                                    +10
                                                </span>
                                            </div>
                                        </div>
                                        <div data-menu="true" class="menu">
                                            <div
                                                data-menu-item-offset="0, 10px"
                                                data-menu-item-placement="bottom-end"
                                                data-menu-item-placement-rtl="bottom-start"
                                                data-menu-item-toggle="dropdown"
                                                data-menu-item-trigger="click|lg:hover"
                                                class="menu-item"
                                            >
                                                <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                    <i class="ki-filled ki-dots-vertical"></i>
                                                </button>
                                                <div
                                                    data-menu-dismiss="true"
                                                    class="menu-dropdown menu-default w-full max-w-[175px]"
                                                >
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/members/teams.html"
                                                            class="menu-link"
                                                        >
                                                            <span class="menu-icon">
                                                                <i class="ki-filled ki-users"></i>
                                                            </span>
                                                            <span class="menu-title">Invite Users</span>
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
                                                                <i class="ki-filled ki-people"></i>
                                                            </span>
                                                            <span class="menu-title">Team</span>
                                                            <span class="menu-arrow">
                                                                <i
                                                                    class="ki-filled ki-right text-3xs rtl:rotate-180 rtl:transform"
                                                                ></i>
                                                            </span>
                                                        </div>
                                                        <div class="menu-dropdown menu-default w-full max-w-[175px]">
                                                            <div class="menu-item">
                                                                <a
                                                                    href="html/demo1/account/members/import-members.html"
                                                                    class="menu-link"
                                                                >
                                                                    <span class="menu-icon">
                                                                        <i class="ki-filled ki-shield-search"></i>
                                                                    </span>
                                                                    <span class="menu-title">Find Members</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a
                                                                    href="html/demo1/account/members/import-members.html"
                                                                    class="menu-link"
                                                                >
                                                                    <span class="menu-icon">
                                                                        <i class="ki-filled ki-calendar"></i>
                                                                    </span>
                                                                    <span class="menu-title">Meetings</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a
                                                                    href="html/demo1/account/members/import-members.html"
                                                                    class="menu-link"
                                                                >
                                                                    <span class="menu-icon">
                                                                        <i class="ki-filled ki-filter-edit"></i>
                                                                    </span>
                                                                    <span class="menu-title">Group Settings</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a
                                                            href="html/demo1/account/security/privacy-settings.html"
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
                                </div>
                            </div>
                        </div>
                        <div
                            data-scrollable="true"
                            data-scrollable-dependencies="#header"
                            data-scrollable-max-height="auto"
                            data-scrollable-offset="280px"
                            class="scrollable-y-auto"
                        >
                            <div class="flex flex-col gap-5 py-5">
                                <div class="flex items-end gap-3.5 px-5">
                                    <img src="assets/media/avatars/300-5.png" alt="" class="size-9 rounded-full" />
                                    <div class="flex flex-col gap-1.5">
                                        <div
                                            class="card flex flex-col gap-2.5 rounded-bl-none bg-gray-100 p-3 shadow-none"
                                        >
                                            <p class="text-2sm font-medium text-gray-700">
                                                Hello!
                                                <br />
                                                Next week we are closing the project. Do You have questions?
                                            </p>
                                        </div>
                                        <span class="text-2xs font-medium text-gray-500">14:04</span>
                                    </div>
                                </div>
                                <div class="flex items-end justify-end gap-3.5 px-5">
                                    <div class="flex flex-col gap-1.5">
                                        <div
                                            class="card flex flex-col gap-2.5 rounded-br-none bg-primary p-3 shadow-none"
                                        >
                                            <p class="text-2sm font-medium text-light">This is excellent news!</p>
                                        </div>
                                        <div class="relative flex items-center justify-end">
                                            <span class="me-6 text-2xs font-medium text-gray-600">14:08</span>
                                            <i class="ki-filled ki-double-check absolute text-lg text-success"></i>
                                        </div>
                                    </div>
                                    <div class="relative shrink-0">
                                        <img src="assets/media/avatars/300-2.png" alt="" class="size-9 rounded-full" />
                                        <span
                                            class="badge badge-circle badge-success absolute end-0 top-7 size-[4.8px] -translate-y-1/2 transform"
                                        ></span>
                                    </div>
                                </div>
                                <div class="flex items-end gap-3.5 px-5">
                                    <img src="assets/media/avatars/300-4.png" alt="" class="size-9 rounded-full" />
                                    <div class="flex flex-col gap-1.5">
                                        <div
                                            class="card flex flex-col gap-2.5 rounded-bl-none bg-gray-100 p-3 shadow-none"
                                        >
                                            <p class="text-2sm font-medium text-gray-700">
                                                I have checked the features, can not wait to demo them!
                                            </p>
                                        </div>
                                        <span class="text-2xs font-medium text-gray-500">14:26</span>
                                    </div>
                                </div>
                                <div class="flex items-end gap-3.5 px-5">
                                    <img src="assets/media/avatars/300-1.png" alt="" class="size-9 rounded-full" />
                                    <div class="flex flex-col gap-1.5">
                                        <div
                                            class="card flex flex-col gap-2.5 rounded-bl-none bg-gray-100 p-3 shadow-none"
                                        >
                                            <p class="text-2sm font-medium text-gray-700">
                                                I have looked over the rollout plan, and everything seems spot on. I am
                                                ready on my end and can not wait for the user feedback.
                                            </p>
                                        </div>
                                        <span class="text-2xs font-medium text-gray-500">15:09</span>
                                    </div>
                                </div>
                                <div class="flex items-end justify-end gap-3.5 px-5">
                                    <div class="flex flex-col gap-1.5">
                                        <div
                                            class="card flex flex-col gap-2.5 rounded-br-none bg-primary p-3 shadow-none"
                                        >
                                            <p class="text-2sm font-medium text-light">
                                                Haven't seen the build yet, I'll look now.
                                            </p>
                                        </div>
                                        <div class="relative flex items-center justify-end">
                                            <span class="me-6 text-2xs font-medium text-gray-600">15:52</span>
                                            <i class="ki-filled ki-double-check absolute text-lg text-gray-400"></i>
                                        </div>
                                    </div>
                                    <div class="relative shrink-0">
                                        <img src="assets/media/avatars/300-2.png" alt="" class="size-9 rounded-full" />
                                        <span
                                            class="badge badge-circle badge-success absolute end-0 top-7 size-[4.8px] -translate-y-1/2 transform"
                                        ></span>
                                    </div>
                                </div>
                                <div class="flex items-end justify-end gap-3.5 px-5">
                                    <div class="flex flex-col gap-1.5">
                                        <div
                                            class="card flex flex-col gap-2.5 rounded-br-none bg-primary p-3 shadow-none"
                                        >
                                            <p class="text-2sm font-medium text-light">Checking the build now</p>
                                        </div>
                                        <div class="relative flex items-center justify-end">
                                            <span class="me-6 text-2xs font-medium text-gray-600">15:52</span>
                                            <i class="ki-filled ki-double-check absolute text-lg text-gray-400"></i>
                                        </div>
                                    </div>
                                    <div class="relative shrink-0">
                                        <img src="assets/media/avatars/300-2.png" alt="" class="size-9 rounded-full" />
                                        <span
                                            class="badge badge-circle badge-success absolute end-0 top-7 size-[4.8px] -translate-y-1/2 transform"
                                        ></span>
                                    </div>
                                </div>
                                <div class="flex items-end gap-3.5 px-5">
                                    <img src="assets/media/avatars/300-4.png" alt="" class="size-9 rounded-full" />
                                    <div class="flex flex-col gap-1.5">
                                        <div
                                            class="card flex flex-col gap-2.5 rounded-bl-none bg-gray-100 p-3 shadow-none"
                                        >
                                            <p class="text-2sm font-medium text-gray-700">
                                                Tomorrow, I will send the link for the meeting
                                            </p>
                                        </div>
                                        <span class="text-2xs font-medium text-gray-500">17:40</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2.5">
                            <div id="join_request" class="mb-2.5 flex grow gap-2 bg-gray-100 p-5">
                                <div class="relative shrink-0">
                                    <img src="assets/media/avatars/300-14.png" alt="" class="size-8 rounded-full" />
                                    <span
                                        class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                    ></span>
                                </div>
                                <div class="flex grow items-center justify-between gap-3">
                                    <div class="flex flex-col">
                                        <div class="mb-px text-2sm">
                                            <a href="#" class="font-semibold text-gray-900 hover:text-primary-active">
                                                Jane Perez
                                            </a>
                                            <span class="text-gray-600">wants to join chat</span>
                                        </div>
                                        <span class="flex items-center text-2xs font-medium text-gray-500">
                                            1 day ago
                                            <span class="badge badge-circle mx-1.5 size-1 bg-gray-500"></span>
                                            Design Team
                                        </span>
                                    </div>
                                    <div class="flex gap-2.5">
                                        <button data-dismiss="#join_request" class="btn btn-light btn-xs">
                                            Decline
                                        </button>
                                        <button class="btn btn-dark btn-xs">Accept</button>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mx-5 grow">
                                <img
                                    src="assets/media/avatars/300-2.png"
                                    alt=""
                                    class="absolute start-0 top-2/4 ms-2.5 size-[30px] -translate-y-2/4 rounded-full"
                                />
                                <input
                                    type="text"
                                    value=""
                                    class="input h-auto bg-transparent py-4 ps-12"
                                    placeholder="Write a message..."
                                />
                                <div class="absolute end-3 top-1/2 flex -translate-y-1/2 items-center gap-2.5">
                                    <button class="btn btn-sm btn-icon btn-light btn-clear">
                                        <i class="ki-filled ki-exit-up"></i>
                                    </button>
                                    <a href="#" class="btn btn-dark btn-sm">Send</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-dropdown="true"
                    data-dropdown-offset="10px, 10px"
                    data-dropdown-offset-rtl="-10px, 10px"
                    data-dropdown-placement="bottom-end"
                    data-dropdown-placement-rtl="bottom-start"
                    data-dropdown-trigger="click|lg:click"
                    class="dropdown"
                >
                    <button
                        class="dropdown-toggle btn btn-icon btn-icon-lg dropdown-open:bg-primary-light dropdown-open:text-primary size-9 rounded-full text-gray-500 hover:bg-primary-light hover:text-primary"
                    >
                        <i class="ki-filled ki-element-11"></i>
                    </button>
                    <div class="dropdown-content light:border-gray-300 w-screen max-w-[320px]">
                        <div
                            class="flex items-center justify-between gap-2.5 border-b border-b-gray-200 px-5 py-3 text-2xs font-medium text-gray-600"
                        >
                            <span>Apps</span>
                            <span>Enabled</span>
                        </div>
                        <div class="scrollable-y-auto flex max-h-[400px] flex-col divide-y divide-gray-200">
                            <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                                <div class="flex flex-wrap items-center gap-2">
                                    <div
                                        class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100"
                                    >
                                        <img src="assets/media/brand-logos/jira.svg" alt="" class="size-6" />
                                    </div>
                                    <div class="flex flex-col">
                                        <a
                                            href="#"
                                            class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                        >
                                            Jira
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">Project management</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 lg:gap-5">
                                    <label class="switch switch-sm">
                                        <input type="checkbox" value="2" />
                                    </label>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                                <div class="flex flex-wrap items-center gap-2">
                                    <div
                                        class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100"
                                    >
                                        <img src="assets/media/brand-logos/inferno.svg" alt="" class="size-6" />
                                    </div>
                                    <div class="flex flex-col">
                                        <a
                                            href="#"
                                            class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                        >
                                            Inferno
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">Ensures healthcare app</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 lg:gap-5">
                                    <label class="switch switch-sm">
                                        <input type="checkbox" value="1" checked="" />
                                    </label>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                                <div class="flex flex-wrap items-center gap-2">
                                    <div
                                        class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100"
                                    >
                                        <img src="assets/media/brand-logos/evernote.svg" alt="" class="size-6" />
                                    </div>
                                    <div class="flex flex-col">
                                        <a
                                            href="#"
                                            class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                        >
                                            Evernote
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">Notes management app</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 lg:gap-5">
                                    <label class="switch switch-sm">
                                        <input type="checkbox" value="1" checked="" />
                                    </label>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                                <div class="flex flex-wrap items-center gap-2">
                                    <div
                                        class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100"
                                    >
                                        <img src="assets/media/brand-logos/gitlab.svg" alt="" class="size-6" />
                                    </div>
                                    <div class="flex flex-col">
                                        <a
                                            href="#"
                                            class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                        >
                                            Gitlab
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">DevOps platform</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 lg:gap-5">
                                    <label class="switch switch-sm">
                                        <input type="checkbox" value="2" />
                                    </label>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                                <div class="flex flex-wrap items-center gap-2">
                                    <div
                                        class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100"
                                    >
                                        <img src="assets/media/brand-logos/google-webdev.svg" alt="" class="size-6" />
                                    </div>
                                    <div class="flex flex-col">
                                        <a
                                            href="#"
                                            class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                        >
                                            Google webdev
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">Building web expierences</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 lg:gap-5">
                                    <label class="switch switch-sm">
                                        <input type="checkbox" value="1" checked="" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="grid border-t border-t-gray-200 p-5">
                            <a href="html/demo1/account/api-keys.html" class="btn btn-sm btn-light justify-center">
                                Go to Apps
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    data-dropdown="true"
                    data-dropdown-offset="70px, 10px"
                    data-dropdown-offset-rtl="-70px, 10px"
                    data-dropdown-placement="bottom-end"
                    data-dropdown-placement-rtl="bottom-start"
                    data-dropdown-trigger="click|lg:click"
                    class="dropdown"
                >
                    <button
                        class="dropdown-toggle btn btn-icon btn-icon-lg dropdown-open:bg-primary-light dropdown-open:text-primary relative size-9 cursor-pointer rounded-full text-gray-500 hover:bg-primary-light hover:text-primary"
                    >
                        <i class="ki-filled ki-notification-status"></i>
                    </button>
                    <div class="dropdown-content light:border-gray-300 w-full max-w-[460px]">
                        <div
                            id="notifications_header"
                            class="flex items-center justify-between gap-2.5 border-b border-b-gray-200 px-5 py-2.5 text-sm font-semibold text-gray-900"
                        >
                            Notifications
                            <button
                                data-dropdown-dismiss="true"
                                class="btn btn-sm btn-icon btn-light btn-clear shrink-0"
                            >
                                <i class="ki-filled ki-cross"></i>
                            </button>
                        </div>
                        <div id="notifications_tabs" data-tabs="true" class="tabs mb-2 justify-between px-5">
                            <div class="flex items-center gap-5">
                                <button data-tab-toggle="#notifications_tab_all" class="tab active">All</button>
                                <button data-tab-toggle="#notifications_tab_inbox" class="tab relative">
                                    Inbox
                                    <span
                                        class="badge badge-dot badge-success absolute end-0 top-2 size-[5px] translate-x-full translate-y-1/2 transform rtl:start-0"
                                    ></span>
                                </button>
                                <button data-tab-toggle="#notifications_tab_team" class="tab">Team</button>
                                <button data-tab-toggle="#notifications_tab_following" class="tab">Following</button>
                            </div>
                            <div data-menu="true" class="menu">
                                <div
                                    data-menu-item-offset="0, 10px"
                                    data-menu-item-placement="bottom-end"
                                    data-menu-item-placement-rtl="bottom-start"
                                    data-menu-item-toggle="dropdown"
                                    data-menu-item-trigger="click|lg:hover"
                                    class="menu-item"
                                >
                                    <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                        <i class="ki-filled ki-setting-2"></i>
                                    </button>
                                    <div
                                        data-menu-dismiss="true"
                                        class="menu-dropdown menu-default w-full max-w-[175px]"
                                    >
                                        <div class="menu-item">
                                            <a href="#" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-document"></i>
                                                </span>
                                                <span class="menu-title">View</span>
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
                                                <span class="menu-title">Export</span>
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
                                            <a href="#" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-pencil"></i>
                                                </span>
                                                <span class="menu-title">Edit</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="#" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-trash"></i>
                                                </span>
                                                <span class="menu-title">Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="notifications_tab_all" class="grow">
                            <div class="flex flex-col">
                                <div
                                    data-scrollable="true"
                                    data-scrollable-dependencies="#header"
                                    data-scrollable-max-height="auto"
                                    data-scrollable-offset="200px"
                                    class="scrollable-y-auto"
                                >
                                    <div class="divider-y divider-gray-200 flex flex-col gap-5 pb-4 pt-3">
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-4.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Joe Lincoln
                                                        </a>
                                                        <span class="text-gray-700">mentioned you in</span>
                                                        <a href="#" class="text-primary hover:text-primary-active">
                                                            Latest Trends
                                                        </a>
                                                        <span class="text-gray-700">topic</span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        18 mins ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Web Design 2024
                                                    </span>
                                                </div>
                                                <div
                                                    class="card flex flex-col gap-2.5 rounded-lg bg-light-active p-3.5 shadow-none"
                                                >
                                                    <div class="mb-px text-2sm font-semibold text-gray-600">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            @Cody
                                                        </a>
                                                        <span class="font-medium text-gray-700">
                                                            For an expert opinion, check out what Mike has to say on
                                                            this topic!
                                                        </span>
                                                    </div>
                                                    <label class="input input-sm">
                                                        <input type="text" value="" placeholder="Reply" />
                                                        <button class="btn btn-icon">
                                                            <i class="ki-filled ki-picture"></i>
                                                        </button>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-5.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Leslie Alexander
                                                        </a>
                                                        <span class="text-gray-700">added new tags to</span>
                                                        <a href="#" class="text-primary hover:text-primary-active">
                                                            Web Redesign 2024
                                                        </a>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        53 mins ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        ACME
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <span class="badge badge-sm badge-info badge-outline">
                                                        Client-Request
                                                    </span>
                                                    <span class="badge badge-sm badge-warning badge-outline">
                                                        Figma
                                                    </span>
                                                    <span class="badge badge-sm badge-light badge-outline">
                                                        Redesign
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div id="notification_request_3" class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-27.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Guy Hawkins
                                                        </a>
                                                        <span class="text-gray-700">requested access to</span>
                                                        <a href="#" class="text-primary hover:text-primary-active">
                                                            AirSpace
                                                        </a>
                                                        <span class="text-gray-700">project</span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        14 hours ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Dev Team
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button
                                                        data-dismiss="#notification_request_3"
                                                        class="btn btn-light btn-sm"
                                                    >
                                                        Decline
                                                    </button>
                                                    <button
                                                        data-dismiss="#notification_request_3"
                                                        class="btn btn-dark btn-sm"
                                                    >
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-1.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Jane Perez
                                                        </a>
                                                        <span class="text-gray-700">invites you to review a file.</span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        3 hours ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        742kb
                                                    </span>
                                                </div>
                                                <div
                                                    class="card flex flex-row items-center gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none"
                                                >
                                                    <img src="assets/media/file-types/pdf.svg" class="h-5" />
                                                    <a
                                                        href="#"
                                                        class="me-1 text-xs font-medium text-gray-700 hover:text-primary-active"
                                                    >
                                                        Launch_nov24.pptx
                                                    </a>
                                                    <span class="text-2xs font-medium text-gray-500">
                                                        Edited 39 mins ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-11.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="mb-px text-2sm font-medium">
                                                    <a
                                                        href="#"
                                                        class="font-semibold text-gray-900 hover:text-primary-active"
                                                    >
                                                        Raymond Pawell
                                                    </a>
                                                    <span class="text-gray-700">posted a new article</span>
                                                    <a href="#" class="text-primary hover:text-primary-active">
                                                        2024 Roadmap
                                                    </a>
                                                </div>
                                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                                    1 hour ago
                                                    <span class="badge badge-circle mx-1.5 size-1 bg-gray-500"></span>
                                                    Roadmap
                                                </span>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-14.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Tyler Hero
                                                        </a>
                                                        <span class="text-gray-700">
                                                            wants to view your design project
                                                        </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        3 day ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Metronic Launcher mockups
                                                    </span>
                                                </div>
                                                <div
                                                    class="card flex flex-row items-center gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none"
                                                >
                                                    <div
                                                        class="flex h-[30px] w-[26px] shrink-0 items-center justify-center rounded border border-gray-200 bg-light"
                                                    >
                                                        <img src="assets/media/file-types/figma.svg" class="h-5" />
                                                    </div>
                                                    <a
                                                        href="#"
                                                        class="me-1 text-xs font-medium text-gray-700 hover:text-primary-active"
                                                    >
                                                        Launcher-UIkit.fig
                                                    </a>
                                                    <span class="text-2xs font-medium text-gray-500">
                                                        Edited 2 mins ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-b-gray-200"></div>
                                <div id="notifications_all_footer" class="grid grid-cols-2 gap-2.5 p-5">
                                    <button class="btn btn-sm btn-light justify-center">Archive all</button>
                                    <button class="btn btn-sm btn-light justify-center">Mark all as read</button>
                                </div>
                            </div>
                        </div>
                        <div id="notifications_tab_inbox" class="hidden grow">
                            <div class="flex flex-col">
                                <div
                                    data-scrollable="true"
                                    data-scrollable-dependencies="#header"
                                    data-scrollable-max-height="auto"
                                    data-scrollable-offset="200px"
                                    class="scrollable-y-auto"
                                >
                                    <div class="flex flex-col gap-5 pb-4 pt-3">
                                        <div id="notification_request_13" class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-25.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Samuel Lee
                                                        </a>
                                                        <span class="text-gray-700">requested to add user to</span>
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-primary hover:text-primary-active"
                                                        >
                                                            TechSynergy
                                                        </a>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        22 hours ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Dev Team
                                                    </span>
                                                </div>
                                                <div
                                                    class="card flex flex-row items-center justify-between gap-1.5 rounded-lg bg-light-active px-2.5 py-2 shadow-none"
                                                >
                                                    <div class="flex flex-col">
                                                        <a
                                                            href="#"
                                                            class="text-xs font-medium text-gray-900 hover:text-primary-active"
                                                        >
                                                            Ronald Richards
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="text-3xs font-medium text-gray-500 hover:text-primary-active"
                                                        >
                                                            ronald.richards@gmail.com
                                                        </a>
                                                    </div>
                                                    <a
                                                        href="#"
                                                        class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                                    >
                                                        Go to profile
                                                    </a>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button
                                                        data-dismiss="#notification_request_13"
                                                        class="btn btn-light btn-sm"
                                                    >
                                                        Decline
                                                    </button>
                                                    <button
                                                        data-dismiss="#notification_request_13"
                                                        class="btn btn-dark btn-sm"
                                                    >
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow items-center gap-2.5 px-5">
                                            <div
                                                class="flex size-8 items-center justify-center rounded-full border border-success-clarity bg-success-light"
                                            >
                                                <i class="ki-filled ki-check text-lg text-success"></i>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <span class="text-2sm font-medium text-gray-700">
                                                    You have succesfully verified your account
                                                </span>
                                                <span class="text-2xs font-medium text-gray-500">2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-34.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Ava Peterson
                                                        </a>
                                                        <span class="text-gray-700">uploaded attachment</span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        3 days ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        ACME
                                                    </span>
                                                </div>
                                                <div
                                                    class="card flex flex-row items-center justify-between gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none"
                                                >
                                                    <div class="flex items-center gap-1.5">
                                                        <img src="assets/media/file-types/xls.svg" class="h-6" />
                                                        <div class="flex flex-col gap-0.5">
                                                            <a
                                                                href="#"
                                                                class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                                            >
                                                                Redesign-2024.xls
                                                            </a>
                                                            <span class="text-2xs font-medium text-gray-500">
                                                                2.6 MB
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon btn-xs btn-clear btn-light">
                                                        <svg
                                                            fill="none"
                                                            height="14"
                                                            viewbox="0 0 14 14"
                                                            width="14"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                clip-rule="evenodd"
                                                                d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
                                                                fill="#99A1B7"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                            <path
                                                                clip-rule="evenodd"
                                                                d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
                                                                fill="#99A1B7"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                            <path
                                                                clip-rule="evenodd"
                                                                d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
                                                                fill="#99A1B7"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-29.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-3">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Ethan Parker
                                                        </a>
                                                        <span class="text-gray-700">created a new tasks to</span>
                                                        <a href="#" class="text-primary hover:text-primary-active">
                                                            Site Sculpt
                                                        </a>
                                                        <span class="text-gray-700">project</span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        3 days ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Web Designer
                                                    </span>
                                                </div>
                                                <div class="card gap-3.5 rounded-lg bg-light-active p-3.5 shadow-none">
                                                    <div class="flex flex-wrap items-center justify-between gap-2.5">
                                                        <div class="flex flex-col gap-1">
                                                            <span class="text-xs font-medium text-gray-900">
                                                                Location history is erased after Logging In
                                                            </span>
                                                            <span class="text-3xs font-medium text-gray-500">
                                                                Due Date: 15 May, 2024
                                                            </span>
                                                        </div>
                                                        <div class="flex -space-x-2">
                                                            <div class="flex">
                                                                <img
                                                                    src="assets/media/avatars/300-3.png"
                                                                    class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                                                />
                                                            </div>
                                                            <div class="flex">
                                                                <img
                                                                    src="assets/media/avatars/300-2.png"
                                                                    class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-2.5">
                                                        <span class="badge badge-sm badge-success badge-outline">
                                                            Improvement
                                                        </span>
                                                        <span class="badge badge-sm badge-danger badge-outline">
                                                            Bug
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div id="notification_request_3" class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-30.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Benjamin Harris
                                                        </a>
                                                        <span class="text-gray-700">requested to upgrade plan</span>
                                                        <a href="#" class="text-primary hover:text-primary-active"></a>
                                                        <span class="text-gray-700"></span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        4 days ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Marketing
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button
                                                        data-dismiss="#notification_request_3"
                                                        class="btn btn-light btn-sm"
                                                    >
                                                        Decline
                                                    </button>
                                                    <button
                                                        data-dismiss="#notification_request_3"
                                                        class="btn btn-dark btn-sm"
                                                    >
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-24.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="mb-px text-2sm font-medium">
                                                    <a
                                                        href="#"
                                                        class="font-semibold text-gray-900 hover:text-primary-active"
                                                    >
                                                        Isaac Morgan
                                                    </a>
                                                    <span class="text-gray-700">mentioned you in</span>
                                                    <a href="#" class="text-primary hover:text-primary-active">
                                                        Data Transmission
                                                    </a>
                                                    topic
                                                </div>
                                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                                    6 days ago
                                                    <span class="badge badge-circle mx-1.5 size-1 bg-gray-500"></span>
                                                    Dev Team
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-b-gray-200"></div>
                                <div id="notifications_inbox_footer" class="grid grid-cols-2 gap-2.5 p-5">
                                    <button class="btn btn-sm btn-light justify-center">Archive all</button>
                                    <button class="btn btn-sm btn-light justify-center">Mark all as read</button>
                                </div>
                            </div>
                        </div>
                        <div id="notifications_tab_team" class="hidden grow">
                            <div class="flex flex-col">
                                <div
                                    data-scrollable="true"
                                    data-scrollable-dependencies="#header"
                                    data-scrollable-max-height="auto"
                                    data-scrollable-offset="200px"
                                    class="scrollable-y-auto"
                                >
                                    <div class="flex flex-col gap-5 pb-4 pt-3">
                                        <div class="flex grow gap-2 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-15.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div id="notification_request_10" class="flex grow flex-col gap-3">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Nova Hawthorne
                                                        </a>
                                                        <span class="text-gray-700">sent you an meeting invation</span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        2 days ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Dev Team
                                                    </span>
                                                </div>
                                                <div class="card rounded-lg bg-light-active p-2.5 shadow-none">
                                                    <div class="flex flex-wrap items-center justify-between gap-2.5">
                                                        <div class="flex items-center gap-2.5">
                                                            <div class="rounded-lg border border-brand-clarity">
                                                                <div
                                                                    class="flex items-center justify-center rounded-t-lg border-b border-b-brand-clarity bg-brand-light"
                                                                >
                                                                    <span class="fw-medium p-1.5 text-3xs text-brand">
                                                                        Apr
                                                                    </span>
                                                                </div>
                                                                <div class="flex size-9 items-center justify-center">
                                                                    <span
                                                                        class="fw-semibold text-md tracking-tight text-gray-900"
                                                                    >
                                                                        12
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-col gap-1.5">
                                                                <a
                                                                    href="#"
                                                                    class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                                                >
                                                                    Peparation For Release
                                                                </a>
                                                                <span class="text-2xs font-medium text-gray-600">
                                                                    9:00 PM - 10:00 PM
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="flex -space-x-2">
                                                            <div class="flex">
                                                                <img
                                                                    src="assets/media/avatars/300-4.png"
                                                                    class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                                                />
                                                            </div>
                                                            <div class="flex">
                                                                <img
                                                                    src="assets/media/avatars/300-1.png"
                                                                    class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                                                />
                                                            </div>
                                                            <div class="flex">
                                                                <img
                                                                    src="assets/media/avatars/300-2.png"
                                                                    class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                                                />
                                                            </div>
                                                            <div class="flex">
                                                                <span
                                                                    class="relative inline-flex size-6 shrink-0 items-center justify-center rounded-full bg-success text-3xs font-semibold leading-none text-success-inverse ring-1 ring-success-light hover:z-5"
                                                                >
                                                                    +3
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button
                                                        data-dismiss="#notification_request_10"
                                                        class="btn btn-light btn-sm"
                                                    >
                                                        Decline
                                                    </button>
                                                    <button
                                                        data-dismiss="#notification_request_10"
                                                        class="btn btn-dark btn-sm"
                                                    >
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-6.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="mb-px text-2sm font-medium">
                                                    <a
                                                        href="#"
                                                        class="font-semibold text-gray-900 hover:text-primary-active"
                                                    >
                                                        Adrian Vale
                                                    </a>
                                                    <span class="text-gray-700">change the due date of</span>
                                                    <a href="#" class="text-primary hover:text-primary-active">
                                                        Marketing
                                                    </a>
                                                    to 13 May
                                                </div>
                                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                                    2 days ago
                                                    <span class="badge badge-circle mx-1.5 size-1 bg-gray-500"></span>
                                                    Marketing
                                                </span>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-12.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Skylar Frost
                                                        </a>
                                                        <span class="text-gray-700">uploaded 2 attachments</span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        3 days ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Web Design
                                                    </span>
                                                </div>
                                                <div
                                                    class="card flex flex-row items-center justify-between gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none"
                                                >
                                                    <div class="flex items-center gap-1.5">
                                                        <img src="assets/media/file-types/word.svg" class="h-6" />
                                                        <div class="flex flex-col gap-0.5">
                                                            <a
                                                                href="#"
                                                                class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                                            >
                                                                Landing-page.docx
                                                            </a>
                                                            <span class="text-2xs font-medium text-gray-500">
                                                                1.9 MB
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon btn-xs btn-clear btn-light">
                                                        <svg
                                                            fill="none"
                                                            height="14"
                                                            viewbox="0 0 14 14"
                                                            width="14"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                clip-rule="evenodd"
                                                                d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
                                                                fill="#99A1B7"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                            <path
                                                                clip-rule="evenodd"
                                                                d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
                                                                fill="#99A1B7"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                            <path
                                                                clip-rule="evenodd"
                                                                d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
                                                                fill="#99A1B7"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div
                                                    class="card flex flex-row items-center justify-between gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none"
                                                >
                                                    <div class="flex items-center gap-1.5">
                                                        <img src="assets/media/file-types/svg.svg" class="h-6" />
                                                        <div class="flex flex-col gap-0.5">
                                                            <a
                                                                href="#"
                                                                class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                                            >
                                                                New-icon.svg
                                                            </a>
                                                            <span class="text-2xs font-medium text-gray-500">
                                                                2.3 MB
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon btn-xs btn-clear btn-light">
                                                        <svg
                                                            fill="none"
                                                            height="14"
                                                            viewbox="0 0 14 14"
                                                            width="14"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                clip-rule="evenodd"
                                                                d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
                                                                fill="#99A1B7"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                            <path
                                                                clip-rule="evenodd"
                                                                d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
                                                                fill="#99A1B7"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                            <path
                                                                clip-rule="evenodd"
                                                                d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
                                                                fill="#99A1B7"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-21.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Selene Silverleaf
                                                        </a>
                                                        <span class="text-gray-700">commented on</span>
                                                        <a href="#" class="text-primary hover:text-primary-active">
                                                            SiteSculpt
                                                        </a>
                                                        <span class="text-gray-700"></span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        4 days ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Manager
                                                    </span>
                                                </div>
                                                <div
                                                    class="card flex flex-col gap-2.5 rounded-lg bg-light-active p-3.5 shadow-none"
                                                >
                                                    <div class="mb-px text-2sm font-semibold text-gray-600">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            @Cody
                                                        </a>
                                                        <span class="font-medium text-gray-700">
                                                            This design is simply stunning! From layout to color, it's a
                                                            work of art!
                                                        </span>
                                                    </div>
                                                    <label class="input input-sm">
                                                        <input type="text" value="" placeholder="Reply" />
                                                        <button class="btn btn-icon">
                                                            <i class="ki-filled ki-picture"></i>
                                                        </button>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div id="notification_request_3" class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-13.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Thalia Fox
                                                        </a>
                                                        <span class="text-gray-700">has invited you to join</span>
                                                        <a href="#" class="text-primary hover:text-primary-active">
                                                            Design Research
                                                        </a>
                                                        <span class="text-gray-700"></span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        4 days ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Dev Team
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button
                                                        data-dismiss="#notification_request_3"
                                                        class="btn btn-light btn-sm"
                                                    >
                                                        Decline
                                                    </button>
                                                    <button
                                                        data-dismiss="#notification_request_3"
                                                        class="btn btn-dark btn-sm"
                                                    >
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-b-gray-200"></div>
                                <div id="notifications_team_footer" class="grid grid-cols-2 gap-2.5 p-5">
                                    <button class="btn btn-sm btn-light justify-center">Archive all</button>
                                    <button class="btn btn-sm btn-light justify-center">Mark all as read</button>
                                </div>
                            </div>
                        </div>
                        <div id="notifications_tab_following" class="hidden grow">
                            <div class="flex flex-col">
                                <div
                                    data-scrollable="true"
                                    data-scrollable-dependencies="#header"
                                    data-scrollable-max-height="auto"
                                    data-scrollable-offset="200px"
                                    class="scrollable-y-auto"
                                >
                                    <div class="flex flex-col gap-5 pb-4 pt-3">
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-1.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-2.5">
                                                <div class="mb-1 flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Jane Perez
                                                        </a>
                                                        <span class="text-gray-700">added 2 new works to</span>
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-primary hover:text-primary-active"
                                                        >
                                                            Inspirations 2024
                                                        </a>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        23 hours ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Craftwork Design
                                                    </span>
                                                </div>
                                                <div class="flex items-center gap-2.5">
                                                    <div
                                                        class="card flex w-40 flex-col gap-3.5 bg-light-active shadow-none"
                                                    >
                                                        <div
                                                            class="card-rounded-t h-24 shrink-0 bg-cover bg-no-repeat"
                                                            style="
                                                                background-image: url('assets/media/images/600x600/6.jpg');
                                                            "
                                                        ></div>
                                                        <div class="px-2.5 pb-2">
                                                            <a
                                                                href="#"
                                                                class="mb-0.5 block text-xs font-medium leading-4 text-gray-700 hover:text-primary"
                                                            >
                                                                Geometric Patterns
                                                            </a>
                                                            <div class="text-2xs font-medium text-gray-500">
                                                                Token ID:
                                                                <span class="text-2xs font-medium text-gray-700">
                                                                    81023
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="card flex w-40 flex-col gap-3.5 bg-light-active shadow-none"
                                                    >
                                                        <div
                                                            class="card-rounded-t h-24 shrink-0 bg-cover bg-no-repeat"
                                                            style="
                                                                background-image: url('assets/media/images/600x600/1.jpg');
                                                            "
                                                        ></div>
                                                        <div class="px-2.5 pb-2">
                                                            <a
                                                                href="#"
                                                                class="mb-0.5 block text-xs font-medium leading-4 text-gray-700 hover:text-primary"
                                                            >
                                                                Artistic Expressions
                                                            </a>
                                                            <div class="text-2xs font-medium text-gray-500">
                                                                Token ID:
                                                                <span class="text-2xs font-medium text-gray-700">
                                                                    67890
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div id="notification_request_17" class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-19.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-2.5">
                                                <div class="mb-1 flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Natalie Wood
                                                        </a>
                                                        <span class="text-gray-700">
                                                            wants to edit marketing project
                                                        </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        1 day ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Designer
                                                    </span>
                                                </div>
                                                <div
                                                    class="card flex flex-row items-center gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none"
                                                >
                                                    <div
                                                        class="flex h-[30px] w-[26px] shrink-0 items-center justify-center rounded border border-gray-200 bg-white"
                                                    >
                                                        <img src="assets/media/brand-logos/jira.svg" class="h-5" />
                                                    </div>
                                                    <a
                                                        href="#"
                                                        class="me-1 text-xs font-medium text-gray-700 hover:text-primary-active"
                                                    >
                                                        User-feedback.jira
                                                    </a>
                                                    <span class="text-2xs font-medium text-gray-500">
                                                        Edited 1 hour ago
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button
                                                        data-dismiss="#notification_request_17"
                                                        class="btn btn-light btn-sm"
                                                    >
                                                        Decline
                                                    </button>
                                                    <button
                                                        data-dismiss="#notification_request_17"
                                                        class="btn btn-dark btn-sm"
                                                    >
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-17.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-2.5">
                                                <div class="mb-1 flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Aaron Foster
                                                        </a>
                                                        <span class="text-gray-700">requested to view</span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        3 day ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Larsen Ltd
                                                    </span>
                                                </div>
                                                <div
                                                    class="card flex flex-row items-center gap-1.5 rounded-lg bg-light-active px-2.5 py-1.5 shadow-none"
                                                >
                                                    <i class="ki-filled ki-user-tick text-base text-success"></i>
                                                    <span class="text-2sm font-medium text-success">
                                                        You allowed Aaron to view
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-34.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="mb-px text-2sm font-medium">
                                                    <a
                                                        href="#"
                                                        class="font-semibold text-gray-900 hover:text-primary-active"
                                                    >
                                                        Chloe Morgan
                                                    </a>
                                                    <span class="text-gray-700">posted a new article</span>
                                                    <a href="#" class="text-primary hover:text-primary-active">
                                                        User Experience
                                                    </a>
                                                </div>
                                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                                    1 day ago
                                                    <span class="badge badge-circle mx-1.5 size-1 bg-gray-500"></span>
                                                    Nexus
                                                </span>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-9.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex grow flex-col gap-2.5">
                                                <div class="mb-1 flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Gabriel Bennett
                                                        </a>
                                                        <span class="text-gray-700">started connect you</span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        3 day ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Development
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-sm btn-light">
                                                        <i class="ki-filled ki-check-circle"></i>
                                                        Connected
                                                    </button>
                                                    <button class="btn btn-dark btn-sm">Go to profile</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200"></div>
                                        <div id="notification_request_3" class="flex grow gap-2.5 px-5">
                                            <div class="relative mt-0.5 shrink-0">
                                                <img
                                                    src="assets/media/avatars/300-13.png"
                                                    alt=""
                                                    class="size-8 rounded-full"
                                                />
                                                <span
                                                    class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light"
                                                ></span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="mb-px text-2sm font-medium">
                                                        <a
                                                            href="#"
                                                            class="font-semibold text-gray-900 hover:text-primary-active"
                                                        >
                                                            Thalia Fox
                                                        </a>
                                                        <span class="text-gray-700">has invited you to join</span>
                                                        <a href="#" class="text-primary hover:text-primary-active">
                                                            Design Research
                                                        </a>
                                                        <span class="text-gray-700"></span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        4 days ago
                                                        <span
                                                            class="badge badge-circle mx-1.5 size-1 bg-gray-500"
                                                        ></span>
                                                        Dev Team
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button
                                                        data-dismiss="#notification_request_3"
                                                        class="btn btn-light btn-sm"
                                                    >
                                                        Decline
                                                    </button>
                                                    <button
                                                        data-dismiss="#notification_request_3"
                                                        class="btn btn-dark btn-sm"
                                                    >
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-b-gray-200"></div>
                                <div id="notifications_following_footer" class="grid grid-cols-2 gap-2.5 p-5">
                                    <button class="btn btn-sm btn-light justify-center">Archive all</button>
                                    <button class="btn btn-sm btn-light justify-center">Mark all as read</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-menu="true" class="menu">
                    <div
                        data-menu-item-offset="20px, 10px"
                        data-menu-item-offset-rtl="-20px, 10px"
                        data-menu-item-placement="bottom-end"
                        data-menu-item-placement-rtl="bottom-start"
                        data-menu-item-toggle="dropdown"
                        data-menu-item-trigger="click|lg:click"
                        class="menu-item"
                    >
                        <div class="menu-toggle btn btn-icon rounded-full">
                            <img
                                src="assets/media/avatars/300-2.png"
                                alt=""
                                class="size-9 shrink-0 rounded-full border-2 border-success"
                            />
                        </div>
                        <div class="menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]">
                            <div class="flex items-center justify-between gap-1.5 px-5 py-1.5">
                                <div class="flex items-center gap-2">
                                    <img
                                        src="assets/media/avatars/300-2.png"
                                        alt=""
                                        class="size-9 rounded-full border-2 border-success"
                                    />
                                    <div class="flex flex-col gap-1.5">
                                        <span class="text-sm font-semibold leading-none text-gray-800">
                                            Cody Fisher
                                        </span>
                                        <a
                                            href="html/demo1/account/home/get-started.html"
                                            class="text-xs font-medium leading-none text-gray-600 hover:text-primary"
                                        >
                                            c.fisher@gmail.com
                                        </a>
                                    </div>
                                </div>
                                <span class="badge badge-xs badge-primary badge-outline">Pro</span>
                            </div>
                            <div class="menu-separator"></div>
                            <div class="flex flex-col">
                                <div class="menu-item">
                                    <a href="html/demo1/public-profile/profiles/default.html" class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-badge"></i>
                                        </span>
                                        <span class="menu-title">Public Profile</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="html/demo1/account/home/user-profile.html" class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-profile-circle"></i>
                                        </span>
                                        <span class="menu-title">My Profile</span>
                                    </a>
                                </div>
                                <div
                                    data-menu-item-offset="-50px, 0"
                                    data-menu-item-placement="left-start"
                                    data-menu-item-placement-rtl="right-start"
                                    data-menu-item-toggle="dropdown"
                                    data-menu-item-trigger="click|lg:hover"
                                    class="menu-item"
                                >
                                    <div class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-setting-2"></i>
                                        </span>
                                        <span class="menu-title">My Account</span>
                                        <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs rtl:rotate-180 rtl:transform"></i>
                                        </span>
                                    </div>
                                    <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[220px]">
                                        <div class="menu-item">
                                            <a href="html/demo1/account/home/get-started.html" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-coffee"></i>
                                                </span>
                                                <span class="menu-title">Get Started</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="html/demo1/account/home/user-profile.html" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-some-files"></i>
                                                </span>
                                                <span class="menu-title">My Profile</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="#" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-icon"></i>
                                                </span>
                                                <span class="menu-title">Billing</span>
                                                <span
                                                    data-tooltip="true"
                                                    data-tooltip-placement="top"
                                                    class="menu-badge"
                                                >
                                                    <i class="ki-filled ki-information-2 text-md text-gray-500"></i>
                                                    <span data-tooltip-content="true" class="tooltip">
                                                        Payment and subscription info
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="html/demo1/account/security/overview.html" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-medal-star"></i>
                                                </span>
                                                <span class="menu-title">Security</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="html/demo1/account/members/teams.html" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-setting"></i>
                                                </span>
                                                <span class="menu-title">Members & Roles</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="html/demo1/account/integrations.html" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-switch"></i>
                                                </span>
                                                <span class="menu-title">Integrations</span>
                                            </a>
                                        </div>
                                        <div class="menu-separator"></div>
                                        <div class="menu-item">
                                            <a href="html/demo1/account/security/overview.html" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-shield-tick"></i>
                                                </span>
                                                <span class="menu-title">Notifications</span>
                                                <label class="switch switch-sm">
                                                    <input type="checkbox" value="1" checked="" name="check" />
                                                    <input type="checkbox" value="1" checked="" name="check" />
                                                </label>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a href="https://devs.keenthemes.com" class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-message-programming"></i>
                                        </span>
                                        <span class="menu-title">Dev Forum</span>
                                    </a>
                                </div>
                                <div
                                    data-menu-item-offset="-10px, 0"
                                    data-menu-item-placement="left-start"
                                    data-menu-item-toggle="dropdown"
                                    data-menu-item-trigger="click|lg:hover"
                                    class="menu-item"
                                >
                                    <div class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-icon"></i>
                                        </span>
                                        <span class="menu-title">Language</span>
                                        <div
                                            class="flex shrink-0 items-center gap-1.5 rounded-md border border-gray-300 p-1.5 text-2xs font-medium text-gray-600"
                                        >
                                            English
                                            <img
                                                src="assets/media/flags/united-states.svg"
                                                alt=""
                                                class="inline-block size-3.5 rounded-full"
                                            />
                                        </div>
                                    </div>
                                    <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[170px]">
                                        <div class="menu-item active">
                                            <a href="?dir=ltr" class="menu-link h-10">
                                                <span class="menu-icon">
                                                    <img
                                                        src="assets/media/flags/united-states.svg"
                                                        alt=""
                                                        class="inline-block size-4 rounded-full"
                                                    />
                                                </span>
                                                <span class="menu-title">English</span>
                                                <span class="menu-badge">
                                                    <i class="ki-solid ki-check-circle text-base text-success"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="?dir=rtl" class="menu-link h-10">
                                                <span class="menu-icon">
                                                    <img
                                                        src="assets/media/flags/saudi-arabia.svg"
                                                        alt=""
                                                        class="inline-block size-4 rounded-full"
                                                    />
                                                </span>
                                                <span class="menu-title">Arabic(Saudi)</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="?dir=ltr" class="menu-link h-10">
                                                <span class="menu-icon">
                                                    <img
                                                        src="assets/media/flags/spain.svg"
                                                        alt=""
                                                        class="inline-block size-4 rounded-full"
                                                    />
                                                </span>
                                                <span class="menu-title">Spanish</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="?dir=ltr" class="menu-link h-10">
                                                <span class="menu-icon">
                                                    <img
                                                        src="assets/media/flags/germany.svg"
                                                        alt=""
                                                        class="inline-block size-4 rounded-full"
                                                    />
                                                </span>
                                                <span class="menu-title">German</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="?dir=ltr" class="menu-link h-10">
                                                <span class="menu-icon">
                                                    <img
                                                        src="assets/media/flags/japan.svg"
                                                        alt=""
                                                        class="inline-block size-4 rounded-full"
                                                    />
                                                </span>
                                                <span class="menu-title">Japanese</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-separator"></div>
                            <div class="flex flex-col">
                                <div class="menu-item mb-0.5">
                                    <div class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-moon"></i>
                                        </span>
                                        <span class="menu-title">Dark Mode</span>
                                        <label class="switch switch-sm">
                                            <input type="checkbox" :checked="isDark" @change="toggleDark()" />
                                        </label>
                                    </div>
                                </div>
                                <div class="menu-item px-4 py-1.5">
                                    <Link
                                        :href="route('logout')"
                                        method="post"
                                        as="button"
                                        type="button"
                                        class="btn btn-sm btn-light justify-center"
                                    >
                                        Log out
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Topbar -->
        </div>
        <!-- End of Container -->
    </header>
</template>

