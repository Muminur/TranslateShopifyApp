@extends('layouts.master')

@section('title', 'Dashboard')

@section('contents')
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Translator APP</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                Check the Setup page to enable or disable translation feature.
            </p>

        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://biglanguage.com/wp-content/uploads/2021/11/man-working-on-a-laptop-with-the-word-translate-on-J3A7WLH-1-scaled.jpg" alt="mockup">
        </div>
    </div>
</section>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection
