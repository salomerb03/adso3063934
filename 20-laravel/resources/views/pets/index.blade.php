@extends('layouts.dashboard')

@section('title', 'Module Pets: Larapets 🙀')

@section('content')


    <h1 class="text-4xl text-black flex gap-2 items-center justify-center pb-4 border-b-2 border-neutra-50 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
            <path
                d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
            </path>
        </svg>
        Module Pets
    </h1>

    {{-- Options --}}
    <div class="join">
        <a class="btn btn-success join-item" href="{{ url('pets/create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                <path
                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z">
                </path>
            </svg>
            <span class="hidden md:inline">
                Add Pet
            </span>
        </a>
        <a class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white join-item"
            href="{{ url('export/pets/pdf') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                <path
                    d="M224,152a8,8,0,0,1-8,8H192v16h16a8,8,0,0,1,0,16H192v16a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152ZM92,172a28,28,0,0,1-28,28H56v8a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8H64A28,28,0,0,1,92,172Zm-16,0a12,12,0,0,0-12-12H56v24h8A12,12,0,0,0,76,172Zm88,8a36,36,0,0,1-36,36H112a8,8,0,0,1-8-8V152a8,8,0,0,1,8-8h16A36,36,0,0,1,164,180Zm-16,0a20,20,0,0,0-20-20h-8v40h8A20,20,0,0,0,148,180ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,0,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.69L160,51.31Z">
                </path>
            </svg>
            <span class="hidden md:inline">
                Export
            </span>
        </a>
        <a class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white join-item"
            href="{{ url('export/pets/excel') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                <path
                    d="M156,208a8,8,0,0,1-8,8H120a8,8,0,0,1-8-8V152a8,8,0,0,1,16,0v48h20A8,8,0,0,1,156,208ZM92.65,145.49a8,8,0,0,0-11.16,1.86L68,166.24,54.51,147.35a8,8,0,1,0-13,9.3L58.17,180,41.49,203.35a8,8,0,0,0,13,9.3L68,193.76l13.49,18.89a8,8,0,0,0,13-9.3L77.83,180l16.68-23.35A8,8,0,0,0,92.65,145.49Zm98.94,25.82c-4-1.16-8.14-2.35-10.45-3.84-1.25-.82-1.23-1-1.12-1.9a4.54,4.54,0,0,1,2-3.67c4.6-3.12,15.34-1.72,19.82-.56a8,8,0,0,0,4.07-15.48c-2.11-.55-21-5.22-32.83,2.76a20.58,20.58,0,0,0-8.95,14.95c-2,15.88,13.65,20.41,23,23.11,12.06,3.49,13.12,4.92,12.78,7.59-.31,2.41-1.26,3.33-2.15,3.93-4.6,3.06-15.16,1.55-19.54.35A8,8,0,0,0,173.93,214a60.63,60.63,0,0,0,15.19,2c5.82,0,12.3-1,17.49-4.46a20.81,20.81,0,0,0,9.18-15.23C218,179,201.48,174.17,191.59,171.31ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,1,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.68L160,51.31Z">
                </path>
            </svg>
            <span class="hidden md:inline">
                Export
            </span>
        </a>
<form class="join-item" action="{{ url('import/pets') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" id="file" class="hidden" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
            <button type="button" class="btn btn-outline text-white hover:bg-[#fff6] hover:text-white btn-import">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Zm-42.34-77.66a8,8,0,0,1-11.32,11.32L136,139.31V184a8,8,0,0,1-16,0V139.31l-10.34,10.35a8,8,0,0,1-11.32-11.32l24-24a8,8,0,0,1,11.32,0Z"></path>
                </svg>
                <span class="hidden md:inline">Import</span> 
            </button>
        </form>

    </div>

    {{-- Search --}}
    <label class="input text-white bg-[#0009] outline-none mb-10">
        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </g>
        </svg>
        <input type="search" placeholder="Search..." name="qsearch" id="qsearch" />
    </label>


    {{-- Table --}}
    <div class="overflow-x-auto rounded-box border text-white bg-[#0009]">
        <table class="table">
            <!-- head -->
            <thead>
                <tr class="text-white">
                    <th class="hidden md:table-cell">Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Kind</th>
                    <th>Weight</th>
                    <th>age</th>
                    <th>Breed</th>
                    <th>Location</th>
                    <th>description</th>
                    <th class="hidden md:table-cell">Active</th>
                    <th class="hidden md:table-cell">Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="datalist">
                @foreach ($pets as $pet)
                   <tr @if ($pet->id % 2 == 0) class="bg-[#0006]" @endif>
    <th class="hidden md:table-cell">{{ $pet->id }}</th>

    {{-- Name --}}
    <td>{{ $pet->name }}</td>

    {{-- Image --}}
    <td>
        <div class="avatar">
            <div class="mask mask-squircle w-24">
                <img src="{{ asset('images/' . $pet->image) }}" />
            </div>
        </div>
    </td>

    {{-- Kind --}}
    <td>{{ $pet->kind }}</td>

    {{-- Weight --}}
    <td>{{ $pet->weight }}</td>

    {{-- Age --}}
    <td>{{ $pet->age }}</td>

    {{-- Breed --}}
    <td>{{ $pet->breed }}</td>

    {{-- Location --}}
    <td>{{ $pet->location }}</td>

    {{-- Description --}}
    <td>{{ $pet->description }}</td>

    {{-- Active --}}
    <td class="hidden md:table-cell">
        @if ($pet->active == 1)
            <div class="badge badge-outline badge-success">Active</div>
        @else
            <div class="badge badge-outline badge-error">Inactive</div>
        @endif
    </td>

    {{-- Status --}}
    <td class="hidden md:table-cell">
        {{ $pet->status }}
    </td>

    {{-- Actions --}}
    <td>
        <a class="btn btn-outline btn-xs" href="{{ url('pets/' . $pet->id) }}">
            👁
        </a>
        <a class="btn btn-outline btn-xs" href="{{ url('pets/' . $pet->id . '/edit') }}">
            ✏️
        </a>
        <a class="btn btn-outline btn-error btn-xs btn-delete" href="javascript:;"
            data-name="{{ $pet->name }}">
            🗑
        </a>

        <form class="hidden" method="POST" action="{{ url('pets/' . $pet->id) }}">
            @csrf
            @method('delete')
        </form>
    </td>
</tr>

                @endforeach
                <tr class="bg-[#0009]">
                    <td colspan="7">{{ $pets->links('layouts.pagination') }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <dialog id="modal_message" class="modal">
        <div class="modal-box bg-black text-white">
            <h3 class="text-lg font-bold">
                Congratulations!
            </h3>
            <div role="alert" class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('message') }}</span>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    <dialog id="modal_delete" class="modal">
        <div class="modal-box bg-black text-white">
            <h3 class="text-lg font-bold">
                Are you sure?
            </h3>
            <div role="alert" class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M216,48H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM192,208H64V64H192ZM80,24a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H88A8,8,0,0,1,80,24Z">
                    </path>
                </svg>
                <span>You want to delete: <strong class="fullname"></strong></span>
            </div>
            <div class="flex gap-2 mt-4">
                <button class="btn btn-default btn-outline btn-sm btn-confirm">Confirm</button>
                <form method="dialog">
                    <button class="btn btn-default btn-outline btn-sm">Cancel</button>
                </form>
            </div>
    </dialog>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            //Modal
            const modal_message = document.getElementById('modal_message');
            @if (session('success'))
                modal_message.showModal();
            @endif
            //Delete
            $('table').on('click', '.btn-delete', function () {
                $name = $(this).attr('data-name')
                $('.name').text($name)
                $frm = $(this).next()
                modal_delete.showModal()
            })
            $('.btn-confirm').click(function () {
                $frm.submit();
            })
            // Search--------------
            function debounce(func, wait) {
                let timeout
                return function executedFunction(...args) {
                    const later = () => {
                        clearTimeout(timeout)
                        func(...args)
                    };
                    clearTimeout(timeout)
                    timeout = setTimeout(later, wait)
                }
            }
            const search = debounce(function (query) {

                $token = $('input[name=_token]').val()

                $.post("search/pets", { 'q': query, '_token': $token },
                    function (data) {
                        $('.datalist').html(data).hide().fadeIn(1000)
                    }
                )
            }, 500)
            $('body').on('input', '#qsearch', function (event) {
                event.preventDefault()
                const query = $(this).val()

                $('.datalist').html(`<tr>
                                            <td colspan="7" class="text-center py-18">
                                                <span class="loading loading-infinity loading-xl"></span>
                                            </td>
                                        </tr>`)
                if (query != '') {
                    search(query)
                } else {
                    setTimeout(() => {
                        window.location.replace('pets')
                    }, 500)

                }
            })

            //Import 
            $('.btn-import').click(function (e) {
                $('#file').click()
            })
            $('#file').change(function (e) {
                $(this).parent().submit()
            })
               
        })
    </script>
@endsection