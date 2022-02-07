<section class="contact-form-map rel">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div role="form">
                        <?php $uuid = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
                        <form action="{{ route('frontend.contact') }}" method="post" id="contact_form_{{ $uuid }}"> @csrf
                            <div class="form-wrapper">
                                <h1>{{ $value[0]->title }}</h1>
                                <h2>{{ $value[0]->description }}</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-wrapper">
                                            <input type="text" name="full_name" value="" size="40" placeholder="Full name"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-wrapper">
                                            <input type="text" name="subject" value="" size="40" placeholder="Subject"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-wrapper">
                                            <input type="email" name="your_email" value="" size="40" placeholder="E-mail"></span>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-wrapper">
                                            <textarea name="message" cols="40" rows="10" placeholder="Message"></textarea></span>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="submit-wrapper">
                                            <input type="button" value="Submit" onclick="doSubmit_{{ $uuid }}(this)" style="cursor: pointer;"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="output d-none mt-3"></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="map-wrapper">
                        {!! $value[0]->address !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function doSubmit_{{ $uuid }}(ele) {
            var form = $(ele).closest('form');
            var full_name_ele = form.find('input[name=full_name]');
            if(full_name_ele.val() == '') {
                full_name_ele.addClass('error');
                full_name_ele.focus();
                return false;
            }
            var subject_ele = form.find('input[name=subject]');
            if(subject_ele.val() == '') {
                subject_ele.addClass('error');
                subject_ele.focus();
                return false;
            }
            var email_ele = form.find('input[name=your_email]');
            var check_email = ValidateEmail(email_ele.val());
            if(!check_email) {
                email_ele.addClass('error');
                email_ele.focus();
                return false;
            }
            var msg_ele = form.find('textarea[name=message]');
            if(msg_ele.val() == '') {
                msg_ele.addClass('error');
                msg_ele.focus();
                return false;
            }
            
            form.ajaxSubmit({
                success: function(res) {
                    if(res.success) {
                        full_name_ele.val('');
                        subject_ele.val('');
                        email_ele.val('');
                        msg_ele.val('');
                        var output = form.find('div.output').removeClass('d-none').addClass('alert alert-success');
                        output.html(res.message);
                    }
                },
                error: function(err) {
                    var output = form.find('div.output').removeClass('d-none').addClass('alert alert-error');
                    output.html(res.message);
                }
            });
        }

        function ValidateEmail(mail) {
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail)) {
                return (true);
            } else {
                return (false);
            }
        }
    </script>
</section>