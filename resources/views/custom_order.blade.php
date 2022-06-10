@extends('layout')
@section('content')

<style>
        .home {
            margin-left: 18rem;
            margin-right: 18rem;
        }

        .banner1 {
            background-color: rgb(245, 245, 245);
            width: 100%;
            padding: 120px;
            padding-left: 25rem;
            padding-right: 25rem;

        }
        .banner2 {
            width: 100%;
            padding: 25px;
            padding-left: 25px;
            padding-right: 25px;

        }
        .btn-order {
            width: 200px; 
            border-radius: 30px; 
            border: 2px;
            border-style: solid;
            border-color: #000;
            background-color:#fff; 
            color: #000;
        }
        .btn-order:hover {
            width: 200px; 
            border-radius: 30px; 
            border: 2px;
            border-style: solid;
            border-color: #000;
            background-color:#000; 
            color: #fff;
        }

    </style>
    <div>
        <div class="banner1 text-center">
            <b>"Toko Kembang grew from our love for flower and to spread the love in our community, we started off from
                street
                near Rawa Belong street and now we have the most diverse collection for plants and we provide professional
                installation and ongoing maintenance of your live plants."</b>
            <br>
            <br>
            <p>Nanda Ria / CEO Tokem </p>
        </div>
        <div class="home">
            <div class="banner2 d-flex justify-content-around mt-5">
                <div>
                    <h3>Get In Touch</h3>
                </div>
                <div>
                    <div>
                        <b>Sales Inquiry</b>
                        <div>sales@tokem.com</div>
                        <p>+62 (021) 840-7229 ext 1</p>
                    </div>
                    <br>
                    <div>
                        <b>B2b</b>
                        <div>b2b@tokem.com</div>
                        <p>+62 (021) 840-7229 ext 1</p>
                    </div>
                </div>
                <div>
                    <b>Customer Service</b>
                    <div>cs@tokem.com</div>
                    <p>+62 (021) 840-7229 ext 1</p>
                </div>
            </div>

            <div class="banner2 d-flex justify-content-around mt-5">
                <div>
                    <h3>Locations</h3>
                </div>
                <div>
                    <div>
                        <b>Jakarta</b>
                        <div>Jl. Rawa Belong No.420</div>
                        <p>11420</p>
                    </div>
                    <br>
                    <div>
                        <b>Karawang</b>
                        <div>Jl. Rawa Belong No.420</div>
                        <p>11420</p>
                    </div>
                </div>
                <div>
                    <b>Bandung</b>
                    <div>Jl. Rawa Belong No.420</div>
                    <p>11420</p>
                </div>
            </div>
            <div class="banner2 text-center">
            <a role="button" class="btn btn-order" href="https://api.whatsapp.com/send/?phone=6285894954900&text&app_absent=0">Order</a>
            </div>
        </div>
    </div>

 
@endsection