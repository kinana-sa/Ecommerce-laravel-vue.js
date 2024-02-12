<script>
import GuestLayout from '../components/GuestLayout.vue';

export default {
    name: "Login",
    components: { GuestLayout }
}
</script>

<template>
    <GuestLayout title="Sign in to your account">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <div class="flex items-center justify-between">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                </div>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required=""
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>

                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required=""
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div class="flex items-center justify-between">
                <input id="remember-me" name="remember-me" type="checkbox"
                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
                <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Remember me </label>

                <div class="text-sm justify-between element1">
                    <router-link :to="{ name: 'requestPassword' }"
                        class="font-medium text-indigo-600 hover:text-indigo-500">
                        Forgot
                        your password?
                    </router-link>
                </div>
            </div>

            <div>

                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">

                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true" />
                    </span>
                    Sign in
                </button>
            </div>
        </form>
    </GuestLayout>
</template>


<style scoped>
.element1 {
    margin-left: 20px;
}
</style>
