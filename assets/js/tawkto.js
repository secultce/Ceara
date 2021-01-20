var jQuery = $;
jQuery(function(){   
    CreateDockSoftiumWebChat("Atendimento Online","https://tawk.to/chat/5f35c9424c7806354da63dc9/default");
    
    jQuery("html").on("click", ".j_open_chat", function(){
        jQuery(".dock").css({"height":"435px", "display":"block"})
        jQuery("#sideButton").hide();
    });
                        
    jQuery("html").on("click",".btn_minimizar2",function(){
        jQuery(this).closest("div.dock").css({"height":"0px", "display":"none"});
        jQuery(".dock_bubble").css({"display":"block"})
        jQuery("#sideButton").show();
    });	
        
    function CreateDockSoftiumWebChat(nome , url_dock){
        
        var softium_dock_style = `
        <style>
        *,
*:after,
*:before {
    margin: 0;
    padding: 0;

}

embed,
video,
iframe,
iframe[style] {
    max-width: 100%;
    height: auto;
}

.dock {
    background: rgba(35, 35, 35, 0.85);
    position: fixed;
    bottom: 0;
    right: 30px;
    height: 0;
    width: 100%;
    max-width: 335px;
    box-shadow: 0px 2px 10px #000;
    display: none;
    z-index: 20;
}

.dock .dock_iframe {
    height: 100%;
    width: 100%;
    border: none;
}

.dock_buble {
    position: absolute;
    right: 0;
    bottom: 60%;
    height: 100px;
    width: 47px;
    z-index: 9999;
}
.dock_buble2{
    position: absolute; width: 42px; height: 127px; margin-top: 0px;
}

.dock_buble:hover {
    opacity: 0.8;
}

.btn_minimizar {
    padding: 6px 7px;
    border-radius: 4px;
    
    font-size: 0em;
    display: block;
    position: absolute;
    top: -29px;
    
    z-index: 9999;
}

.dock_buble img {
    
}

.btn_minimizar img {
    max-width: 15px;
}

.btn_open {
    padding: 5px 7px;
    border-radius: 4px;
    max-width: 36px;
    text-align: center;
    margin-left: 10px;
}

.btn_open img {
    max-width: 15px!important;
    margin-right: 0!important;
}

.btn_minimizar:hover {
    cursor: pointer;
    background: #000;
}

.bc-frame-header.bc-frame-header-landscape {
    height: 1.3em;
    height: 1.36em;
    line-height: 1.3em;
}

.bc-frame-header.bc-frame-header-landscape {
    height: 1.3em;
    height: 1.36em;
    line-height: 1.3em;
}

.bc-frame-header {
    background: #006598;
}

.bc-frame-header {
    vertical-align: middle;
    padding: 0.5em;
    height: 1.5em;
    line-height: 1.5em;
    cursor: move;
    position: relative;
    font-size: 1em;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    width: auto;
}

.bc-frame-header {
    background: #c16a1f;
}
.ocultar {
    display:none;
  }
.bc-frame-header {
    vertical-align: middle;
    padding: 0.5em;
    height: 1.5em;
    line-height: 1.5em;
    cursor: move;
    position: relative;
    font-size: 1em;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    width: auto;
}
        </style>`;
        
    var softium_dock = "<configuration> <system.webServer> <httpProtocol> <customHeaders> <add name='X-Frame-Options' value='ALLOW' /> </customHeaders> </httpProtocol> </system.webServer> </configuration> <div id='sideButton' class='dock_buble j_open_chat'><div class='dock_buble2'><img  border='0' alt='' src='https://www.lanlink.com.br/wp-content/uploads/2017/03/chat-1.png'></div><div class='btn_open'></div></div><div class='dock'><div><div class='bc-frame-header bc-frame-header-landscape btn_minimizar2'><div class='bc-headbtn bc-headbtn-minimize' style='display: block;'></div><div class='bc-frame-title' title='Atendimento Mapas Ceará' alt='Atendimento Mapas Ceará'><center><font color='white'>Atendimento Mapas Ceará</font></center></div><div class='bc-headbtn bc-headbtn-menulist'></div><div class='bc-clear'></div></div></div><iframe id='dock_iframe_id' class='dock_iframe' style='z-index: 10;' src='"+url_dock+"'></iframe></div>";    
        jQuery("body").prepend(softium_dock_style+softium_dock);
    }
    //
});