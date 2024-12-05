<body>
{{--<div class="position-fixed bottom-0 end-0 me-3 mb-3 br-20">--}}
{{--    <button class="btn btn-primary rounded-circle" onclick="toggleChat()" id="chat-toggle-btn">💬</button>--}}

{{--    <div id="chat-window" class="card shadow-lg" style="width: 300px; display: none;">--}}
{{--        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">--}}
{{--            <h6 class="mb-0">Live Chat</h6>--}}
{{--            <button class="btn-close btn-close-white" onclick="toggleChat()"></button>--}}
{{--        </div>--}}
{{--        <div class="card-body" style="height: 300px; overflow-y: auto;" id="messages">--}}
{{--            <div class="text-muted small text-center">Loading...</div>--}}
{{--        </div>--}}
{{--        <div class="card-footer">--}}
{{--            <div class="input-group">--}}
{{--                <input id="chat-input" type="text" class="form-control" placeholder="Type your message...">--}}
{{--                <button class="btn btn-primary" onclick="sendMessage()">Send</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<footer class="untree_co--site-footer">

    <div class="container">
        <div class="row mt-5 pt-5 align-items-center">
            <div class="col-md-6 text-md-left">
                <!-- Link back to Untree.co can't be removed. Template is licensed under CC BY 3.0. If you purchased a license you can remove this. -->
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    <a href="index.html">Untree.co</a>. All Rights Reserved. Design by <a href="https://itok.am/"
                                                                                          target="_blank"
                                                                                          class="text-primary">IT OK LLC</a>
                </p>
            </div>
            <div class="col-md-6 text-md-right">
                <ul class="icons-top icons-dark">
                    <li>
                        <a href="https://www.facebook.com/Syunikhotel" target="_blank"><span class="icon-facebook"></span></a>
                    </li>
                    <li>
                        <a href="#"><span class="icon-twitter" target="_blank"></span></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/syunikhotel/?hl=am-et" target="_blank"><span class="icon-instagram"></span></a>
                    </li>
                    <li>
                        <a href="#"><span class="icon-tripadvisor"></span></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</footer>
<!-- JavaScript Libraries -->

{{--<script src="https://cdn.jsdelivr.net/npm/pusher-js@7.2/pusher.min.js"></script>--}}
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

<script src="{{asset('/site/js/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/site/js/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('/site/js/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('/site/js/js/vendor/owl.carousel.min.js')}}"></script>

<script src="{{asset('/site/js/js/vendor/jarallax.min.js')}}"></script>
<script src="{{asset('/site/js/js/vendor/jarallax-element.min.js')}}"></script>
<script src="{{asset('/site/js/js/vendor/ofi.min.js')}}"></script>

<script src="{{asset('/site/js/js/vendor/aos.js')}}"></script>

<script src="{{asset('/site/js/js/vendor/jquery.lettering.js')}}"></script>
<script src="{{asset('/site/js/js/vendor/jquery.sticky.js')}}"></script>

<script src="{{asset('/site/js/js/vendor/TweenMax.min.js')}}"></script>
<script src="{{asset('/site/js/js/vendor/ScrollMagic.min.js')}}"></script>
<script src="{{asset('/site/js/js/vendor/scrollmagic.animation.gsap.min.js')}}"></script>
<script src="{{asset('/site/js/js/vendor/debug.addIndicators.min.js')}}"></script>


<script src="{{asset('/site/js/js/main.js')}}"></script>

<!-- Js sona -->


<script src="{{asset('/site/js/sonJs/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('/site/js/sonJs/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('/site/js/sonJs/jquery-ui.min.js')}}"></script>
<script src="{{asset('/site/js/sonJs/jquery.slicknav.js')}}"></script>
<!-- <script src="sonJs/owl.carousel.min.js"></script> -->
<script src="{{asset('/site/js/sonJs/main.js')}}"></script>

<!--deluxe -->
<script src="{{asset('/site/js/deluxejs/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('/site/js/deluxejs/popper.min.js')}}"></script>
<script src="{{asset('/site/js/deluxejs/bootstrap.min.js')}}"></script>
<script src="{{asset('/site/js/deluxejs/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('/site/js/deluxejs/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/site/js/deluxejs/jquery.stellar.min.js')}}"></script>
{{--<script src="{{asset('/site/js/deluxejs/owl.carousel.min.js')}}"></script>--}}
{{--<script src="{{asset('/site/js/deluxejs/jquery.magnific-popup.min.js')}}"></script>--}}
{{--<script src="{{asset('/site/js/deluxejs/aos.js')}}"></script>--}}
<script src="{{asset('/site/js/deluxejs/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('/site/js/deluxejs/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('/site/js/deluxejs/scrollax.min.js')}}"></script>
<script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
<script src="{{asset('/site/js/deluxejs/google-map.js')}}"></script>
<script src="{{asset('/site/js/deluxejs/main.js')}}"></script>
<script src="{{asset('/site/js/js/custom.js')}}"></script>
<script>
    const messagesDiv = document.getElementById("messages");

    // Load messages
    fetch('/messages')
        .then(response => response.json())
        .then(messages => {
            messagesDiv.innerHTML = messages.map(msg =>
                `<div class="${msg.sender_type === 'guest' ? 'text-end' : ''}">
            <span class="badge bg-${msg.sender_type === 'guest' ? 'primary' : 'secondary'}">${msg.message}</span>
          </div>`
            ).join('');
        });

    // Setup Pusher
    const pusher = new Pusher('{{config('broadcasting.connections.pusher.key')}}', { cluster: 'ap2' });
    const channel = pusher.subscribe('chat-channel');
    channel.bind('message-sent', data => {
        const newMessage = `<div class="${data.message.sender_type === 'guest' ? 'text-end' : ''}">
        <span class="badge bg-${data.message.sender_type === 'guest' ? 'primary' : 'secondary'}">${data.message.message}</span>
      </div>`;
        messagesDiv.innerHTML += newMessage;
    });

    // Toggle chat window
    function toggleChat() {
        const chatWindow = document.getElementById("chat-window");
        chatWindow.style.display = chatWindow.style.display === "none" ? "block" : "none";
    }

    // Send message
    function sendMessage() {
        const input = document.getElementById("chat-input");
        const message = input.value.trim();
        if (message) {
            fetch('/send-message', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    sender_type: 'guest',
                    _token: '{{ csrf_token() }}',
                    lang_id: '{{$app->getLocale()}}',
                    message }),
            });
            input.value = "";
        }
    }
</script>
