@extends('layouts.web')

@section('content')
<div class="section our-work" id="our-team">
    <div class="container">
      <p><h3 class="title-content">ផលិតផលកសិកម្ម</h3></p>
      <div class="row">
        @foreach($product as $key  => $value)
        <div class="col-sm-4">
          <div class="image">
            <a href="#">
              <img src="images/{{$value->image}}"  width="100%"/>
              <div class="mask">
                <a class='inline' href="#inline_2" style="color: white;">
                  <h3 style="font-size: 20px;">{{$value->pro_name}}</h3>
                  <hr style="border:1px solid white;">
                    <?php echo substr($value->description ,0,100); ?>
                </a>
                <!-- This contains the hidden content for inline calls -->
                  <div style='display:none'>
                    <div id='inline_2' style='background:#fff; border-radius: 5px;'>
                      <div class="img-pop">
                        <img src="images/{{$value->image}}" width="100%"/>
                      </div>
                      <div class="dis-pop">
                        <div class="paragrap">
                          <h3>CAMBODIA AUTOMOTIVE 
                  INDUSTRY FEDERATION</h3>
                          <hr style="border:1px solid #ccc;">
                          <p>Branding Monthly media relations Digital strategy  Influence</p>
                           <p><a href="submit.php" target="_blank"><span class="btn-download">Download</span></a></p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </a>                                        
          </div>
        </div>
        @endforeach
    </div>
    </div><!-- Our team -->
</div><!-- .Our team -->



    <div class="section our-network  parallaxbg" id="our-network">
    <div class="container">
      <h3 class="title-content">បណ្តាញ</h3>
      <div class="row logo-slide">
        <div class="col-sm-3">
          <a href="#" target="_blank">
            <img src="{{asset('front-end/images/200x100.png')}}" width="100%"/>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="#" target="_blank">
            <img src="{{asset('front-end/images/200x100.png')}}" width="100%"/>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="#" target="_blank">
            <img src="{{asset('front-end/images/200x100.png')}}" width="100%"/>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="#" target="_blank">
            <img src="{{asset('front-end/images/200x100.png')}}" width="100%"/>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="#" target="_blank">
            <img src="{{asset('front-end/images/200x100.png')}}" width="100%"/>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="#" target="_blank">
            <img src="{{asset('front-end/images/200x100.png')}}" width="100%"/>
          </a>
        </div>
      </div>
    </div><!-- Our-network -->
    <div class="mymask"></div>
    </div><!-- .Our-network -->

<div class="section contact-us" id="contact-us">
    <div class="container">
      <p><h3 class="title-content">ទំនាក់ទំនង</h3></p>
      <p class="text-center">
        Let’s connect and we can start talking about what is important for you and your client to hear from you. Our team would be making a first call with you to understand what you have in mind and we can then propose you the best approach angle to address your need.You only need to fill the form below and you’ll hear from us.
      </p>

      <?php 
        if(isset($_POST['submit'])){
             $fname    = $_POST['fname'];
             $lname    = $_POST['lname'];
             $fullname = $fname.$lname;

             $subject  = $_POST['title'];
             $company  = $_POST['company'];
             $email    = $_POST['email'];
             $message  = $_POST['message'];
             $submit   = $_POST['submit'];  

              $to = 'thiencambodia168@gmail.com';

                $htmlContent = '
                  <html>
                    <body>
                        <h1>'.$subject.'</h1>
                        <p>Company: '.$company.'</p>
                        <p>'.$message.'</p>
                    </body>
                  </html>';

                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";  

                // Additional headers
                $headers .= 'From: '. $fullname.'<'.$email.'>' . "\r\n";
                //$headers .= 'Cc: welcome@example.com' . "\r\n";
               // $headers .= 'Bcc: welcome2@example.com' . "\r\n";

                // Send email
                if(mail($to,$subject,$htmlContent,$headers)):
                  // echo $successMsg = 'Email has sent successfully.';
                   echo "<p class='alert alert-success' role='alert'>Email has sent successfully. Thank you " . $fullname . ", we will contact you shortly.</p>";
                else:
                   echo $errorMsg = "<p class='alert alert-danger' role='alert'>Email sending fail.</p>";
                endif;

            // You can also use header('Location: thank_you.php'); to redirect to another page.
            }
        ?>


      <form action="#contact-us" method="post" class="myform">
        <div class="row">
          <div class="col-sm-6"><input type="text" id="name" name="fname" class="form-control" placeholder="*First name..." required=""></div>
          <div class="col-sm-6"><input type="text" id="subject" name="lnmae" class="form-control" placeholder="*Last name..." required=""></div>
          <div class="col-sm-6"><input type="text" class="form-control" name="company" placeholder="*Company..." required=""></div>
          <div class="col-sm-6"><input type="text" class="form-control" name="title" placeholder="*Title..." required=""></div>
          <div class="col-sm-6"><input type="email" class="form-control" name="email" placeholder="*Email..." required=""></div>
          <div class="col-sm-6"><textarea class="form-control" name="message" placeholder="*Message..." required style="height: 100px;"></textarea></div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">
            <p style="padding: 10px 0;"><input type="submit" name="submit" value="SEND MESSAGE" class="send-sms"></p>
          </div>
        </div>
      </form>
    </div>
</div><!-- .contact us -->
@endsection
