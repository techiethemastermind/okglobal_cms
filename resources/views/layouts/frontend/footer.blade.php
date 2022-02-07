<footer class="rel">
    <a href="" class="back-to-top" id="back-to-top">
        <i class="fa fa-chevron-up">
        </i>
        Back to top
    </a>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="col-one">
                    <img src="/img/footer-logo.png" alt="" class="logo-footer">
                    <div class="footer-desc">
                        <p>{{ config('app.description') }}</p>
                    </div>
                    <ul class="list-media">
                        <li>
                            <a href="{{ config('social.facebook') }}" class="hvr-buzz-out" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('social.twitter') }}" class="hvr-buzz-out" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('social.instagram') }}" class="hvr-buzz-out" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('social.telegram') }}" class="hvr-buzz-out" target="_blank">
                                <i class="far fa-paper-plane"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('social.discord') }}" class="hvr-buzz-out" target="_blank">
                                <img src="/img/discord.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('social.youtube') }}" class="hvr-buzz-out" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('social.custom1') }}" class="hvr-buzz-out" target="_blank">
                                <img src="/img/medium.png" alt="">
                            </a>
                        </li>
                    </ul>
                    <div class="rss-links">
                        <div class="rss-item">
                            <a target="_blank" href="{{ config('social.coindesk') }}"><i
                                    class="fa fa-rss"></i>CoinDesk</a>
                        </div>
                        <div class="rss-item">
                            <a target="_blank" href="{{ config('social.news') }}"><i
                                    class="fa fa-rss"></i>All News</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="col-two common-col">
                    <div class="links">
                        <h2>Useful Link</h2>
                        <ul>
                            <li><a href="/businesses">Our Business</a></li>
                            <li><a href="/#paper-deck">White Paper</a></li>
                            <li><a href="/#paper-deck">Pitch Deck</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="col-three common-col">
                    <div class="col-letter">
                        <h2>Subscribe To Our Newsletter</h2>
                        <p>Sign up to receive exclusive updates on any huge announcement and more!</p>
                        <?php $uuid = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
                        <form method="post" action="{{ route('frontend.subscribe') }}" >
                            @csrf
                            <div class="newsletter-plugin">
                                <input type="email" placeholder="Enter your email...." name="email">
                                <button type="button" class="btn-submit" onclick="doSubscribe(this)">SUBSCRIBE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-note text-center">
            <p>Copyright © <span class="latest_year"></span> 2021 All rights reserved by OKGlobal Coin SWITCH Pte. Ltd. (UEN: 201916967R).</p>
        </div>
    </div>

    @push('after-scripts')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });

        function doSubscribe(ele) {
            var form = $(ele).closest('form');
            var email_ele = form.find('input[name=email]');
            var check_email = ValidateEmail(email_ele.val());
            if(!check_email) {
                email_ele.addClass('error');
                email_ele.focus();
                return false;
            }
            form.ajaxSubmit({
                success: function(res) {
                    if(res.success) {
                        window.location.href = '/thank-you';
                    }
                },
                error: function(err) {
                    console.log(err);
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
    @endpush
</footer>