@extends('user.master')

@section('title')
E-Foodies | About Us
@endsection

@section('content')
        <div class="container-fluid">
            <div class="row text-center justify-content-center animate__animated animate__bounce animate_delay-2s mt-4">
                <h3><span style="color: #ff6600;">Our</span>&nbsp;<span style="color: purple;">Story</span></h3>
            </div>
            <div class="row mt-lg-5 mb-lg-5 mr-5 animate__animated animate__fadeInLeft">
                <div class="col-7  text-justify">
                    <p style="font-size:18px"> <span style="color:purple;">E-</span> <span style="color:#FF6600;">FOODIES</span> was built by 3 Creatives People.It is Built For Helping <b>Populist Economy</b> in <span style="color:rgb(235, 52, 52)">Indonesia</span>.Because of Most of Indonesian Are Suffering Because of the pandemic in that time but the pioneers didn't give it up.They Built the e-commerce restaurant which is called as
                      <span style="color:purple;">E-</span> <span style="color:#FF6600;">FOODIES</span> which is was built in Jonggol,Bogor West Java at 20,October,2020.
                    </p>
                </div>
                <div class="col-5 justify-content-center text-center " style="border-left: 2px solid grey;">
                    <img class="mt-4" src="{{ asset('/img/logo.png') }}" alt="e-foodies">
                </div>
            </div>
           
            <div class="row text-center justify-content-center font-weight-bold  animate_animated animate_fadeInLeft mt-5 mb-5" >
                <legend>"<span style="color:#FF6600">There's <b>no shortage of remakable ideas,</b> what's missing </span> <span style="color:purple">is the will to execute them.</span> "</legend>
                 <sub class="content-left">Seth Godin</sub>
            </div>
            
            <div class="row text-center justify-content-center ">
                <h3 class="mt-3"><span style="color: #ff6600;">About</span>&nbsp;<span style="color: purple;">Madinatul Quran Team</span></h3>
            </div>
            <div class="row mt-lg-5 mb-lg-5 mr-5 h-20 ">
                <div class="col-8 text-justify">
                    <div class="container"  style="border-right: 2px solid grey;">
                        <p style="font-size:18px"> <span style="color:green;">Madinatul Quran</span> is The <b>Agency</b> which overshade us.It was begun because we need <b>Web Developer</b>,<b>Networking Master</b>, And <b>Digital Marketing Person</b>.And This <span style="color:green;">Madinatul Quran</span>
                        is The Web Developing Division which is to help the Indonesian Populist Economic.The Agency had chosen 3 people in this division for developing the website,deliver the aspiration and helping people who is in the suffocate
                        </p>
                    </div>
                </div>
                    
                
                <div class="col-4 justify-content-center text-center ">
                    <div class="container">
                        <img class="mt-0 img-fluid" style="height:150px;" src="{{ asset('https://lh3.googleusercontent.com/fife/ABSRlIpeEOAmW5YDT4rAD12wH8-d4Rr70KLFkOCa0Y7nn1DKl85WrXEqcY3nHOctnYJrNhcYnKVBdxDjHFaHkbYpYRdmsboDEVgK_2qWfYB8YbXPgIoYZGS2qbuTuOiK9wdXVtv64bptOmH1vzLTlTm-aV4uZ2_FKr_csN2u1yr5ZrxZJGnw49XV9wkg0ibpWfO-Dzo3YbYZC_p1S225dHcAftySDzHU3l7Lg_bvJdSm0bLpsyUQ33rjhCf9euSdN2YlO8qUybXRRGAaPb_Qy_B6Y0fnXazdOlDV_ssSSj5ZXEFBASVw2-TbwyaAyhVLzHR22Bs2MK0rtUQZDLu9s87MMvcM5GAPXoVG4KT5CKSbpttG_PEhwE7J4yFTaiXhEF4VpSn1EeQ0w8T_x-RMfXAZB0hM5SdSHTnplAgU7B-kzEd1ikkMCcGoa431x52NC8rTVczLo8bj0AZAbtPac9LKKt_xXfz2jGAmxyjIRSPePvB25w312bv9g5_LlMHjiNyFgcDZypy4hNC5FRPHZqcwXmbizRvgnlbhGOUEmfk2cdq9DFD7to3zG0dqUKWBW05jtSJ-yztytZeRq2IPHEfmQWFXZiQ7x61z2NaCKgNGhIln87QKV4G7p4KO6gZodGRiylP10DJ1NEpzrdxJkMAHRRx1Mf7-XPDVjyB9KtPfCxm2Imhxwz8pgBWoJToLkDqzs4kSful4LXmiwsmnrkqVZVk6FJ_ta4SO8aY=w1366-h654-ft') }}" alt="e-foodies">
                    </div>
                </div>
            </div>

            <div class="row mt-lg-5 mb-4 justify-content-center align-content-center">
                <div class="col-lg-12 col-md-12">
                    <h3 class="text-center" style="color:#FF6600;">The Developers</h3>
                    <h4 class="mb-5 text-center" style="color:purple;">Madinatul Quran Teams </h4>
                </div>
                <div class="row align-content-center justify-content-center p-5 text-white" style="background-color:#FF6600;">
                    <div class="col-md-3 col-lg-3 ml-0">
                        <img style="height:150px;" class="rounded-circle text-left" src="{{ asset('/img/nizar.jpg')}}" alt="">
                    </div>
                    <div class="col-9 text-left">
                        <h5>Nizar Rasyiid</h5>
                        <p>As <b>Leader</b></p>
                        <p>Hi,I'm Nizar Rasyiid I am The Leader of Madinatul Quran Team.At First I was appointed by the agency for building an E-Commerse website to sell the foods and each other.Then I asked for helping to my friends for working in front-end and also back-end.Then This is Madinatu Quran Team. </p>
                    </div>
                </div>
            </div>
            <div class="row mt-0 align-content-center justify-content-end p-5 text-white" style="background-color:purple;">
                <div class="col-9 text-right">
                    <h5>Rizziq Ibrahim</h5>
                    <p>As <b>Back-End Developer</b></p>
                    <p>Hi,I am Rizziq Ibrahim I'm The back-end Developer I have a knack of doing the back-end proggramming that's why I was appointed for helping the back-end side by my team.</p>
                </div>
                <div class="col-lg-3 ml-0">
                    <img style="height:150px;" class="rounded-circle img-fluid text-right " src="{{ asset('/img/rizziq.jpg')}}" alt="">
                </div>
            </div>

            <!-- <p> > Thoriq Muhammad Fadhli as <strong>Front-end Programmer</strong></p> -->
            <div class="row mt-0 align-content-center justify-content-center p-5 text-white" style="background-color:#FF6600">
                <div class="col-md-3 col-lg-3 ml-0">
                    <img style="height:150px;" class="rounded-circle text-left " src="{{ asset('/img/thoriq.jpg')}}" alt="">
                </div>
                <div class="col-9 text-left">
                    <h5>Thoriq Muhammad Fadhli</h5>
                    <p>As <b>Front-End Developer</b></p>
                    <p>Hi,I am Thoriq Muhammad Fadhli I'm The front-end Developer I have a knack of doing the front-end Design and I have a Creative person that's why I was appointed for helping the back-end side by my team.</p>
                </div>
            </div>
            <div class="row mt-lg-5 mb-5 text-justify">
                <div class="col-lg-6 col-sm-6">
                    <h5 class="mt-2 mb-2">You can Also Contact Us From :</h5>
                    <h6> > Nizar Rasyiid                : <a href="https://wa.me/6281291290606"><abbr title="Whatsapp"><i class="fa fa-whatsapp"></i></abbr></a>&nbsp;<a href="https://t.me/yecbec"><abbr title="Telegram"><i class="fa fa-telegram"></i></abbr></a>&nbsp;<a href="https://www.instagram.com/nz_rasyiid/"><abbr title="Instagram"><i class="fa fa-instagram"></i></abbr></a></h6>
                    <h6> > Rizziq Ibrahim               : <a href="https://wa.me/6281398278900"><abbr title="Whatsapp"><i class="fa fa-whatsapp"></i></abbr></a>&nbsp;<a href="https://t.me/RizziqIbrahim"><abbr title="Telegram"><i class="fa fa-telegram"></i></abbr></a>&nbsp;<a href="https://www.instagram.com/rizziqibrahim1/"><abbr title="Instagram"><i class="fa fa-instagram"></i></abbr></a></h6></h6>
                    <h6> > Thoriq Muhammad Fadhli       : <a href="https://wa.me/6282125374783"><abbr title="Whatsapp"><i class="fa fa-whatsapp"></i></abbr></a>&nbsp;<a href="https://t.me/alfadhli_12"><abbr title="Telegram"><i class="fa fa-telegram"></i></abbr></a>&nbsp;<a href="https://www.instagram.com/tmfadhli_12/"><abbr title="Instagram"><i class="fa fa-instagram"></i></abbr></a></h6></h6>
                </div>           
                <div class="col-lg-6 col-sm-6">
                    <h5 class="mt-2 mb-2">You can Find Us at :</h5>
                    <p><a href="https://www.google.com/maps/place/SMK+MADINATULQURAN/@-6.4932879,107.0056517,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69bdb8f6c50289:0xb7a33d4d5721ad5f!8m2!3d-6.4932879!4d107.0078404"><span><i class="fas fa-map-marked-alt"></i></span>&nbsp;<span>SMK MQ - kp.kebon Kalapa, RT.02/RW.011, Singasari, Kec. Jonggol, Bogor, Jawa Barat 16830</span></a></p>
                </div>
            </div>
        </div>
@endsection