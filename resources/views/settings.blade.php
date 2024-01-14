@extends('layouts.master')

@section('title', 'Steps')

@section('contents')



    <section class="bg-gray-100" id="settings">
        <div class="py-14">
            <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">

                <div class="flex-1 mt-12 sm:max-w-lg lg:max-w-md">
                    <h3>To use the translate app embed follow the below steps</h3>
                    <h4>Step 1: Enable theme app extension in the host theme. Open theme editor and you will find the app embed option from left side.</h4>
                    <h4>Step 2: Click on Translate app by Mumin to enable the app embed. </h4>
                    <h4>Step 3: Click on the down arrow key and check on the "Show translate block"</h4>
                    <h4>Click on save and Voila! Translation block will be shown on every page of your store bottom left corner.</h4>
                </div>
            </div>
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
