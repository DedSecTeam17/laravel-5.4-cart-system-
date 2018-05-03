<hr>
<footer class="bg-dark " style="color: white;">



    <div class="row">
        <div class="col-md-6">
            <div class="card m-5">
                <div class="card-header bg-dark">
                    <form>
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="name" placeholder="enter your name" class="form-control bg-dark" style="color: white;">
                        </div>

                        <div class="form-group">
                            <textarea type="text" name="message" placeholder="enter your message" class="form-control bg-dark" style="color: white;"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="enter your name" class="form-control bg-dark" style="color: white;">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>

                    </form>
                </div>

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-9 form-inline">
            <p class="glyphicon glyphicon-file  m-3">FaceBook</p>
            <p class="glyphicon glyphicon-file  m-3">FaceBook</p>
            <p class="glyphicon glyphicon-file  m-3">FaceBook</p>
            <p class="glyphicon glyphicon-file  m-3">FaceBook</p>
        </div>

    </div>
    <p>&copy; 2018 SyncCode &copysr; all </p>
</footer>