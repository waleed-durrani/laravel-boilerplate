<x-utils.link
    :href="route('frontend.auth.social.login', 'bitbucket')"
    class="mt-2 block text-center px-4 py-2 text-sm font-medium text-gray-800 bg-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:border-gray-700 focus:ring-gray active:bg-gray-400 active:text-white transition duration-150 ease-in-out"
    icon="fab fa-bitbucket"
    :text="__('Login with Bitbucket')"
    :hide="!config('services.bitbucket.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'facebook')"
    class="mt-2 block text-center px-4 py-2 text-sm font-medium text-gray-800 bg-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:border-gray-700 focus:ring-gray active:bg-gray-400 active:text-white transition duration-150 ease-in-out"
    icon="fab fa-facebook"
    :text="__('Login with Facebook')"
    :hide="!config('services.facebook.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'google')"
    class="mt-2 block text-center px-4 py-2 text-sm font-medium text-gray-800 bg-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:border-gray-700 focus:ring-gray active:bg-gray-400 active:text-white transition duration-150 ease-in-out"
    icon="fab fa-google"
    :text="__('Login with Google')"
    :hide="!config('services.google.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'github')"
    class="mt-2 block text-center px-4 py-2 text-sm font-medium text-gray-800 bg-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:border-gray-700 focus:ring-gray active:bg-gray-400 active:text-white transition duration-150 ease-in-out"
    icon="fab fa-github"
    :text="__('Login with Github')"
    :hide="!config('services.github.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'linkedin')"
    class="mt-2 block text-center px-4 py-2 text-sm font-medium text-gray-800 bg-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:border-gray-700 focus:ring-gray active:bg-gray-400 active:text-white transition duration-150 ease-in-out"
    icon="fab fa-linkedin"
    :text="__('Login with Linkedin')"
    :hide="!config('services.linkedin.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'twitter')"
    class="mt-2 block text-center px-4 py-2 text-sm font-medium text-gray-800 bg-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:border-gray-700 focus:ring-gray active:bg-gray-400 active:text-white transition duration-150 ease-in-out"
    icon="fab fa-twitter"
    :text="__('Login with Twitter')"
    :hide="!config('services.twitter.active')" />
