@extends('layout.app')
@section('title', 'Contact')

@section('content')
<br>
    <!-- Contact -->
    <article id="contact">
        <h2 class="major">Contact</h2>
        <form method="post" action="#">
            <div class="fields">
                <div class="field half">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4"></textarea>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Send Message" class="primary" /></li>
                <li><input type="reset" value="Reset" /></li>
            </ul>
        </form>
    </article>

    <style>
        #bg:after {
     background-image: url("../../images/maderia-porsche.jpg");
     filter: blur(1px);
     }
     </style>
@endsection