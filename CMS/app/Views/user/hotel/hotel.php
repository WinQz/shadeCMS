<style>

body {
	overflow:hidden; 
}

.client{
	position:absolute; 
	left:0; 
	right:0; 
	top:0; 
	bottom:0; 
	overflow:hidden; 
	height:100%;
	width:100%;
}

#client-ui {
	position:absolute; 
	left:0; 
	right:0; 
	top:0; 
	bottom:0; 
	overflow:none; 
	height:100%;
	width:100%;
}

iframe {
	position:absolute; 
	left:0; 
	right:0; 
	top:0; 
	bottom:0; 
	overflow:none; 
	height:100%;
	width:100%;
}
</style>

<div id="client-ui">
	<div class="client" id="client"></div>
<link rel="stylesheet" type="text/css" href="/assets/client.css">
<iframe id="flash-container" src="/nitro/index.html?sso=<?= $auth_token ?>"></iframe>
	</div>
</div>