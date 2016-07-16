    <div class="footer_top_area">
      <div class="inner_footer_top"> <img src="{{ URL::to('images/add3.png') }}" alt="" /> </div>
    </div>
    <div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
          <li><a href="{{ route('world') }}">world news</a></li>
          <li><a href="{{ route('sports') }}">sports</a></li>
          <li><a href="{{ route('tech') }}">tech</a></li>
          <li><a href="{{ route('business') }}">business</a></li>
          <li><a href="{{ route('media') }}">Media</a></li>
          <li><a href="{{ route('entertainment') }}">entertainment</a></li>
          <li><a href="{{ route('culture') }}">culture</a></li>
          <li><a href="{{ route('books') }}">Books</a></li>
          <li><a href="{{ route('articales') }}">Articales</a></li>
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2045 The News Reporter Inc. All rights reserved | Design by
         <a target="_blank" rel="nofollow" href="http://www.graphicsfuel.com/2045/10/wp-magazine-theme-template-psd/">Rafi MD</a></p>
        <p>Trade marks and images used in the design are the copyright of their respective owners and are used for demo purposes only.</p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{ URL::to('assets/js/jquery-min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::to('assets/js/jquery.bxslider.js') }}"></script> 
<script type="text/javascript" src="{{ URL::to('assets/js/selectnav.min.js') }}"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>