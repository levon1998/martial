<section id="contact">
    <div class="section-heading contact-heading text-center text-uppercase">
        <h2><span>Կոնտակտներ</span></h2>
    </div>

    <div id="map">


    </div>
    <div id="map-overlay" class="text-left text-uppercase">
        
    </div>
    <!-- contact massage-->
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <form action="{{url('contact')}}" method="post">
                    {{csrf_field()}}
                    <div class="col-sm-4">
                        <label for="usr">Your Name</label>
                        <input type="text" class="form-control" name="name" id="usr">
                    </div>
                    <div class="col-sm-4">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-sm-4">
                        <label for="number">Your Number</label>
                        <input type="number" class="form-control" name="number" id="number">
                    </div>
                    <div class="col-sm-12">
                        <label for="massage">Your Massage</label>
                        <textarea class="form-control" rows="10" name="messege" id="massage"></textarea>

                        <button type="submit" class="btn red-btn" style="background: rgb(177, 3, 3);"> SEND YOUR MESSAGE</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>