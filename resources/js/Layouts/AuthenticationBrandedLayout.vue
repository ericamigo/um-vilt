<script setup></script>

<style scoped>
.branded-bg {
    background-image: url('/assets/media/images/2600x1600/1.png');
}
.dark .branded-bg {
    background-image: url('/assets/media/images/2600x1600/1-dark.png');
}
</style>

<template>
    <div class="flex h-full w-full text-base text-gray-700 dark:bg-coal-500">
        <div class="grid grow lg:grid-cols-2">
            <div class="order-2 flex items-center justify-center p-8 lg:order-1 lg:p-10">
                <div class="card w-full max-w-[370px]">
                    <form method="get" id="sign_in_form" action="#" class="card-body flex flex-col gap-5 p-10">
                        <div class="mb-2.5 text-center">
                            <h3 class="mb-2.5 text-lg font-medium leading-none text-gray-900">Sign in</h3>
                            <div class="flex items-center justify-center font-medium">
                                <span class="me-1.5 text-2sm text-gray-700">Need an account?</span>
                                <a href="/dist/html/demo1/authentication/branded/sign-up.html" class="link text-2sm">
                                    Sign up
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2.5">
                            <a href="#" class="btn btn-light btn-sm justify-center">
                                <img src="/assets/media/brand-logos/google.svg" alt="" class="size-3.5 shrink-0" />
                                Use Google
                            </a>
                            <a href="#" class="btn btn-light btn-sm justify-center">
                                <img
                                    src="/assets/media/brand-logos/apple-black.svg"
                                    alt=""
                                    class="size-3.5 shrink-0 dark:hidden"
                                />
                                <img
                                    src="/assets/media/brand-logos/apple-white.svg"
                                    alt=""
                                    class="light:hidden size-3.5 shrink-0"
                                />
                                Use Apple
                            </a>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-full border-t border-gray-200"></span>
                            <span class="text-2xs font-medium uppercase text-gray-500">Or</span>
                            <span class="w-full border-t border-gray-200"></span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="form-label font-normal text-gray-900">Email</label>
                            <input type="text" value="" class="input" placeholder="email@email.com" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center justify-between gap-1">
                                <label class="form-label font-normal text-gray-900">Password</label>
                                <a
                                    href="/dist/html/demo1/authentication/branded/reset-password/enter-email.html"
                                    class="link shrink-0 text-2sm"
                                >
                                    Forgot Password?
                                </a>
                            </div>
                            <div data-toggle-password="true" class="input">
                                <input type="password" value="" name="user_password" placeholder="Enter Password" />
                                <button type="button" data-toggle-password-trigger="true" class="btn btn-icon">
                                    <i class="ki-filled ki-eye toggle-password-active:hidden text-gray-500"></i>
                                    <i
                                        class="ki-filled ki-eye-slash toggle-password-active:block hidden text-gray-500"
                                    ></i>
                                </button>
                            </div>
                        </div>
                        <label class="checkbox-group">
                            <input type="checkbox" value="1" class="checkbox checkbox-sm" name="check" />
                            <span class="checkbox-label">Remember me</span>
                        </label>
                        <button class="btn btn-primary flex grow justify-center">Sign In</button>
                    </form>
                </div>
            </div>
            <div
                class="xxl:bg-center branded-bg order-1 bg-top bg-no-repeat lg:order-2 lg:m-5 lg:rounded-xl lg:border lg:border-gray-200 xl:bg-cover"
            >
                <div class="flex flex-col gap-4 p-8 lg:p-16">
                    <a href="/dist/html/demo1/index.html">
                        <img src="/assets/media/app/mini-logo.svg" class="h-[28px] max-w-none" />
                    </a>
                    <div class="flex flex-col gap-3">
                        <h3 class="text-2xl font-semibold text-gray-900">Secure Access Portal</h3>
                        <div class="text-base font-medium text-gray-600">
                            A robust authentication gateway ensuring
                            <br />
                            secure
                            <span class="font-semibold text-gray-900">efficient user access</span>
                            to the Metronic
                            <br />
                            Dashboard interface.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
