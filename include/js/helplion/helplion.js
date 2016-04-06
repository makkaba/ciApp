
var count = 0;

  $("#first").click(function(){
    $.ajax({
    	type: "POST",
    	url: "/index.php/Ajax/getOneCode/",
      data: { sequence : "1"},
    	success: function(result){
        
        l('success');
        //console.log(result);
        displayCodeOne(JSON.parse(result));
        //displayCodeOne(JSON.parse(result));
        //console.log(result);
        //displayCodeAll(JSON.parse(result));
        //var t = typeof(result);
        //console.log(result);
        //console.log(obj);
    }});
});

  function l(msg){

    console.log("log" + count++ +":"+msg);
  }
  



  function displayCodeAll(data){


    //alert(data[0].sequence);
    //console.log(typeof(data));
    //$('#log').text(data[0].content);
    //$('.source-container').append("<div class='language-markup'><pre><code><xmp><html><body><h1></h1></body></html></xmp></code></pre></div>");
    var html = "<div class='language-markup'><pre><code><xmp>";
    html += data[1].content;
    html += "</xmp></code></pre></div>";
    $('.source-container').append(html);

    console.log(data.length);

  	for(var i=0; i<4; i++){


      
      //var each = data[i];
  		//text = data[i].content;
  		//console.log(text);
  		//console.log(data[i].content);
      //$('#kk-code').text(data[i].content);

      //$('#log').text(each.content);
  		//$('#kk-code').text(each.content);
  		

  		//document.getElementById('kk-code').innerHTML = text;
  		//var htmlObj = $.parseHTML(data[i].content);
  		//$('#kk-code').append(data[i].content);
  		//console.log(data[i].content);
  		
  	}

  Prism.highlightAll();
  }



  function displayCodeOne(ParsedSource){
    l('in function');

    var html = "<div class='language-markup'><pre><code><xmp>";
    html += ParsedSource.content;
    html += "</xmp></code></pre></div>";
    $('.source-container').append(html);
    l('after append');

    Prism.highlightAll();
  }
