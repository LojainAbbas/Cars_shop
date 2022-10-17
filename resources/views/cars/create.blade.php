@extends('layouts.app')

@section('content')

    <div class="m-auto w-100 py-24">
        <div class="text-center">
            <h1 class="uppercase font-bold" style=" font-max-size: x-large; text-align: center  ">
                Create Car
            </h1>
        </div>
    </div>

    <hr class="mt-4 mb-8" style="height: 1px; background-color: black">

    <div class="flex justify-center pt-20">
<form action="/cars" method="POST" enctype="multipart/form-data">
    @csrf
    <div><input
            type="file"
            class="block shadow-5xl mb-10 p-2 w-80
            placeholder-gray-400"
            style="font-family: 'Bold Italic Art';
             width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block;
             border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"
            name="image"></div>

    <div><input
        type="text"
        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
        style="font-family: 'Bold Italic Art';
        width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block;
        border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"
        name="name"
        placeholder="Brand name..."></div>
<div><input
        type="text"
        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
        style="font-family: 'Bold Italic Art';
        width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block;
        border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"
        name="found"
        placeholder="Founded..."></div>
<div><input
        type="text"
        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
        style="font-family: 'Bold Italic Art';
        width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block;
        border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"
        name="description"
        placeholder="Description..."></div>
    <div><button type="submit"
                 class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold"
                 style=" width: 100%;
                        background-color: #4CAF50;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;">
        Submit
    </button></div>

</form>
        @if($errors->any())
            <div class="w-4/8 m-auto text-center">
                @foreach($errors->all() as $error)
                    <li class="text-red-500 list-none"
                    style="color: brown">
                        {{$error}}
                    </li>
                @endforeach
            </div>
            @endif
    </div>


@endsection

