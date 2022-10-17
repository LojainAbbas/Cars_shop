@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold" style="font-max-size: x-large; text-align: center">
                Update car
            </h1>
        </div>
    </div>
    <hr class="mt-4 mb-8" style="height: 1px; background-color: black">

    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')

            <label>Image</label>
            <div><input
                    type="file"
                    class="block shadow-5xl mb-10 p-2 w-80
                    placeholder-gray-400"
                    style="font-family: 'Bold Italic Art';
                     width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block;
                     border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"
                    name="image"></div>

            <label>Car Name</label>
            <div class="block">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    style="font-family: 'Bold Italic Art';
                    width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block;
                    border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"
                    name="name"
                    value="{{ $car->name }}">

                <label>Founded</label>
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    style="font-family: 'Bold Italic Art';
                    width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block;
                    border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"
                    name="found"
                    value="{{ $car->found }}">

                <label>Description</label>
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    style="font-family: 'Bold Italic Art';
                    width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block;
                    border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"
                    name="description"
                    value="{{ $car->description }}">

                <button type="submit"
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
                </button>
            </div>
        </form>
    </div>
@endsection
