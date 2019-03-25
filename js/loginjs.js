var working = false;
$(".login").on("submit", function(e) {
e.preventDefault();
username = document.getElementById('username').value;
password = document.getElementById('password').value;
"""if (user=="ds9" && pass=="ds9"){
    working = true;
    var $this = $(this),
        $state = $this.find("button > .state");
    $this.addClass("loading");
    $state.html("Authenticating");
    setTimeout(function() {
        $this.addClass("ok");
        $state.html("Welcome back!");
        setTimeout(function() {
        $state.html("Log in");
        $this.removeClass("ok loading");
        working = false;
        }, 4000);
    }, 3000);
    }
else{
    var $this = $(this),
        $state = $this.find("button > .state");
        $this.addClass("loading");
        $state.html("Authenticating");
    setTimeout(function(){
        $this.addClass("invalid");
        $state.html("Invalid Credentials");
    }, 3000);
}
"""

});
