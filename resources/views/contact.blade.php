@extends('layout.app')
@section('title', 'Contact')

@section('content')
<br>
    <article id="contact">
        <h2 class="major">Contact</h2>
        <form method="post" action="{{ route('contact.store') }}">
            {{ csrf_field() }}
            <div class="fields">
                <div class="field half">
                    <label for="name">Name</label>
                    <input type="text" class="{{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

                    @if ($errors->has('name'))
                    <div class="error">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="email" class="{{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

                    @if ($errors->has('email'))
                    <div class="error">
                        {{ $errors->first('email') }}
                    </div>
                    @endif                </div>
                <div class="field">
                    <label for="user_query">Message</label>
                    <textarea class="{{ $errors->has('user_query') ? 'error' : '' }}" name="user_query" id="user_query"
                        rows="4"></textarea></div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Send Message" class="primary" /></li>
                <li><input type="reset" value="Reset" /></li>
                @if (session('status'))
                <div class="alert alert-success">
                    <li>{{ session('status') }}</li>
                </div>
                @endif
            </ul>


        </form>
    </article>

    <style>
    #bg:after {
     background-image: url("../../images/maderia-porsche.jpg");
     filter: blur(1px);
     }

    .error {
        color: white;
    }
     </style>
@endsection