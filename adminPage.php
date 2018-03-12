
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>HACKED BY ARGOS</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js'></script>
    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
   /* @import url(https://fonts.googleapis.com/css?family=Wire+One|Life+Savers|Flamenco|Bigelow+Rules|Underdog|Goudy+Bookletter+1911|Nixie+One|Tangerine|Poiret+One|Allura); */
body {
    color: #aaaaaa;
    font-family: 'Goudy Bookletter 1911';
    background-color: #222;
}

div {
    text-align: center;
    margin: 0px;
}

h1 {
    font-size: 64px;
    text-align: center;
    font-weight: 300;
    padding: .5em;
    margin: 0;
}

h2 {
    font-size: 24px;
    text-align: center;
    font-weight: 300;
    margin: 0;
}
        
        p {
    font-size: 24px;
    text-align: center;
    font-weight: 300;
    margin: 0;
}

a {
	color: #aaaaaa;
	text-decoration: none;
}

a:hover {
	color: white;
}

    </style>
    <script>
    var node = document.querySelector('h2');
var text = new T(node);

function random(min, max) {
    return (Math.random() * (max - min)) + min;
}

text.chars.map(function(v, i){
    TweenMax.from(v, 2.5, {
        opacity: 0,
        x: random(-500, 500),
        y: random(-500, 500),
        z: random(-500, 500),
        scale: .1,
        delay: i * .02,
        yoyo: true
    });
});

    </script>
</head>
<body>
  <?php
    include ('db_info.php');
        $info = $_SESSION["user_session"];
        $sql ="SELECT id FROM hacking";
        $res_data = mysqli_query($conn,$sql);
        
    ?> <h1>Hello ARGOS World!</h1>
    <?php
    while( $row = mysqli_fetch_array($res_data)) {
    ?>
  <br>
    
    <p><?php echo $row["id"];?></p>
    
    

    <?php } ?>
    <br><br><br><br><br><br>
    <div style="text-align: center;">
    <span class="glyphicon glyphicon-log-out" style="color:white; "></span>
                <a href="./logout.php" style="color:white; text-decoration:none">
                    로그인 화면으로</a>
    </div>
    <div>
    </div>
    <script src="https://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js'></script>
</body>
<script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script>
    
(function(window, undefined) {
    var
        doc = window.document,
        defualtStyle = "display:inline-block;",
        Textile = function(n) {
            var
                wordDiv,
                charDiv;
            this.words = [];
            this.chars = [];
            this.contentClone = n.innerHTML;
            this.n = n;
            n.innerHTML = '';
            var wordsArr = this.contentClone.split(' ');
            for (var i = 0, wordslen = wordsArr.length; i < wordslen;) {
                wordDiv = doc.createElement('div');
                wordDiv.style.cssText += defualtStyle;
                var word = wordsArr[i++],
                    charsArr = word.split('');
                for (var j = 0, charslen = charsArr.length; j < charslen;) {
                    charDiv = doc.createElement('div');
                    charDiv.style.cssText += defualtStyle;
                    charDiv.textContent = charsArr[j++];
                    wordDiv.appendChild(charDiv);
                    this.chars.push(charDiv);
                }
                n.appendChild(wordDiv);
                this.words.push(wordDiv);
                if (i !== wordslen) {
                    wordDiv.insertAdjacentHTML('afterEnd', ' ');
                }
            }
        }
    Textile.prototype.revert = function() {
        this.n.innerHTML = this.contentClone;
    }
    if (typeof window === "object" && typeof window.document === "object") {
        window.Textile = window.T = Textile;
    }
})(window);</script><script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
<script >var node = document.querySelector('h2');
var text = new T(node);

function random(min, max) {
    return (Math.random() * (max - min)) + min;
}

text.chars.map(function(v, i){
    TweenMax.from(v, 2.5, {
        opacity: 0,
        x: random(-500, 500),
        y: random(-500, 500),
        z: random(-500, 500),
        scale: .1,
        delay: i * .02,
        yoyo: true
    });
});

//# sourceURL=pen.js
</script>
</html>
