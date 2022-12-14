@extends('layouts.app')


@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase" style="font-max-size: x-large; text-align: center">
                Cars
            </h1>
        </div>

        <hr class="mt-4 mb-8" style="height: 1px; background-color: brown;">


        <div class="pt-10" style="white-space: pre-line">
            <a
                href="cars/create"
                class="border-b-2 pb-2"
                style="font-style: oblique;  color: gray; border-bottom-style: dotted;">
                Add a new car &rarr;
            </a>
        </div>
        <hr class="mt-4 mb-8">

        <div class="w-5/6 py-10">
            @foreach($cars as $car)
                <div class="m-auto">

                    <div class="float-right">
                        <a
                            class="border-b-2 pb-2 border-dotted italic text-green-500"
                            style="font-style: oblique; border-bottom-style: dotted"
                            href="cars/{{ $car->id }}/edit">
                            Edit &rarr;
                        </a>

                        <form action="/cars/{{ $car->id }}" class="pt-3"
                              method="POST" >
                            @csrf
                            @method('delete')
                            <button type="submit"
                                    class="border-b-2 pb-2 border-dotted italic text-red-500"
                                    style="font-style: oblique; border-bottom-style: dotted;">
                                Delete &rarr;
                            </button>
                        </form>
                    </div>

                <span class="uppercase text-blue-500 font-bold text-xs" style="font-style: oblique;  color: dodgerblue; text-align: center">
                    Founded: {{$car->found}}
                </span>
                    <h2 class="text-gray-700 text-5xl">
                        <a href="/cars/{{$car->id}}">
                            {{$car->name}}
                        </a>
                    </h2>
                    <p class="text-lg text-gray-700 py-6" style="color: dimgray; size: 50px">
                        {{$car->description}}
                    </p>
                    <hr class="mt-4 mb-8">
                </div>

            @endforeach
        </div>
    </div>

@endsection
