<div class="container-fluid mid_cont wrnbox_padder">
    <div class="row">
        <div class="sgnin_wrnbox_holder col-md-9 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <section class="sgnin_wrnbox">
                <i class="fa fa-exclamation-circle fa-2x"></i>
                <p class="yeltxt_head">The username is already in use. Please try another username!</p>
            </section>
        </div>
    </div>

    <div class="boxxx col-md-4 col-md-pull-1 col-sm-11 col-xs-offset-1 pull-right" style="margin-top: 3%">

        <div class="koalaid col-lg-6">
            <img src="img/qr-code.png" class="img-responsive pull-left">
            <span class="idnumba_2">AM123456</span><br>
            <span class="idnote_2">Your Koala.am ID Number</span>
        </div>

        <div class="infoboard_warn">
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <p class="yeltxt_head"><b>Your Email address is not confirmed yet!</b></p>
            <p class="yeltxt">Without having confirmed your email you will not be able to:</p>
            <ol class="yel_list">
                <li>Recover your password if you forget it,</li>
                <li>Use Your K-Drams,</li>
                <li>Get email notifications about your activated offers and earned K-Drams.</li>
            </ol>
        </div>

        <div class="resend_info_holder">
            <p>Please Press the button below to resend the confirmation email!</p>
            <button type="submit" class="btn resend_btn btn-block">RESEND CONFIRMATION EMAIL</button>
        </div>

       <!-- <div class="infoboard">
            <p class="infoboard_txt">Upon finishing the registration we will send you an email with confirmation letter.</p>
            <p class="infoboard_txt">Please don’t forget to follow the steps
                described in the mail to confirm your email address.</p>

            <p class="info">Without having confirmed your email you will not be able to:</p>
            <ol class="infoboard_list">
                <li>Recover your password if you forget it,</li>
                <li>Use Your K-Drams,</li>
                <li>Get email notifications about your activated offers and earned K-Drams.</li>
            </ol>
        </div>-->

    </div>

    <p class="setitle col-md-4 col-md-offset-2 col-sm-7 pull-left">PERSONAL INFORMATION</p>
    <form id="koalareg" method="post">
        <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">FIRST NAME *</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="name" data-bv-field="name">
            </div>
        </div>

        <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">LAST NAME</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="lastname" data-bv-field="lastname">
            </div>
        </div>

        <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <section id="bdate" class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">DATE OF BIRTH</span></section>
                <input type="text" id="datetimepicker6" class="form-control_x col-md-8 col-sm-8 col-xs-8">
            </div>
        </div>

        <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <span class="yellowarn col-md-12 col-sm-12 col-xs-12"></span> <!-- .yellowarn is a custom warning field (koala.css/1971 ) -->
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">USERNAME *</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="username" data-bv-field="username">
            </div>
        </div>

        <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">GENDER</span></section>
                <select class="form-control_x col-md-8 col-sm-8 col-xs-8">
                    <option value=""></option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <section id="faddress" class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">ADDRESS</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8">
            </div>
        </div>

        <div class="input_holder reg_saveinfo col-md-6 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <button id="saveinfo" type="submit" class="btn save greener_dark btn-warning pull-right">SAVE CHANGES</button>
        </div>

        <p class="setitle col-md-4 col-md-offset-2 col-sm-7 col-sm-offset-2">PASSWORD</p>
        <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">PASSWORD *</span></section>
                <input id="pswd" type="password" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="password" data-bv-field="password">
            </div>

            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <span id="pswd_cnfrm" class="col-md-12 col-sm-12 col-xs-12 animated fadeInLeftBig"><i class="fa fa-exclamation-triangle"></i>&nbsp;Passwords do not match!</span>
                <section id="passrpt" class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title_2">REPEAT PASSWORD *</span></section>
                <input id="re_pswd" type="password" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="password_rpt" data-bv-field="password_rpt">
            </div>
        </div>

        <div class="input_holder reg col-md-6 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <button id="savepswd" type="submit" class="btn save greener_dark btn-warning pull-right">SAVE CHANGES</button>
        </div>


        <p class="setitle col-md-4 col-md-offset-2 col-sm-7 col-sm-offset-2">EMAIL</p>
        <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">EMAIL *</span></section>
                <input type="email" class="form-control_x col-md-8 col-sm-8 col-xs-8" name="email" data-bv-field="email">
            </div>
        </div>

        <div class="input_holder reg col-md-6 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <button id="savemail" type="submit" class="btn save greener_dark btn-warning pull-right">SAVE CHANGES</button>
        </div>

        <p class="setitle col-md-4 col-md-offset-2 col-sm-7 col-sm-offset-2">CELLPHONE NUMBER</p>
        <div class="form-group">
            <div class="input_holder col-md-5 col-md-offset-2 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <section class="fld_addon col-md-4 col-sm-4 col-xs-4"><span class="fld_title">CELLPHONE *</span></section>
                <input type="text" class="form-control_x col-md-8 col-sm-8 col-xs-8 onlynumberz" name="celly" data-bv-field="celly" placeholder="Format: 0XXXXXXXX" onfocus="this.placeholder='' " onblur="this.placeholder='Format: 0XXXXXXXX' ">
            </div>
        </div>

        <div class="input_holder reg col-md-6 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <button id="savemobile" type="submit" class="btn save greener_dark btn-warning pull-right">SAVE CHANGES</button>
        </div>

            <div class="input_holder col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <p class="ghostxt_dark pull-left clearfix">Fields marked with "*" are obligatory!</p>
            </div>
    </form>
  </div>
</div>

<script src="js/bootstrapValidator.js"></script>
<script src="js/jquery.form.js"></script>