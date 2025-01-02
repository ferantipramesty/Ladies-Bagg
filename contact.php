<?php include('header.php') ?>
<?php
$href = '';
if(isset($_GET['cs'])) {
    $success = 'Send successfully';
}
else {
    $success = '';
}
if(isset($_GET['cf'])) {
    $fail = "Send fail;";
}
else {
     $fail = '';
}
?>

<div class="container">
    <div class="row">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.59888610072!2d107.0162143!3d-6.1844023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69890001db958d%3A0x974428cf182d2e8f!2sJims%20honey%20NiSel%20Store!5e0!3m2!1sid!2sid!4v1733912304243!5m2!1sid!2sid"
            width="100%" height="400" frameborder="0" padding="0px;"></iframe>


    </div>
</div> <!-- container-fluid -->
<div class="container">
    <div class="row">
        <div class="contact-info">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <h3> CONTACT INFORMATION </h3>
                <br>
                <p>JIMS HONEY was established in Indonesia since 2014, started as a trading company providing daily
                    fashion item such as bag, wallet and timepiece with the company name as the brand itself. JIMS HONEY
                    was founded with a vision to empower women around the world to express themselves freely through
                    fashion. JIMS HONEY believes in social and environmental responsibility. </strong>
                <address><strong>
                        <p style="color: #f19fc5 ; font-size: 15px;">Ladies Bag</p>
                        Jims honey NiSel Store
                        Ktw, Jl. Taman Flora Raya, Bahagia<br>
                        Kec. Babelan, Kabupaten Bekasi, Jawa Barat 17610
                    </strong><br>
                    Telephone: +62823456789<br>

                    E-mail: <a href="">ladiesbag@gmail.com</a><br>
                </address><!-- address (end) -->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="title">
                    <h3> CONTACT </h3>
                </div>
                <span style="color:red"><?php echo $success. $fail?></span>
                <form action="contact-back.php" method="POST">
                    <div class="content">
                        <form action="" method="post" accept-charset="utf-8">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap:<span>*</span></label>

                        <input name="contact-name" placeholder="Masukkan nama Anda di sini" class="form-control"
                            required="required" maxlength="255" type="text" id="contact-name">
                    </div>
                    <div class="form-group">
                        <label>Email:<span>*</span></label>

                        <input name="contact-email" placeholder="Masukkan email Anda di sini" class="form-control"
                            required="required" maxlength="255" type="email" id="contact-email">
                    </div>
                    <div class="form-group">
                        <label>Topic:<span>*</span></label>

                        <input name="contact-subject" placeholder="Masukkan topic Anda di sini" class="form-control"
                            required="required" maxlength="255" type="text" id="contact-subject">
                    </div>
                    <div class="form-group">
                        <label>Content: <span>*</span></label>
                        <textarea name="contact-content" placeholder="Your comment..." class="form-control" rows="4"
                            id="ContactContent" required>
                        </textarea>
                    </div>
                    <button style="background-color:#f19fc5 ; float: right; color: white" type="submit"
                        name="sendcontact" class="btn btn-default">Send contact</button>
                    <br>
                </form>
            </div>

        </div>

    </div>
</div>
<br>
<?php include("footer.php") ?>
</body>

</html>