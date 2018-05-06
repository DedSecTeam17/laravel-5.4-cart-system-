
@section('style')
    {!! Html::style('css/colors.css') !!}
@endsection


<footer   style="color: white;    background-color: #22313F;">

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <div class="card m-5">
                    <div class="card-header bg-dark">
                        {{Form::open(['route'=>'send_email','method'=>'POST'])}}
                        <div class="form-group">
                            <input type="text" name="name" placeholder="enter your name"
                                   class="form-control bg-dark" style="color: white;">
                        </div>
                        <div class="form-group">
                                <textarea type="text" name="message" placeholder="enter your message"
                                          class="form-control bg-dark" style="color: white;"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="enter your name"
                                   class="form-control bg-dark" style="color: white;">
                        </div>
                        <button type="submit" class="btn  btn-lg btn-block bg-gradient-success" style="border-radius: 30px"><i class="fas fa-paper-plane"></i></button>
                        {{Form::close()}}

                    </div>

                </div>
            </div>

            <div class="col-md-3 mt-5">

                <p><i class="fas fa-mobile ">+249902649933</i></p>
                <p><i class="fas fa-road">Sudan ,Khartoum,ebaid khatium road</i></p>
                <p><i class="fas fa-envelope">mohamedelamin14.me@gmail.com</i></p>
                <p><i class="fas fa-map-marker">google silicon valley</i></p>


            </div>
            <div class="col-md-3 mt-5">
                <p>HOME</p>
                <p>ABOUT</p>
                <p>CONTACT US</p>
                <p>MORE </p>

            </div>


            <hr>
        </div>

        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.6392906252368!2d-122.0862515502518!3d37.42199987972619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba02425dad8f%3A0x6c296c66619367e0!2sGoogleplex!5e0!3m2!1sen!2s!4v1525460496387"
                        frameborder="0" style="border:0; width: 100%; height: 50%" allowfullscreen></iframe>


            </div>

        </div>
        <div class="row " id="app" :style="sMedia_style">
            <div class="col-md-12 form-inline" :class="'mt-5'">
                <a href="#" @hover="change_color"><i :style="soical_item_style" class="fab fa-facebook-square m-2 "></i></a>
                <a href="#"><i :style="soical_item_style" class="fab fa-youtube  m-2 soical_item"></i></a>
                <a href="#"><i :style="soical_item_style" class="fab fa-github  m-2"></i></a>
                <a href="#"><i :style="soical_item_style" class="fab fa-linkedin  m-2"></i></a>
                <a href="#"><i :style="soical_item_style" class="fab fa-instagram  m-2"></i></a>
            </div>
            <div class="text text-center">
                <p>&copy; @{{copy_reigth}}</p>
            </div>
        </div>


    </div>
</footer>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            copy_reigth: ' 2018 SyncCode'
            , sMedia_style: {
                backgroundColor: '#22313F'
            },
            soical_item_style: {
                fontSize: '30px',
                color: 'white',

            }
        },
        methods: {
            change_color: function () {
                window.alert("Done");
            }
        }
    });
</script>