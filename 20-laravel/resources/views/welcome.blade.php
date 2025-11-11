@extends('layouts.home')

@section('title', 'Welcome: larapets🐶')

@section('content')
<section class="bg-[#0006] rounded-lg w-96 p-8 flex flex-col gap-2 items-center justify-center">
    <p class="text-while">
        Lorem ipsum dolor totam nulla aliquid libero harum? Consequatur similique amet a, eos maiores qui!
    </p>
    <div class="flex gap-2 mt-8 text-while">
    @guest()
        <a class="btn btn-outline hover:bg-[#fff6] hover:text-white" href="{{ url('login') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M208,80H96V56a32,32,0,0,1,32-32c15.37,0,29.2,11,32.16,25.59a8,8,0,0,0,15.68-3.18C171.32,24.15,151.2,8,128,8A48.05,48.05,0,0,0,80,56V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80Zm0,128H48V96H208V208Zm-68-56a12,12,0,1,1-12-12A12,12,0,0,1,140,152Z"></path></svg>
            Login
        </a>
        <a class="btn btn-outline hover:bg-[#fff6] hover:text-white" href="{{ url('registrer') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136Zm-57.87,58.85a8,8,0,0,1-12.26,10.3C165.75,181.19,138.09,168,108,168s-57.75,13.19-77.87,37.15a8,8,0,0,1-12.25-10.3c14.94-17.78,33.52-30.41,54.17-37.17a68,68,0,1,1,71.9,0C164.6,164.44,183.18,177.07,198.13,194.85ZM108,152a52,52,0,1,0-52-52A52.06,52.06,0,0,0,108,152Z"></path></svg>
            Register

        </a>
    @endguest
    @auth()
        <a class="btn btn-outline" href="{{ url('dashboard') }}">
            Dashboard
        </a>
    @endauth
    </div>
    </section>
@endsection
