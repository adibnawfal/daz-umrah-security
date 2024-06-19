<x-guest-layout class="relative bg-gradient-to-bl from-blue-100 via-transparent dark:from-blue-950 dark:via-transparent">
  <x-slot:title>
    Two Factor Authentication
  </x-slot>

  <div class="flex max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
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
                <div class="text-xs text-gray-500">Universiti Tun Hussein Onn Student</div>
              </div>
            </div>
          </footer>
        </blockquote>
        <!-- End Blockquote -->
      </div>
      <!-- End Col -->

      <div>
        <!-- Form -->
        <form method="POST" action="{{ route('verify.store') }}">
          @csrf

          <div class="lg:max-w-lg lg:mx-auto lg:me-0 ms-auto">
            <!-- Card -->
            <div class="flex flex-col p-4 bg-white shadow-lg sm:p-7 rounded-2xl dark:bg-slate-900">
              <div class="text-center">
                <h1 class="block text-3xl font-bold text-gray-800 dark:text-white">Welcome</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                  {{ new Illuminate\Support\HtmlString(__("Received an email with a login code? If not, <a class=\"font-medium text-[#c31e39] decoration-2 hover:underline dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600\" href=\":url\">click here</a>.", ['url' => route('verify.resend')])) }}
                </p>
              </div>

              <x-auth-session-status class="mt-5" :status="session('status')" />

              <div class="mt-5">
                <div class="grid gap-y-4">
                  <!-- Email Address -->
                  <div>
                    <label for="two_factor_code" class="block mb-2 text-sm dark:text-white">Code</label>
                    <input type="text" id="two_factor_code" name="two_factor_code"
                      placeholder="Enter two factor code"
                      class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      value="{{ old('two_factor_code') }}" autofocus>
                    <x-input-error :messages="$errors->get('two_factor_code')" class="mt-2" />
                  </div>
                  <!-- End Email Address -->

                  <button type="submit"
                    class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-semibold text-white bg-[#c31e39] border border-transparent rounded-lg gap-x-2 hover:bg-[#9c182e] disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Login</button>
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