<x-guest-layout class="relative bg-gradient-to-bl from-blue-100 via-transparent dark:from-blue-950 dark:via-transparent">
  <x-slot:title>
    Register
  </x-slot>

  <div class="flex max-w-[85rem] px-4 sm:px-6 lg:px-8  mx-auto">
    <!-- Grid -->
    <div class="grid items-center gap-8 md:grid-cols-2 lg:gap-12">
      <div class="py-10 lg:py-32">
        <p
          class="inline-block text-sm font-medium text-transparent bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 dark:from-blue-400 dark:to-violet-400">
          Dhiya Az Zahra: A vision for 2024
        </p>

        <!-- Title -->
        <div class="max-w-2xl mt-4 md:mb-12">
          <h1 class="mb-4 text-4xl font-semibold text-gray-800 lg:text-5xl dark:text-gray-200">
            Monitor Umrah using GPS to ensure the safety of pilgrims
          </h1>
          <p class="text-gray-600 dark:text-gray-400">
            By integrating advanced technology, we aim to enhance the overall experience and safety of pilgrims during
            Umrah.
          </p>
        </div>
        <!-- End Title -->

        <!-- Blockquote -->
        <blockquote class="relative hidden max-w-sm md:block">
          <svg
            class="absolute top-0 text-gray-200 transform -translate-x-6 -translate-y-8 start-0 size-16 dark:text-gray-800"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path
              d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z"
              fill="currentColor" />
          </svg>

          <div class="relative z-10">
            <p class="text-xl italic text-gray-800 dark:text-white">
              Amazing people to travel with. Very efficient and professional agent.
            </p>
          </div>

          <footer class="mt-3">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="rounded-full size-8"
                  src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                  alt="Image Description">
              </div>
              <div class="grow ms-4">
                <div class="font-semibold text-gray-800 dark:text-gray-200">Adib Nawfal</div>
                <div class="text-xs text-gray-500">Student University Tun Hussein Onn</div>
              </div>
            </div>
          </footer>
        </blockquote>
        <!-- End Blockquote -->
      </div>
      <!-- End Col -->

      <div class="py-8">
        <!-- Form -->
        <form method="post" action="{{ route('register') }}">
          @csrf

          <div class="lg:max-w-lg lg:mx-auto lg:me-0 ms-auto">
            <!-- Card -->
            <div class="flex flex-col p-4 bg-white shadow-lg sm:p-7 rounded-2xl dark:bg-slate-900">
              <div class="text-center">
                <h1 class="block text-3xl font-bold text-gray-800 dark:text-white">Get's Started</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                  Already have an account?
                  <a class="font-medium text-[#c31e39] decoration-2 hover:underline dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="{{ route('login') }}">
                    Login
                  </a>
                </p>
              </div>

              @php
                if (!isset($firstName)) {
                    $firstName = null;
                }
                if (!isset($lastName)) {
                    $lastName = null;
                }
                if (!isset($email)) {
                    $email = null;
                }
              @endphp
              <div class="mt-5">
                <div class="grid gap-y-4">
                  <div class="grid grid-cols-2 gap-x-4">
                    <!-- First Name -->
                    <div>
                      <label for="first_name" class="block mb-2 text-sm dark:text-white">First Name</label>
                      <input type="text" id="first_name" name="first_name" placeholder="Enter your first name"
                        class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        autocomplete="first-name" value="{{ old('first_name', $firstName) }}" autofocus>
                      <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>
                    <!-- End First Name -->

                    <!-- Last Name -->
                    <div>
                      <label for="last_name" class="block mb-2 text-sm dark:text-white">Last Name</label>
                      <input type="text" id="last_name" name="last_name" placeholder="Enter your last name"
                        class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        autocomplete="last-name" value="{{ old('last_name', $lastName) }}">
                      <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>
                    <!-- End Last Name -->
                  </div>

                  <!-- Email Address -->
                  <div>
                    <label for="email" class="block mb-2 text-sm dark:text-white">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address"
                      class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      autocomplete="email" value="{{ old('email', $email) }}">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <!-- End Email Address -->

                  <!-- Password -->
                  <div>
                    <label for="password" class="block mb-2 text-sm dark:text-white">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password"
                      class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>
                  <!-- End Password -->

                  <!-- Confirm Password -->
                  <div>
                    <label for="password_confirmation" class="block mb-2 text-sm dark:text-white">Confirm
                      Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                      class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      placeholder="Re-type your password" autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  </div>
                  <!-- End Confirm Password -->

                  <!-- Captcha -->
                  <div>
                    <label for="captcha" class="block mb-2 text-sm dark:text-white">Captcha</label>
                    <div class="flex items-center mb-2 gap-x-2">
                      <div class="captcha">
                        <span>{!! captcha_img() !!}</span>
                      </div>
                      <button type="button" class="reload" id="reload">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-cw">
                          <path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8" />
                          <path d="M21 3v5h-5" />
                        </svg>
                      </button>
                    </div>
                    <input type="text" id="captcha" name="captcha" placeholder="Enter captcha"
                      class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    @error('captcha')
                      <p class="mt-2 space-y-1 text-sm text-red-600">The captcha is invalid.</p>
                    @enderror
                  </div>
                  <!-- End Captcha -->

                  <!-- Checkbox -->
                  <div class="flex flex-col justify-center">
                    <div class="flex items-center gap-x-3">
                      <input type="checkbox" id="terms_and_conditions" name="terms_and_conditions"
                        class="shrink-0 mt-0.5 border-gray-200 rounded text-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-[#c31e39] dark:checked:border-[#c31e39] dark:focus:ring-offset-gray-800"
                        @checked(old('terms_and_conditions'))>
                      <label for="terms_and_conditions" class="text-sm dark:text-white">I accept the <a
                          class="font-medium text-[#c31e39] decoration-2 hover:underline dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                          href="#">Terms and Conditions</a></label>
                    </div>
                    <x-input-error :messages="$errors->get('terms_and_conditions')" class="mt-2" />
                  </div>
                  <!-- End Checkbox -->

                  <button type="submit"
                    class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-semibold text-white bg-[#c31e39] border border-transparent rounded-lg gap-x-2 hover:bg-[#9c182e] disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Register</button>
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>
        </form>
        <!-- End Form -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>

  <script type="text/javascript">
    $('#reload').click(function() {
      $.ajax({
        type: 'GET',
        url: 'reload-captcha',
        success: function(data) {
          $(".captcha span").html(data.captcha)
        }
      });
    });
  </script>
</x-guest-layout>

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
