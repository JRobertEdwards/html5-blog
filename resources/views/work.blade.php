@extends('layout.app')

@section('title', 'Work')
@section('content')
    <article id="work">
        <h2 class="major">Work</h2>
        <p class="align-left">
            During my time in the industry I've been involved in numerous areas of software development and used a multitude
            of technologies, this includes:
        </p>
        <table>
            <thead>
                <tr>
                    <th>Technologies used</th>
                    <th>Description</th>
                </tr>
            </thead>
            @foreach ($projects as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['description'] }}</td>

                </tr>
            @endforeach

        </table>
    </article>

    <style>
        #bg:after {
            background-image: url("../../images/glentress.jpg");
            filter: blur(3px);
        }

    </style>
@endsection
