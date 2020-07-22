


    <div class="main_1_1">

      <link href='//fonts.googleapis.com/css?family=Dosis:400,600' rel='stylesheet' type='text/css'>
      <div class="main_1_pic">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
        <h1>Здесь вы можете изучить: <br>
            <span
            class="txt-rotate"
            data-period="2500"
            data-rotate='[ "Python", "JavaScript", "AngularJS","Git", "MongoDB", "SQL","NodeJS","C programming"]'></span>
        </h1>
      </div>      
      <div class="main_slide">
        <img src='/images/216c864ac6e9b87691f7e76f24f67ff0.jpg' id="image_1" />
        <img src='/images/574716-636614621185089877-16x9-1-1.png' id="image_2" style="opacity: 0; filter: alpha(opacity=0); "   />
        <img src='/images/7-Upgrading-to-Angular-5.jpg' id="image_3" style="opacity: 0; filter: alpha(opacity=0); "  />
        <img src='/images/git.0.jpg' id="image_4" style="opacity: 0; filter: alpha(opacity=0); "  />
        <img src='/images/mongoDbLgo.png' id="image_5" style="opacity: 0; filter: alpha(opacity=0); "   />
        <img src='/images/sql-express.png' id="image_6" style="opacity: 0; filter: alpha(opacity=0); "  />
        <img src='/images/xc4na1sca8xlufsjkj3yyo1z9m8.jpeg' id="image_7" style="opacity: 0; filter: alpha(opacity=0);" />
        <img src='/images/63503204d18160dd6a733e989b70c404_XL.jpg' id="image_8" style="opacity: 0; filter: alpha(opacity=0);"   />
      </div>
    </div>
    <script>
          var total_pics_num = 8; // колличество изображений
      var interval = 5000;    // задержка между изображениями
      var time_out = 1;       // задержка смены изображений
      var i = 0;
      var timeout;
      var opacity = 100;
      function fade_to_next() {
        opacity--;
        var k = i + 1;
        var image_now = 'image_' + i;
        if (i == total_pics_num) k = 1;
        var image_next = 'image_' + k;
        document.getElementById(image_now).style.opacity = opacity/100;
        document.getElementById(image_now).style.filter = 'alpha(opacity='+ opacity +')';
        document.getElementById(image_next).style.opacity = (100-opacity)/100;
        document.getElementById(image_next).style.filter = 'alpha(opacity='+ (100-opacity) +')';
        timeout = setTimeout("fade_to_next()",time_out);
        if (opacity==1) {
          opacity = 100;
          clearTimeout(timeout);
        }
      }
      setInterval (
        function() {
          i++;
          if (i > total_pics_num) i=1;
          fade_to_next();
        }, interval
      );
    </script> 
    <script>
          var TxtRotate = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
      };

      TxtRotate.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

      var that = this;
      var delta = 300 - Math.random() * 100;

      if (this.isDeleting) { delta /= 2; }

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
      }

      setTimeout(function() {
        that.tick();
      }, delta);};
      window.onload = function() {
      var elements = document.getElementsByClassName('txt-rotate');
      for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
      document.body.appendChild(css);};
    </script>







