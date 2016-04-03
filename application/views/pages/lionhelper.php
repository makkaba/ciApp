hello world, this is lion helper.


<button id = "first">첫째 주 코드</button>
<button id = "second">둘째 주 코드</button>

<!-- 라이브리 시티 설치 코드 -->
<div id="lv-container" data-id="city" data-uid="MTAyMC8yNjAzMi8yNjI0">
	<script type="text/javascript">
   (function(d, s) {
       var j, e = d.getElementsByTagName(s)[0];

       if (typeof LivereTower === 'function') { return; }

       j = d.createElement(s);
       j.src = 'https://cdn-city.livere.com/js/embed.dist.js';
       j.async = true;

       e.parentNode.insertBefore(j, e);
   })(document, 'script');
	</script>
<noscript> 라이브리 댓글 작성을 위해 JavaScript를 활성화 해주세요</noscript>
</div>
<!-- 시티 설치 코드 끝 -->

<script>
  
  $("#first").click(function(){
    $.ajax({url: "/getSourcecode", success: function(result){
        alert("it works");
    }});
});
</script>