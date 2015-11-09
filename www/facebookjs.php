<script>
window.fbAsyncInit = function() {
    FB.init({
       appId: '230170050360219',
       secret: '3ba998ce421b66303fd5cdfdbe7cfce4',
       cookie: true,
       xfbml: true,
       oauth: true
    }); 
};


(function() {
var e = document.createElement('script'); e.async = true;
e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
document.getElementById('fb-root').appendChild(e);
}());

function fblogin(){
FB.login(function(response){
if (response.authResponse) {
window.location='http://www.bunchofus.com/mobile/fbinclude.php';
}
},{scope: 'publish_stream'});
}
</script>
<!--
<script>
window.fbAsyncInit = function() {
FB.init({
appId: '389972494384429',
secret: 'd4553d1d446701e6aad801a90abb2884',
cookie: true,
xfbml: true,
oauth: true,
});
FB.Event.subscribe('auth.login', function(response) {
window.location.reload();
});
FB.Event.subscribe('auth.logout', function(response) {
window.location.reload();
});
};
(function() {
var e = document.createElement('script'); e.async = true;
e.src = document.location.protocol +
'//connect.facebook.net/en_US/all.js';
document.getElementById('fb-root').appendChild(e);
}());
</script>
-->
<script>
function fbLogout() {
        FB.logout(function (response) {
            //Do what ever you want here when logged out like reloading the page
            window.location.reload();
        });
    }
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=230170050360219";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>