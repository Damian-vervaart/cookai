@extends('base')

@section('content')

<div class="first">
    <div class="main">
        <h1 class="first-view">
            <span style="color: #FFFFFFFF">
                <strong>Hi chef,</strong>
                <br>
                <strong>meet your</strong>
            </span>
            <span style="color: #ff6a00">
                <br>
                <strong>new buddy.</strong>
            </span>
        </h1>
        <div id="read-more">
            <a href="#">Read More</a>
        </div>

    </div>
</div>

<div class="container">
    <div class="second">
        <div class="heading">
            <h2><strong>"Discover the next generation cookware"</strong></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium blanditiis commodi consequatur corporis,
                    dolorum eius ex expedita, facilis fugit id
                    iusto maiores molestiae pariatur,
                    qui quia quibusdam quod tenetur velit.
            </p>
        </div>
        <div id="secties">
            <div>
                <a href="#">
                    <div class="img-text">
                        <p><strong>Bakken</strong></p>
                        <img src="/img/bar.png" alt="Bakken">
                    </div>

                </a>
            </div>
           <div>
               <a href="#">
                   <div class="img-text">
                       <p><strong>Braden</strong></p>
                       <img src="/img/meatpan.png" alt="Braden">
                   </div>
               </a>
           </div>
            <div>
                <a href="#">
                    <div class="img-text">
                        <p><strong>Accesoires</strong></p>
                        <img src="/img/ding.png" alt="Braden">
                    </div>

                </a>
            </div>
        </div>
    </div>
</div>

<div class="third">
    <div class="second-heading">
            <h2><strong>The best of <br> dutch design.</strong></h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ad, atque cumque enim et eveniet impedit iure laborum
                perspiciatis praesentium saepe!
                Alias cum doloremque eum exercitationem odit.
                Explicabo laborum molestiae soluta?
            </p>
    </div>
    <img src="/img/fishpan.png" alt="">
</div>

<div class="fourth">
    <img src="/img/bread.png" alt="">
    <div class="second-heading">
        <h2><strong>Find your nearest<br>Cookai dealer.</strong></h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ad, atque cumque enim et eveniet impedit iure laborum
            perspiciatis praesentium saepe!
            Alias cum doloremque eum exercitationem odit.
            Explicabo laborum molestiae soluta?
        </p>
        <div id="read-more2">
            <a href="#">Read More</a>
        </div>
    </div>
</div>
@endsection
