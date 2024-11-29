<x-webpage.layout>
    <div class="flex min-h-full">
        <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img class="h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    <h2 class="mt-8 text-2xl/9 font-bold tracking-tight text-gray-900">Log in</h2>
                    <p class="mt-2 text-sm/6 text-gray-500">
                        You do not have an account?
                        <a href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign Up</a>
                    </p>
                </div>

                {{--       FORM         --}}
                <div class="mt-10">
                    <div>
                        <form action="/login" method="POST" class="space-y-6">
                            @csrf

                            <div>
                                <x-webpage.form-label for="email">Email</x-webpage.form-label>
                                <x-webpage.form-input id="email" name="email" type="email" autocomplete="email" required />
                                <x-webpage.form-error name="email" />
                            </div>
                            <div>
                                <x-webpage.form-label>Password</x-webpage.form-label>
                                <x-webpage.form-input id="password" name="password" type="password" autocomplete="current-password" required />
                                <x-webpage.form-error name="password" />
                            </div>

                            <div class="flex items-center justify-center w-full">
                                <div class="text-sm/6">
                                    <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                                </div>
                            </div>

                            <div>
                                <x-webpage.form-button>Log in</x-webpage.form-button>
                            </div>
                        </form>
                    </div>
                </div>

                @if($errors->any())
                    <div class="rounded-md bg-red-50 p-4 mt-4">
                        <div class="flex">
                            <div class="shrink-0">
                                <svg class="size-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">There were {{count($errors)}}  {{ Str::plural('error', count($errors)) }} with your submission</h3>
                                <div class="mt-2 text-sm text-red-700">
                                    <ul role="list" class="list-disc space-y-1 pl-5">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="relative hidden w-0 flex-1 lg:block">
            <img class="absolute inset-0 size-full object-cover" src="https://images.unsplash.com/photo-1496917756835-20cb06e75b4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="">
        </div>
    </div>
</x-webpage.layout>
