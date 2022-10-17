@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">

            <img
                src="{{ asset('images/' . $car->image_path) }}"
                class="w=8/12 mb-8 shadow-xl"
                style="max-width: 100%; height: 480px; display: block; margin-left: auto;  margin-right: auto; "
                alt="Car Image Coming Soon">
            <h1 class="text-5xl uppercase bold" style="font-max-size: x-large; text-align: center">
                {{ $car->name }}
            </h1>
        </div>
    </div>
    <hr class="mt-4 mb-8" style="height: 1px; background-color: black">

    <div class="py-10 text-center">
        <div class="m-auto">
            <p class="text-lg text-gray-700 py-6"
            style="font-family: Monospace; text-align: center; font-size: large;">
                    <span class="uppercase text-blue-500 font-bold text-xs italic"
                    style="font-family: Monospace; text-align: center;">
                        Founded: {{ $car->found }}
                    </span></p>

            <p class="text-lg text-gray-700 py-6"
               style="font-family: Monospace; text-align: center; font-size: large;">
            {{ $car->description }}
            </p>

            <table class="table-auto">
                <tr class="bg-blue-100">
                    <th class="w-1/4 border-4 border-gray-500"
                    style="font-family: Monospace; border: 1px solid #ddd;  text-align: left;">
                        Model
                    </th>
                    <th class="w-1/4 border-4 border-gray-500"
                        style="font-family: Monospace; border: 1px solid #ddd;  text-align: left;">
                        Engines
                    </th>
                    <th class="w-1/4 border-4 border-gray-500"
                        style="font-family: Monospace; border: 1px solid #ddd;  text-align: left;">
                        Date
                    </th>
                </tr>

                @forelse ($car->carModels as $model)
                    <tr>
                        <td class="border-4 border-gray-500"
                            style="font-family: Monospace; border: 1px solid #ddd;  text-align: left;">
                            {{ $model->model_name }}
                        </td>
                        <td class="border-4 border-gray-500"
                            style="font-family: Monospace; border: 1px solid #ddd;  text-align: left;">
                            @foreach($car->engines as $engine)
                             @if ($model->id == $engine->model_id)
                                {{ $engine->engine_name }}
                                @endif
                            @endforeach
                        </td>
                        <td class="border-4 border-gray-500"
                            style="font-family: Monospace; border: 1px solid #ddd;  text-align: left;">
                            {{ date('d-m-Y', strtotime
                            ($car->productionDate->created_at)) }}
                        </td>
                    </tr>
                @empty
                    <p style="font-family: Monospace;">
                        No car models found!
                    </p>
                @endforelse
            </table>

            <p class="text-left" style="font-family: Monospace;">
                Product types:
            @forelse ($car->products as $product)
                {{ $product->name }}
            @empty
                <p style="font-family: Monospace;">
                    No car product description
                </p>
                @endforelse
                </p>

                <hr class="mt-4 mb-8">
        </div>
    </div>
    <a href="/cars"
       class="previous"
       style="background-color: #f1f1f1; color: black; border-radius: 50%;
        background-color: #ddd;
  color: black;">
        &laquo; Previous
    </a>
    </div>

@endsection
