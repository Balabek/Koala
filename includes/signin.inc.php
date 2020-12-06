<div class="container-fluid mid_cont">
        <div class="row">
            <div class="sgnin_wrnbox_holder_si col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <section class="sgnin_wrnbox">
                    <i class="fa fa-exclamation-circle fa-2x"></i>
                    <p class="yeltxt_head">The username is already in use. Please try another username!</p>
                </section>
            </div>
        </div>

        <div class="col-lg-offset-1">
          <form id="koalareg">
            <div class="row form-group">
                <div class="input_holder col-md-5 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">USERNAME</span></section>
                    <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="name" data-bv-field="name">
                </div>
            </div>

            <div class="row form-group">
                <div class="input_holder col-md-5 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">PASSWORD</span></section>
                    <input type="password" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="password" data-bv-field="password">
                </div>
            </div>

            <div class="row">
                <div class="linx_and_enter col-md-5 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <a href="#">Forgot My Passowrd</a> <br>
                    <a href="#">Sign Up</a>
                    <button id="signin_btn" type="submit" class="btn btn-sm endersk greener_dark col-md-2 col-sm-2">ENTER</button>
                </div>
            </div>
          </form>
        </div>
    </div>
 </div>

 <script src="js/bootstrapValidator.js"></script>
 <script src="js/jquery.form.js"></script>

 <script>
     if ($(window).width() > 2000) {
         $('#footer').css('margin-top','180px');
     }
 </script>