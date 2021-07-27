<!DOCTYPE html>
<html>
<head>

<link rel ="stylesheet" type="text/css" href="task22.css">

</head>
<body>

<h1> RoboticBase control panel</h1>
 <pre>
<button type="button" id="R" >STOP</button>
<br><br>
<br>
<button type="button" id="R1"  >RIGHT &#8594 </button>
<br>
<br>
<br>
<button type="button" id="R2" >LEFT &#8592</button>
<br>
<br>
<br>
<button type="button" id="R3" >FORWARD &#8593 </button>
<br>
<br>
<br>
<button type="button" id="R4" >BACKWARD &#8595</button>
  </pre> 
 
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "c9dbc90f-f390-412b-b15b-65ac7b4510a5", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "d7e74f43-9f88-4184-923e-906e3602ca62", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>


</body>
</html>
