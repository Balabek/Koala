<div id="confirmcode" class="modal fade"> <!-- Phone Check Modal Dialog START // Uncomment the 'TEST' button (line 348) to call the dialog -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body cnfrm">
                <div>
                    <button type="button" class="close hidden-xs" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <section class="sgnin_wrnbox">
                    <i class="fa fa-exclamation-circle fa-2x"></i>
                    <p class="yeltxt_head"><b>Incorrect code, please try again!</b></p>
                </section>
                <section class="sms_wrn_holder">
                <p>SMS with confirmation code has been sent to the following number:&nbsp;&nbsp;&nbsp;&nbsp;<b>0XXXXXXXX</b></p>
                </section>
                <div class="form-group">
                    <div class="fld_modal col-sm-12 col-sm-offset-1 col-xs-12">
                        <section class="fld_addon padding_remover col-sm-4 col-xs-4"><span class="fld_title_modal">PLEASE INPUT YOUR CODE HERE</span></section>
                        <input type="text" class="form-control_x col-sm-4 col-xs-5 pull-left">
                        <button type="submit" class="btn btn-lg confirm_blu_btn col-sm-2 col-xs-10">confirm <span class="hidden-xs">code</span></button>
                    </div>
                </div>
                <div class="sms_wrn_holder_2 col-sm-5 col-sm-offset-3 col-xs-5 col-xs-offset-3">
                    <p>If you don’t get the confirmation SMS in 30 seconds,
                       please check your number and press 'Resend'</p>
                    <button type="submit" class="btn btn-warning bluer_dark"><span style="font-weight: 400">RESEND</span></button>
                </div>
            </div>
        </div>
    </div>
</div><!-- Phone Check Modal Dialog END -->

<div class="container-fluid mid_cont wrnbox_padder">
          <div class="row">
            <div id="sgnp" class="sgnin_wrnbox_holder col-md-9 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <section class="sgnin_wrnbox">
                    <i class="fa fa-exclamation-circle fa-2x"></i>
                    <p class="yeltxt_head">The username is already in use. Please try another username!</p>
                </section>
            </div>
        </div>

        <div class="boxxx col-md-4 col-md-pull-1 col-sm-11 col-xs-offset-1 pull-right">

            <div class="infoboard">
                <p class="infoboard_txt">Upon finishing the registration we will send you an email with confirmation letter.</p>
                <p class="infoboard_txt">Please don’t forget to follow the steps
                    described in the mail to confirm your email address.</p>

                <p class="info">Without having confirmed your email you will not be able to:</p>
                <ol class="infoboard_list">
                    <li>Recover your password if you forget it,</li>
                    <li>Use Your K-Drams,</li>
                    <li>Get email notifications about your activated offers and earned K-Drams.</li>
                </ol>
            </div>
        </div>

        <form id="koalareg" method="post">
          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">FIRST NAME *</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="name" data-bv-field="name">
            </div>
          </div>

          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">LAST NAME</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="lastname" data-bv-field="lastname">
            </div>
          </div>

          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <section id="bdate" class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">DATE OF BIRTH</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8">
            </div>
          </div>

          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <span class="yellowarn col-md-12 col-sm-12 col-xs-12"></span>
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">USERNAME *</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="username" data-bv-field="username">
            </div>
          </div>

          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">PASSWORD *</span></section>
                <input id="pswd" type="password" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="password" data-bv-field="password">
            </div>
          </div>

		  <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <span id="pswd_cnfrm" class="col-md-12 col-sm-12 col-xs-12 animated fadeInLeftBig"><i class="fa fa-exclamation-triangle"></i> Passwords do not match!</span>
                <section id="passrpt" class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title_2">REPEAT PASSWORD *</span></section>
                <input id="re_pswd" type="password" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="password_rpt" data-bv-field="password_rpt">
            </div>
		  </div>

          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">GENDER *</span></section>
                <select class="form-control_x col-md-8 col-sm-8 col-xs-8">
                    <option value=""></option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                </select>
            </div>
          </div>

          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <section id="faddress" class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">FULL ADDRESS</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8">
            </div>
          </div>

          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">EMAIL *</span></section>
                <input type="email" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="email" data-bv-field="email">
            </div>
          </div>

          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">CELLPHONE *</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8 onlynumberz" name="celly" data-bv-field="celly" placeholder="Format: 0XXXXXXXX" onfocus="this.placeholder='' " onblur="this.placeholder='Format: 0XXXXXXXX' ">
            </div>
          </div>

          <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <section class="col-md-4 col-sm-4 col-xs-4" style="padding: 0;"><img src="img/capcha.jpg" class="pull-left capcap img-responsive"> </section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8">
            </div>
          </div>

            <div class="input_holder reg col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <button id="sendinfo" type="submit" class="btn greener_dark btn-warning pull-right" data-toggle="modal" data-target="#confirm_code">REGISTER</button>
                <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#confirmcode">TEST</a>
            </div>
        </form>
    </div>
  </div>

  <script src="js/bootstrapValidator.js"></script>
  <script src="js/jquery.form.js"></script>