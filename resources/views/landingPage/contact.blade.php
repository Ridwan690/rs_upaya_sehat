@extends('layouts.master')

@section('content')
<section id="contact" class="custom-pad-bottom">
        <div class="container mt-5 contactContent">
            <h1 class="text-center">Contact Us</h1>

            <div class="row mt-4">
                <div class="col-lg-5">
                    <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
                    <div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
                        <div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Sorong&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                        <a class="googl-ehtml" href="https://www.bootstrapskins.com/themes" id="grab-map-authorization">premium bootstrap themes</a>
                        <style>#g-mapdisplay .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;}</style>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- form fields -->
                    <form>
                        <input type="text" class="form-control form-control-lg" placeholder="Name">
                        <input type="email" class="form-control mt-3" placeholder="Email">
                        <input type="text" class="form-control mt-3" placeholder="Subject">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Project Details"></textarea>
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary ms-3">Contact Me</button>
                    
                </div>

            </div>
        </div>
    </section>
@endsection